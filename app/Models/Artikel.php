<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kategori', 'judul', 'kutipan', 'isi', 'penulis', 'gambar'
    ];

    // UNTUK INNER JOIN DENGAN ARTIKEL KATEGORI
    public function artikel()
    {
        return $this->belongsTo(Artikelkat::class, 'id_kategori');
    }
}
