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
        
        $cart_data= Cart::all()->where('user_id', '=', Auth::user()->id);
        // dd($cart_data[0]->product);

        $total_price = 0;
        foreach($cart_data as $item){
            $total_price += $item->product->price * $item->qty_cart;
        }

        return view('member.view_cart', [
            'cart_data' => $cart_data,
            'total_price' => $total_price
        ]);
        
    }

    public function addCart(Request $request, $product_id)
    {
        Product::find($request->product_id);

        $request->validate([
            'inputQuantity' => 'required|min:1'
        ]);

        $cart_data = Cart::all()->where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product_id)->first();

        // dd($cart_data);

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
    }

    public function removeCart($product_id)
    {
        //Delete Cart
        $cart_data = Cart::where('product_id', '=', $product_id);
        $cart_data->delete();
        return redirect('/cart');
    }

    public function loadEditCartPage($product_id){
        $item = Cart::all()->where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product_id);
        // dd($item);
        return view('member.edit_cart_member', [
            'item' => $item
        ]);
    }

    public function editCart(Request $request, $product_id)
    {
        Product::find($request->product_id);

        $request->validate([
            'inputQuantity' => 'required|min:1'
        ]);

        $cart_data = Cart::all()->where('user_id', '=', Auth::user()->id)->where('product_id', '=', $product_id)->first();

        $cart_data->update([
            'qty_cart' => $request->inputQuantity
        ]);

        return redirect('/cart');
    }
    
}
