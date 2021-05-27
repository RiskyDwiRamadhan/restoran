<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Favorite;
use App\Models\Meja;
use App\Models\Order;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Favorite::with('menu')->get();
        return view('home',compact('data'));
    }

    public function menu(){
        $data = Favorite::with('menu')->paginate(2);
        $makanan = Menu::where('jenis_menu', 'like', "%"."makanan"."%")->paginate(4);
        $minuman = Menu::where('jenis_menu', 'like', "%"."minuman"."%")->paginate(4);
        $cemilam = Menu::where('jenis_menu', 'like', "%"."cemilam"."%")->paginate(4);
        return view('Menu.menu',compact('makanan', 'minuman', 'data', 'cemilam'));

    }

    public function meja(){
        $meja = Meja::where('status_meja', 'like', "%"."kosong"."%")->paginate(6);
        return view('Meja.meja',compact('meja'));

    }

    public function admin(){
        $tgl = date('Y-m-d');
        $user = User::All();
        $order = Order::where('tgl_order', 'like', "%".$tgl."%");
        $transaksi = Transaksi::where('tanggal_transaksi', 'like', "%".$tgl."%");
        return view('admin', compact('order', 'transaksi'));
    }
}
