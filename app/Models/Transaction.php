<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function transaction_product(){
        return $this->hasMany(TransactionProduct::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
