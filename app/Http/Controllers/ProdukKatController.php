<?php

namespace App\Http\Controllers;

use App\Models\Produkkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukKatController extends Controller
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
            $produkkats = Produkkat::where('kategori', 'like', '%' . $request->search . '%')->paginate(3);

            //jika data yg dicari TIDAK ADA
        } else {
            $produkkats = Produkkat::paginate(3);
        }

        return view('produkkat.index', [
            'produkkats' => $produkkats,
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
        return view('produkkat.create');
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
            'slug' => 'required'
        ]);

        $produkkats = Produkkat::create([
            'kategori' => $request->kategori,
            'slug' => $request->slug,
        ]);

        // FLASH MESSAGE
        return redirect('/produkkat')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produkkat  $produkkat
     * @return \Illuminate\Http\Response
     */
    public function show(Produkkat $produkkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produkkat  $produkkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Produkkat $produkkat)
    {
        return view('produkkat.edit', compact('produkkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produkkat  $produkkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkkat $produkkat)
    {
        $this->validate($request, [
            'kategori'     => 'required',
            'slug'   => 'required'
        ]);

        $produkkat = Produkkat::findOrFail($produkkat->id);
        $produkkat->update([
            'kategori' => $request->kategori,
            'slug' => $request->slug
        ]);

        // FLASH MESSAGE
        return redirect('/produkkat')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produkkat  $produkkat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produkkat = Produkkat::findOrFail($id);
        $produkkat->delete();

        // FLASH MESSAGE
        return redirect('/produkkat')->with('message', 'Data Berhasil Dihapus');
    }
}
