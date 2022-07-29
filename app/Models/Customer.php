<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'provinsi', 'kota', 'alamat', 'level', 'image'
    ];

    public function orders()
    {
        return $this->hasMany(Transaction::class);
    }

    protected $table = 'customers';
}
