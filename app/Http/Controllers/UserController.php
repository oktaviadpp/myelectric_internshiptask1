<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Produk;
use App\Models\Artikel;
use App\Models\Brand;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $produks = Produk::all();
        $artikels = Artikel::all();
        $brands = Brand::all();
        return view('user.index', [
            'sliders' => $sliders,
            'produks' => $produks,
            'artikels' => $artikels,
            'brands' => $brands
        ]);
    }


    // FUNCTION UNTUK MENAMPILKAN USER audio
    public function audio()
    {
        $produks = Produk::whereid_kategori('1')->get();
        return view('user.audio', [
            'produks' => $produks
        ]);
    }
    // FUNCTION UNTUK MENAMPILKAN USER kulkas
    public function kulkas()
    {
        $produks = Produk::whereid_kategori('7')->get();
        return view('user.kulkas', [
            'produks' => $produks
        ]);
    }
    // FUNCTION UNTUK MENAMPILKAN USER LAPTOP
    public function laptop()
    {
        $produks = Produk::whereid_kategori('8')->get();
        return view('user.laptop', [
            'produks' => $produks
        ]);
    }
    // FUNCTION UNTUK MENAMPILKAN USER tv
    public function tv()
    {
        $produks = Produk::whereid_kategori('9')->get();
        return view('user.tv', [
            'produks' => $produks
        ]);
    }
    // FUNCTION UNTUK MENAMPILKAN USER AC
    public function ac()
    {
        $produks = Produk::whereid_kategori('10')->get();
        return view('user.ac', [
            'produks' => $produks
        ]);
    }
    // FUNCTION UNTUK MENAMPILKAN USER ARTIKEL
    public function artikels($id)
    {
        // $artikels = Artikel::where('id')->get();
        // $artikels = Artikel::where($artikels->id)->get();
        // $artikels = Artikel::findOrFail($artikels->id);
        // $artikels = Artikel::where('id', $artikels)->get();
        // // $artikels = Artikel::all();
        // return view('user.artikel', [
        //     'artikels' => $artikels
        // ]);
        // return $artikels;
        // return view('user.artikel', ['artikels' => $artikels]);
        // return $artikels->judul;
        $artikels = Artikel::where('id', $id)->first();
        return view('user.artikel', [
            'artikels' => $artikels
        ]);
    }

    //FUNCTION UNTUK MENAMPILKAN DETAIL PRODUK
    public function produks($id)
    {
        $produks = Produk::where('id', $id)->first();
        return view('user.detailproduk', [
            'produks' => $produks
        ]);
    }
}
