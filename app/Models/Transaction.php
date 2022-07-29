<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'invoice', 'user_id', 'total', 'bayar', 'kembalian', 'payment_method', 'customer_id'
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'order_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function cashier()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $table = "orders";
}
