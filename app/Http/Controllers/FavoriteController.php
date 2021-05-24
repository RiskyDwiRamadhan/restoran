<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Favorite;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian kode_barang
            // $favorite = Favorite::with('menu')->where('id_favorite', 'like', "%".$request->search."%")
            //                 ->with('menu')->orwhere('nama_menu', 'like', "%".$request->search."%")
            //                 ->with('menu')->orwhere('jenis_menu', 'like', "%".$request->search."%")
            //                 ->with('menu')->paginate(5);
        } else { 
            $favorite = Favorite::with('menu')->paginate(5);
        }
        return view('favorite.favorite',compact('favorite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        $favorite = Favorite::with('menu');
        return view('favorite.create',compact('menu', 'favorite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ID' => 'required',
            'Menu' => 'required',
            'Tanggal' => 'required',
        ]);

        $menu = Menu::find($request->get('Menu'));

        $favorite = new Favorite;
        $favorite->id_favorite = $request->get('ID');
        $favorite->menu()->associate($menu);
        $favorite->tangal_favorite = $request->get('Tanggal');
        $favorite->save(); 
        
        return redirect()->route('favorite.index')->with('success', 'Menu Favorite Berhasil Di Tambahkan');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $favorite = Favorite::where('id_favorite', $id)->with('menu')->first();
        return view('favorite.show', compact('favorite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::all();
        $favorite = Favorite::where('id_favorite', $id)->with('menu')->first();
        return view('favorite.edit', compact('favorite', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ID' => 'required',
            'Menu' => 'required',
            'Tanggal' => 'required',
        ]);
        
        $favorite = Favorite::where('id_favorite', $id)->with('menu')->first();
        $menu = Menu::find($request->get('Menu'));

        $favorite->id_favorite = $request->get('ID');
        $favorite->menu()->associate($menu);
        $favorite->tangal_favorite = $request->get('Tanggal');
        $favorite->update(); 
        
        return redirect()->route('favorite.index')->with('success', 'Menu Favorite Berhasil Di Update'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Favorite::find($id)->delete();
        return redirect()->route('favorite.index')->with('success', 'Menu Favorite Berhasil Di Delete'); 
    }
}
