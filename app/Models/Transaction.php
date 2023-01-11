<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function product(){
        //MANY TO MANY WITH PRODUCT
        return $this->belongsToMany(Product::class, 'transaction_products', 'transaction_id', 'product_id');
        // return $this->belongsToMany(Product::class);
    }

    public function transaction_product(){
        return $this->hasMany(TransactionProduct::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
