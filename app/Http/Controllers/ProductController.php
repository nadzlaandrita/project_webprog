<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function loadProductPage(){

        $product_data = DB::table('products')->get();

        $product_data = Product::paginate(8);

        if(Auth::user()->role == 'admin'){
            return view('admin.home_admin', [
                'product_data' => $product_data
            ]);
        }else{
            return view('member.home_member', [
                'product_data' => $product_data
            ]);
        }

    }

    public function loadDetailProduct($id){

        $detail_product_data = DB::table('products')->get()->where('id', $id);

        if($detail_product_data->contains('id', $id)){

            if(Auth::user()->role == 'admin'){
                return view('admin.detail_product_admin', [
                    'detail_product_data' => $detail_product_data
                ]);
            }else{
                return view('member.detail_product_member', [
                    'detail_product_data' => $detail_product_data
                ]);
            }

        }else{
            return abort(404);
        }
    }

    public function addItemPage(){
        return view('admin.add_item');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'inputName' => 'required|min:5|max:20',
            'inputSize' => 'required',
            'inputPrice' => 'required|integer|min:1000',
            'inputStock' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $path = $request->image->move('image/', $imageName);


        //CREATE NEW PRODUCT
        Product::insert([
            'name' => $request->inputName,
            'size' => $request->inputSize,
            'price' => $request->inputPrice,
            'qty' => $request->inputStock,
            'image' => $path
        ]);

        // dd($path);

        return redirect('/home');
    }

    public function delete($id)
    {
        //DELETE PRODUCT
        $product = Product::find($id);
        $product->delete();
        return redirect('/home');
    }

    public function viewPageSearch(Request $request)
    {
        //SEARCH
        $products = Product::where('name','like',"%$request->search%")->paginate(8);

        if(Auth::user()->role == 'admin'){
            return view('admin.search_page_admin')->with('products', $products);
        }else{
            return view('member.search_page_member')->with('products', $products);
        }
        
        
    }

}
