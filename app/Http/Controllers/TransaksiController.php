<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Meja;
use App\Models\DetailOrder;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian kode_barang
            $order = Order::with('meja')->where('id_order', 'like', "%".$request->search."%")
            ->andwhere('status', 'like', "%".'belum'."%")->paginate(10);
            // $detailorder = DetailOrder::with('menu')->where('id_order', 'like', "%".$request->search."%");
        } else { 
            $order = Order::with('meja')->where('status', 'like', "%".'belum'."%")->paginate(10);
        }
        return view('transaksi.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::with('meja')->where('id_order', 'like', "%".$id."%");
        $detailorder = DetailOrder::with('menu')->where('id_order', 'like', "%".$id."%");
        
        return view('transaksi.transaksi',compact('order', 'detailorder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    
    public function transaksi($id)
    {
        $detailorder = DetailOrder::with('menu')->where('id_order', 'like', "%".$id."%")->paginate(5);
        $order = Order::find($id);
        
        return view('transaksi.transaksi',compact('detailorder', 'order'));
    }

    public function save(Request $request, $id){

        $idtransaksi ='T'.date('ymd').rand(01,999);
        $order = Order::find($id);

        $transaksi = new Transaksi;
        $transaksi->id_transaksi = $idtransaksi;
        $transaksi->id_order = $order->id_order;
        $transaksi->tanggal_transaksi = now();
        $transaksi->harga = $order->harga_total;
        $transaksi->uang_bayar = $request->get('bayar');
        $transaksi->kembalian = $request->get('bayar') - $order->harga_total;

        $transaksi->save();

        $meja = Meja::find($order->id_meja);
        $meja->status_meja = 'kosong';
        $meja->update();

        $order->status = ('selesai');
        $order->update();
    }
}
