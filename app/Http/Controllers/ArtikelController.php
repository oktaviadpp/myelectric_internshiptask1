<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Artikelkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //jika data yg dicari ADA 
        if ($request) {
            $artikels = Artikel::with('artikel')->where('judul', 'like', '%' . $request->search . '%')->paginate(3);

            //jika data ygg dicari TIDAK ADA
        } else {
            $artikels = Artikel::with('artikel')->paginate(3);
        }

        return view('artikel.index', [
            'artikels' => $artikels,
            'request' => $request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikelkats = Artikelkat::all();
        $artikels = Artikel::all();
        return view('artikel.create', [
            'artikelkats' => $artikelkats,
            'artikels' => $artikels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required',
            'judul' => 'required',
            'kutipan' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload gambar
        // $gambar = $request->file('gambar');
        // $gambar->storeAs('public/gambar', $gambar->hashName());

        $gambar = time() . '-' . $request->gambar->getClientOriginalName();
        $request->gambar->move('gambar', $gambar);

        $artikel = Artikel::create([
            'id_kategori' => $request->kategori,
            'judul' => $request->judul,
            'kutipan' => $request->kutipan,
            'isi' => $request->isi,
            'penulis' => $request->penulis,
            'gambar' => $gambar
        ]);

        // FLASH MESSAGE
        return redirect('/artikel')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $artikelkats = Artikelkat::all();
        return view('artikel.edit', compact('artikel', 'artikelkats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $this->validate($request, [
            'kategori' => 'required',
            'judul' => 'required',
            'kutipan' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ]);

        $artikel = Artikel::findOrFail($artikel->id);

        if ($request->file('gambar') == "") {

            $artikel->update([
                'id_kategori'     => $request->kategori,
                'judul'     => $request->judul,
                'kutipan'     => $request->kutipan,
                'isi'     => $request->isi,
                'penulis'     => $request->penulis
            ]);
        } else {

            //hapus old image
            // Storage::disk('local')->delete('public/gambar/' . $artikel->gambar);
            File::delete('gambar/' . $artikel->gambar);

            //upload new gambar
            // $gambar = $request->file('gambar');
            // $gambar->storeAs('public/gambar', $gambar->hashName());
            $gambar = time() . '-' . $request->gambar->getClientOriginalName();
            $request->gambar->move('gambar', $gambar);
            $artikel['gambar'] = $gambar;

            $artikel->update([
                // 'gambar'     => $gambar->hashName(),
                'id_kategori'     => $request->kategori,
                'judul'     => $request->judul,
                'kutipan'     => $request->kutipan,
                'isi'     => $request->isi,
                'penulis'     => $request->penulis
            ]);
        }
        // FLASH MESSAGE
        return redirect('/artikel')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        // Storage::disk('local')->delete('public/gambar/' . $artikel->gambar);
        File::delete('gambar/' . $artikel->gambar);
        $artikel->delete();

        // FLASH MESSAGE
        return redirect('/artikel')->with('message', 'Data Berhasil Dihapus');
    }
}
