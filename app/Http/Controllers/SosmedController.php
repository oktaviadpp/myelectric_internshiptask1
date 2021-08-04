<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sosmed;

class SosmedController extends Controller
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
            $sosmed = Sosmed::where('nama', 'like', '%' . $request->search . '%')->paginate(3);

            //jika data yg dicari TIDAK ADA
        } else {
            $sosmed = Sosmed::paginate(3);
        }

        return view('sosmed.index', [
            'sosmed' => $sosmed,
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
        return view('sosmed.create');
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
            'nama' => 'required',
        ]);

        $sosmed = Sosmed::create([
            'nama' => $request->nama,
            'icon' => $request->icon,
            'link' => $request->link,

        ]);

        // FLASH MESSAGE
        return redirect('/sosmed')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sosmed $sosmed)
    {
        return view('sosmed.edit', compact('sosmed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sosmed $sosmed)
    {
        $this->validate($request, [
            'nama' => 'required',
        ]);

        $sosmed = Sosmed::findOrFail($sosmed->id);
        $sosmed->update([
            'nama' => $request->nama,
            'icon' => $request->icon,
            'link' => $request->link,

        ]);

        // FLASH MESSAGE
        return redirect('/sosmed')->with('message', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
