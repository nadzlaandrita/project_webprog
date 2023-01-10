<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function loadCart(){

        $cart_data = DB::table('carts')->where('user_id', '=', Auth::user()->id);

        return view('member.view_cart', [
            'cart_data' => $cart_data
        ]);
        
    }

    public function addCart(Request $request, $product_id)
    {
        Product::find($request->product_id);

        $request->validate([
            'qty_cart' => 'required|min:1'
        ]);

        $cart_data = Cart::all()->where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product_id)->first();

        if($cart_data == null){
            Cart::insert([
                'user_id' => Auth::user()->id,
                'product_id' => $product_id,
                'qty_cart' => $request->inputQuantity,
            ]);
        }else{
            $cart_data->qty_cart += $request->inputQuantity;
            $cart_data->save();
        }

        return redirect('/cart');

        //CREATE NEW PRODUCT
        

        // dd($path);

        return redirect('/home-admin');
    }
}
