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

        return view('home_member', [
            'product_data' => $product_data
        ]);
        //PAGINATION
        // $products = Product::all();
        
        // $products = Product::has("product_tags")->paginate(4);
        // $products = Product::doesnthave("product_tags")->paginate(4);
        // $products = $products->contains(3, 5); INI GAGAL
        // $products = $products->only([3, 5, 7]); kebalikannya itu 'except'
        // $products = $products->find([2, 4, 6]);

        // return view('index')->with('products', $products);
        
    }

    // public function loadProductAdmin(){

    //     $product_data = DB::table('products')->get();

    //     return view('home_admin', [
    //         'product_data' => $product_data
    //     ]);
        
    // }

    public function loadDetailProductMember($id){

        $detail_product_data = DB::table('products')->get()->where('id', $id);

        if($detail_product_data->contains('id', $id)){
            return view('detail_product_member', [
                'detail_product_data' => $detail_product_data
            ]);
        }else{
            return abort(404);
        }
    }

    // public function loadDetailProductAdmin($id){

    //     $detail_product_data = DB::table('products')->get()->where('id', $id);

    //     if($detail_product_data->contains('id', $id)){
    //         return view('detail_product_admin', [
    //             'detail_product_data' => $detail_product_data
    //         ]);
    //     }else{
    //         return abort(404);
    //     }
    // }
    
}
