<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionProduct extends Model
{
    use HasFactory;

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
