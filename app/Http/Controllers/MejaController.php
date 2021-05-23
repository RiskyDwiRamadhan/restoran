<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meja = Meja::all();
        return view('booking.index', ['meja'=>$meja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'id_meja'=>'required',
            'no_meja' => 'required',
            'kapasitas'=> 'required',
            'status_meja'=> 'required',
            'image'=> 'required|file|image|mimes:jpeg,png,jpg',
        ]);
        
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $meja = new Meja;
        $meja->id_meja = $request->get('id_meja');
        $meja->no_meja = $request->get('no_meja');
        $meja->kapasitas = $request->get('kapasitas');
        $meja->image = $image_name;
        $meja->save();

        return redirect()->route('booking.index')
            ->with('success', 'Meja Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_meja)
    {
        $meja = Meja::find($id_meja);
        return view('booking.detail', ['meja'=>$meja]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_meja)
    {
        $meja = Meja::find($id_meja);
        return view('booking.edit', compact('meja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_meja)
    {
        $request->validate([
            'id_meja'=>'required',
            'no_meja' => 'required',
            'kapasitas'=> 'required',
            'status_meja'=> 'required',
            'image'=> 'required|file|image|mimes:jpeg,png,jpg',
        ]);
        
        $meja = Meja::where('id_meja', $id_meja)->first();
        if ($meja->image && file_exists(storage_path('app/public/' . $meja->image))) {
            Storage::delete('public/' . $meja->image);
        }

        if ($request->file('image') != null) {
            $image_name = $request->file('image')->store('images', 'public');
            $meja->image = $image_name;
        }

        $meja->id_meja = $request->get('id_meja');
        $meja->no_meja = $request->get('no_meja');
        $meja->kapasitas = $request->get('kapasitas');
        $meja->save();

        return redirect()->route('booking.index')
            ->with('success', 'Meja Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_meja)
    {
        Meja::find($id_meja)->delete();
        return redirect()->route('booking.index')
            ->with('success', 'Meja Berhasil Dihapus');
    }
}
