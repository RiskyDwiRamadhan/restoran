<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Menu;
use App\Models\OrderSementara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian nama
            // $detailorder = OrderSementara::where('nama', 'like', "%".$request->search."%")->with('kelas')->paginate(5);
        } else { // Pemilihan jika tidak melakukan pencarian nama
            //fungsi eloquent menampilkan data menggunakan pagination
            $detailorder = OrderSementara::paginate(5); // Pagination menampilkan 5 data
        }

        return view('Order.order', compact('detailorder'));
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
        // $request->validate([
        //     'qty' => 'required'
        // ]);
        

        // $menu = Menu::where('id_menu', 'like', "%".$request->id_menu."%")->first();

        // $idorder ='O'.date('ymd').rand(01,999);
        // Order::create([
        //     'id_order' => $idorder,
        //     'id_meja' => '01',
        //     'harga_total' => 30000,
        //     'tgl_order' => now()
        // ]);

        // DetailOrder::create([
        //     'id_dorder' => 'DO'.date('ymd').rand(01,999),
        //     'id_order'=> $idorder,
        //     'id_menu' => $menu->id_menu,
        //     'qty' => $request->get('qty'),
        //     'harga' =>$menu->harga_menu*$request->get('qty'),

        // ]);

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
        return view('DetailOrder.detailorder', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sorder = OrderSementara::with('menu')->where('id_sorder', 'like', "%".$id."%")->first();
        return view('DetailOrder.edit', compact('sorder'));
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
            'qty' => 'required'
        ]);

        $sorder = OrderSementara::with('menu')->where('id_sorder', 'like', "%".$id."%")->first();
        $sorder->id_sorder = $id;
        $sorder->id_menu = $sorder->id_menu;
        $sorder->qty = $request->get('qty');
        $sorder->harga = $sorder->menu->harga*$request->get('qty');
        
        $sorder->update();
        return redirect()->route('detailorder.index')->with('success', 'Detail Pesanan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderSementara::where('id_sorder', 'like', "%".$id."%")->first()->delete();
        // OrderSementara::find($id)->delete();
        return redirect()->route('detailorder.index')-> with('success', 'Detail Pesanan Berhasil Dihapus');
    }
}
