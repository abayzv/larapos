<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'ppn', 'subtotal'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function order()
    {
        return $this->belongsTo(Transaction::class, 'order_id');
    }

    protected $table = "order_details";
}
