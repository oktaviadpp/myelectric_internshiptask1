<?php

namespace App\Models;

use App\Http\Controllers\ArtikelController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikelkat extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori'
    ];

    // UNTUK INNER JOIN ARTIKEL
    public function artikelkat()
    {
        return $this->hasMany(Artikel::class);
    }
}
