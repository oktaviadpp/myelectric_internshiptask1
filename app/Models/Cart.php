<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Cart extends Model
{
    use HasFactory;
    public $table = "cart";

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    //RELASI dengan Model Produk untuk menampilkan nama produk di keranjang belanja
    public function keranjang2()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
}
