<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = [];
    public function products()
    {
        return $this->belongsToMany(Product::class, "product_attributes", "product_id");
    }
}
