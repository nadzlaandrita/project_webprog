<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

        $request->validate([
            'qty_cart' => 'required|min:1'
        ]);

        

        //CREATE NEW PRODUCT
        Cart::insert([
            'user_id' => $request->inputName,
            'size' => $request->inputSize,
            'price' => $request->inputPrice,
            'qty' => $request->inputStock
        ]);

        // dd($path);

        return redirect('/home-admin');
    }
}
