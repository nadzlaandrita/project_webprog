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

    //Many to Many with transaction detail
    public function transaction(){
        return $this->belongsToMany(Transactions::class, 'transactions_details', 'transaction_id', 'product_id');
    }
}
