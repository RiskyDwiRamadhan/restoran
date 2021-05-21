<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

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
        return view('Menu.index', ['menu' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validasi([
            'nama_menu' => 'required',
            'harga_menu'=>'required',
            'jenis_menu'=>'required',
            'deskripsi'=>'required',
            'image'=>'required',
        ]);

        Menu::create($request->all());
        return redirect()->route('Menu.index')->with('success', 'Menu Berhasil Ditambahkan');
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
        return view('Menu.detail', compact('menu'));
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
        return view('Menu.detail', compact('menu'));
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
        $request->validasi([
            'nama_menu' => 'required',
            'harga_menu'=>'required',
            'jenis_menu'=>'required',
            'deskripsi'=>'required',
            'image'=>'required',
        ]);

        Menu::find($id_menu)->update($request->all());
        return redirect()->route('Menu.index')->with('success', 'Menu Berhasil Diupdate');
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
        return redirect()->route('Menu.index')->with('success', 'Menu Berhasil Dihapus');
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
