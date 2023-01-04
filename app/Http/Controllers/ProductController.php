<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function loadProductMember(){

        $product_data = DB::table('products')->get();

        $product_data = Product::paginate(8);

        return view('member.home_member', [
            'product_data' => $product_data
        ]);
        
    }

    public function loadProductAdmin(){

        $product_data = DB::table('products')->get();

        $product_data = Product::paginate(8);
        
        return view('admin.home_admin', [
            'product_data' => $product_data
        ]);
        
    }

    public function loadDetailProductMember($id){

        $detail_product_data = DB::table('products')->get()->where('id', $id);

        if($detail_product_data->contains('id', $id)){
            return view('member.detail_product_member', [
                'detail_product_data' => $detail_product_data
            ]);
        }else{
            return abort(404);
        }
    }

    public function loadDetailProductAdmin($id){

        $detail_product_data = DB::table('products')->get()->where('id', $id);

        if($detail_product_data->contains('id', $id)){
            return view('admin.detail_product_admin', [
                'detail_product_data' => $detail_product_data
            ]);
        }else{
            return abort(404);
        }
    }

    public function addItemPage(){
        return view('admin.add_item');
    }
    
    // Store Image
    public function storeImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('image'), $imageName);

        // //Store in Storage Folder
        // $request->image->storeAs('images', $imageName);

        // // Store in S3
        // $request->image->storeAs('images', $imageName, 's3');

        //Store IMage in DB 


        return back()->with('success', 'Image uploaded Successfully!')
        ->with('image', $imageName);
    }
    
}
