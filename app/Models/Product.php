<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    protected $fillable = [
        'name', 'nomor', 'code', 'slug', 'category_id', 'description', 'price', 'stock', 'image'
    ];

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function size()
    {
        return $this->belongsToMany(Size::class, "product_attributes", "product_id");
    }

    public function color()
    {
        return $this->belongsToMany(Color::class, "product_attributes", "product_id");
    }

    public function toArray()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "size" => $this->size->first()->id,
            "color" => $this->size->first()->id
        ];
    }

    protected $table = "products";
}
