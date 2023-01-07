<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsToMany(Product::class, 'transaction_details', 'transaction_id', 'product_id');
    }

    public function transaction(){
        return $this->belongsToMany(Transaction::class, 'transaction_details', 'transaction_id', 'product_id');
    }
}
