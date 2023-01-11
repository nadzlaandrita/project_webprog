<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'size',
        'price',
        'qty',
        'image'
    ];

    public function user(){
        //MANY TO MANY WITH PRODUCT
        return $this->belongsToMany(User::class, 'cart', 'product_id', 'user_id');
    }

    public function transaction(){
        //MANY TO MANY WITH PRODUCT
        return $this->belongsToMany(Transaction::class, 'transaction_product', 'product_id', 'transaction_id');
    }
}
