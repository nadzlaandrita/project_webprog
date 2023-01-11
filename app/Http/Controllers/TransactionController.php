<?php


namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    # MASIH BELOM ADA YG JALAN
    public function loadTransactions(){

        $transaction_data = Transaction::all()->where('user_id', '=', Auth::user()->id);
        // dd($transaction_data[0]->product);
        $total_price = 0;

        return view('member.transactions_history', [
            'transaction_data' => $transaction_data,
            'total_price' => $total_price
        ]);

    }

    public function checkout(Request $request, $id){
        $user_data = Auth::user()->id;
        $cart_data = Cart::where('user_id', '=', $user_data)->get();

        if($cart_data == null){
            return redirect('/cart');
        }

        $transaction_data = new Transaction();
        $transaction_data->user_id = $user_data;
        $transaction_data->save();
        $trans_id = $transaction_data->id;

        foreach($cart_data as $data){
            TransactionProduct::insert([
                'transaction_id' => $trans_id,
                'product_id' => $data->product->id,
                'qty' => $data->qty 
            ]);
        }

        
    }

    
}
