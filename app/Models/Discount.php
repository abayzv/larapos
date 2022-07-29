<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'product_id', 'amount', 'status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    protected $table = 'discount';
}
