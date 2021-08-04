<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = [
        'id_kategori', 'id_brand', 'produk', 'harga', 'deskripsi', 'keterangan', 'stock', 'gambar'
    ];

    public function produkkats()
    {
        return $this->belongsTo(Produkkat::class, 'id_kategori');
    }
    public function brands()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    //RELASI dengan Model Cart untuk menampilkan nama produk di keranjang belanja
    public function keranjang()
    {
        return $this->hasMany(Cart::class);
    }
}
