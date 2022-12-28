<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function loadProductMember(){

        $product_data = DB::table('products')->get();

        return view('home_member', [
            'product_data' => $product_data
        ]);
        
    }

    public function loadProductAdmin(){

        $product_data = DB::table('products')->get();

        return view('home_admin', [
            'product_data' => $product_data
        ]);
        
    }

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

    public function loadDetailProductAdmin($id){

        $detail_product_data = DB::table('products')->get()->where('id', $id);

        if($detail_product_data->contains('id', $id)){
            return view('detail_product_admin', [
                'detail_product_data' => $detail_product_data
            ]);
        }else{
            return abort(404);
        }
    }
    
}
