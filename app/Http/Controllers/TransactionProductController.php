<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionProductController extends Controller
{
    //
    public function loadTransactionHistory($id){
        $detail_transaction_data = DB::table('  ')->get();
        $product_name = DB::table('products')->where('id', 'like', $id)->get()->name;

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
