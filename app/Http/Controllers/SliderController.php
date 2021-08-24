<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('slider.index', [
            'sliders' => $sliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'judul' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload gambar
        // $gambar = $request->file('gambar');
        // $gambar->storeAs('public/gambar', $gambar->hashName());
        $gambar = time() . '-' . $request->gambar->getClientOriginalName();
        $request->gambar->move('gambar', $gambar);

        $sliders = Slider::create([
            'judul' => $request->judul,
            'gambar'     => $gambar
        ]);

        // FLASH MESSAGE
        return redirect('/slider')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $sLider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $sLider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $sLider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $sLider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'judul' => 'required',
            'gambar' => 'mimes:jpg,jpeg,png',
        ]);

        $slider = Slider::findOrFail($slider->id);

        if ($request->file('gambar') == "") {

            $slider->update([
                'judul'     => $request->judul
            ]);
        } else {

            //hapus old image
            // Storage::disk('local')->delete('public/gambar/' . $slider->gambar);
            File::delete('gambar/' . $slider->gambar);

            //upload new gambar
            // $gambar = $request->file('gambar');
            // $gambar->storeAs('public/gambar', $gambar->hashName());
            $gambar = time() . '-' . $request->gambar->getClientOriginalName();
            $request->gambar->move('gambar', $gambar);
            $slider['gambar'] = $gambar;

            $slider->update([
                // 'gambar'     => $gambar->hashName(),
                'judul'     => $request->judul
            ]);
        }
        // FLASH MESSAGE
        return redirect('/slider')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        File::delete('gambar/' . $slider->gambar);
        $slider->delete();

        // FLASH MESSAGE
        return redirect('/slider')->with('message', 'Data Berhasil Dihapus');
    }
}
