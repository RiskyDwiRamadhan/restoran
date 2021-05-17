<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meja.create');
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
            'image'=> 'required',
        ]);
        
        Meja::create($request->all());

        return redirect()->route('meja.index')
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
         return view('meja.detail', compact('Meja'));
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
        return view('meja.detail', compact('Meja'));
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
            'image'=> 'required',
        ]);

        Meja::find($id_meja)->update($request->all());

        return redirect()->route('meja.index')
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
        return redirect()->route('meja.index')
            ->with('success', 'Meja Berhasil Dihapus');
    }
}
