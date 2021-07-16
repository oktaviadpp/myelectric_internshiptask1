<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkkat extends Model
{
    use HasFactory;
    protected $table = 'produkkats';
    protected $fillable = [
        'kategori', 'slug'
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
