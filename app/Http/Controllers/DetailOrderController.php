<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'qty' => 'required'
        ]);

        $menu = Menu::where('id_menu', 'like', "%".$request->id_menu."%")->first();

        $idorder ='O'.date('ymd').rand(1,999);
        Order::create([
            'id_order' => $idorder,
            'id_meja' => '01',
            'harga_total' => 30000,
            'tgl_order' => now()
        ]);

        DetailOrder::create([
            'id_dorder' => 'DO'.date('ymd').rand(1,99),
            'id_order'=> $idorder,
            'id_menu' => $menu->id_menu,
            'qty' => $request->get('qty'),
            'harga' =>$menu->harga_menu*$request->get('qty'),

        ]);

        // return redirect()->route('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::where('id_menu', 'like', "%".$id."%")->first();
        return view('detailorder', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
