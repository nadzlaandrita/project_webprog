<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // public function loadTransactions(){

    //     $transactions = DB::table('transactions')->get();


    //     return view('member.transactions-history', [
    //         'transactions' => $transactions
    //     ]);

    // }

    public function loadTransactionHistory($id){
        $detail_transaction_data = DB::table('transactions')->get();
        $product_name = DB::table('products')->where('id', $id)->select('name')->get();

        if($detail_transaction_data->contains('id', $id)){
            return view('member.transactions-history', [
                'product_name' => $product_name,
                'detail_transaction_data' => $detail_transaction_data
            ]);
        }else{
            return abort(404);
        }
    }
}
