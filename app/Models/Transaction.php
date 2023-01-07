<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Many to Many with Transaction Detail
    public function product(){
        return $this->belongsToMany(Product::class, 'transaction_details', 'transaction_id', 'product_id');
    }
}
