<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::paginate(10);
        return view('menu.index', ['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
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
            'id_menu'=>'required',
            'nama_menu' => 'required',
            'harga_menu'=> 'required',
            'jenis_menu'=> 'required',
            'deskripsi'=>'required',
            'image'=> 'required|file|image|mimes:jpeg,png,jpg',
        ]);
        
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        $menu = new Menu;
        $menu->id_menu = $request->get('id_menu');
        $menu->nama_menu = $request->get('nama_menu');
        $menu->harga_menu = $request->get('harga_menu');
        $menu->jenis_menu = $request->get('jenis_menu');
        $menu->deskripsi = $request->get('deskripsi');
        $menu->image = $image_name;
        $menu->save();

        return redirect()->route('menu.index')
            ->with('success', 'Menu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_menu)
    {
        $menu = Menu::find($id_menu);
        return view('menu.detail', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_menu)
    {
        $menu = Menu::find($id_menu);
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_menu)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga_menu'=>'required',
            'jenis_menu'=>'required',
            'deskripsi'=>'required',
            'image'=>'required',
        ]);

        $menu = Menu::find($id_menu)->first();
        // return redirect()->route('menu.index')->with('success', 'Menu Berhasil Diupdate');
        
        
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        //  new Menu;
        $menu->id_menu = $request->get('id_menu');
        $menu->nama_menu = $request->get('nama_menu');
        $menu->harga_menu = $request->get('harga_menu');
        $menu->jenis_menu = $request->get('jenis_menu');
        $menu->deskripsi = $request->get('deskripsi');
        $menu->image = $image_name;
        $menu->save();

        return redirect()->route('menu.index')
            ->with('success', 'Menu Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_menu)
    {
        Menu::find($id_menu)->delete();
        return redirect()->route('menu.index')->with('success', 'Menu Berhasil Dihapus');
    }

    public function seacrh(Request $request)
    {
        $menu = Menu::where([
            ['id_menu', '!=', null, 'OR', 'nama_menu', '!=', null, 'OR', 'jenis_menu', '!=', null],
            [function ($query) use ($request){
                if(($keyword = $request->keyword)) {
                    $query  ->orWhere('id_menu', 'like', "%{$keyword}%")
                            ->orWhere('nama_menu', 'like', "%{$keyword}%")
                            ->orWhere('jenis_menu', 'like', "%{$keyword}%");                                                                                
                }
            }]
        ])
        ->orderBy('id_menu')
        ->paginate(5);

        return view('menu.index', compact('menu'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
