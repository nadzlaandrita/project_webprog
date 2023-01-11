<?php

namespace App\Http\Controllers;

use App\Models\TransactionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionProductController extends Controller
{
    //
    // public function loadTransactionHistory(){
    //     $transaction_data = TransactionProduct::all()->where('user_id', '=', Auth::user()->id);

    //     dd($transaction_data);
    // }
}
