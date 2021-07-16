<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'slug', 'gambar'
    ];

    public function brand()
    {
        return $this->hasMany(Produk::class);
    }
}
