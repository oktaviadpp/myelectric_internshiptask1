<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
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
            $brands = Brand::where('brand', 'like', '%' . $request->search . '%')->paginate(3);

            //jika data yg dicari TIDAK ADA
        } else {
            $brands = Brand::paginate(3);
        }

        return view('brand.index', [
            'brands' => $brands,
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
        return view('brand.create');
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
            'brand' => 'required',
            'slug' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload gambar
        // $gambar = $request->file('gambar');
        // $gambar->storeAs('public/gambar', $gambar->hashName());

        $gambar = time() . '-' . $request->gambar->getClientOriginalName();
        $request->gambar->move('gambar', $gambar);

        $brands = Brand::create([
            'brand' => $request->brand,
            'slug' => $request->slug,
            'gambar' => $gambar
        ]);

        // FLASH MESSAGE
        return redirect('/brand')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'brand' => 'required',
            'slug' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ]);

        $brand = Brand::findOrFail($brand->id);

        if ($request->file('gambar') == "") {

            $brand->update([
                'brand'     => $request->brand,
                'slug'   => $request->slug
            ]);
        } else {

            //hapus old image
            // Storage::disk('local')->delete('public/gambar/' . $brand->gambar);
            File::delete('gambar/' . $brand->gambar);

            //upload new gambar
            // $gambar = $request->file('gambar');
            // $gambar->storeAs('public/gambar', $gambar->hashName());

            $gambar = time() . '-' . $request->gambar->getClientOriginalName();
            $request->gambar->move('gambar', $gambar);

            $brand['gambar'] = $gambar;

            $brand->update([
                // 'gambar'     => $gambar->hashName(),
                'brand'     => $request->brand,
                'slug'   => $request->slug
            ]);
        }
        // FLASH MESSAGE
        return redirect('/brand')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        File::delete('gambar/' . $brand->gambar);
        $brand->delete();

        // FLASH MESSAGE
        return redirect('/brand')->with('message', 'Data Berhasil Dihapus');
    }
}
