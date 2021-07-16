<?php

namespace App\Http\Controllers;

use App\Models\Artikelkat;
use Illuminate\Http\Request;

class ArtikelKatController extends Controller
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
            $artikelkats = Artikelkat::where('kategori', 'like', '%' . $request->search . '%')->paginate(3);

            //jika data yg dicari TIDAK ADA
        } else {
            $artikelkats = Artikelkat::paginate(3);
        }

        return view('artikelkat.index', [
            'artikelkats' => $artikelkats,
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
        return view('artikelkat.create');
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
            'kategori' => 'required'
        ]);

        $artikelkats = Artikelkat::create([
            'kategori' => $request->kategori
        ]);

        // FLASH MESSAGE
        return redirect('/artikelkat')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikelkat  $artikelkat
     * @return \Illuminate\Http\Response
     */
    public function show(Artikelkat $artikelkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikelkat  $artikelkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikelkat $artikelkat)
    {
        return view('artikelkat.edit', compact('artikelkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikelkat  $artikelkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikelkat $artikelkat)
    {
        $this->validate($request, [
            'kategori' => 'required'
        ]);

        $artikelkat = Artikelkat::findOrFail($artikelkat->id);
        $artikelkat->update([
            'kategori' => $request->kategori
        ]);
        // FLASH MESSAGE
        return redirect('/artikelkat')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikelkat  $artikelkat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikelkat = Artikelkat::findOrFail($id);
        $artikelkat->delete();

        // FLASH MESSAGE
        return redirect('/artikelkat')->with('message', 'Data Berhasil Dihapus');
    }
}
