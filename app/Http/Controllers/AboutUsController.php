<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(Request $request)
    {
        //jika data yg dicari ADA
        if ($request) {
            $about_us = AboutUs::where('judul', 'like', '%' . $request->search . '%')->paginate(3);

            //jika data yg dicari TIDAK ADA
        } else {
            $about_us = AboutUs::paginate(3);
        }

        return view('aboutus.index', [
            'about_us' => $about_us,
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
        return view('about.create');
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
            'bab' => 'required',
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $about_us = AboutUs::create([
            'bab' => $request->bab,
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        //FLASH MASSAGE
        return redirect('/about')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $about)
    {
        return view('aboutus.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $about)
    {
        $this->validate($request, [
            'bab' => 'required',
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $about = AboutUs::findOrFail($about->id);
        $about->update([
            'bab' => $request->bab,
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        // FLASH MESSAGE
        return redirect('/about')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutus = AboutUs::findOrFail($id);
        $aboutus->delete();

        // FLASH MESSAGE
        return redirect('/about')->with('message', 'Data Berhasil Dihapus');
    }
}
