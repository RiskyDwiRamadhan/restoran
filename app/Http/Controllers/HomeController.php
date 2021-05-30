<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Favorite;
use App\Models\Meja;
use App\Models\Order;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $role = Auth::user()->role;
        if($role == "admin"){
            return redirect()->to('admin');
        } else if($role == "kasir"){
            return redirect()->to('/home');
        } else if($role == "customer"){
            return redirect()->to('/home');
        } else {
            return redirect()->to('logout');
        }
    }

    public function home(){
        $role = Auth::user()->role;
        $data = Favorite::with('menu')->get();
        return view('home',compact('data', 'role'));
    }

    public function menu(){
        $data = Favorite::with('menu')->paginate(2);
        $makanan = Menu::where('jenis_menu', 'like', "%"."makanan"."%")->paginate(4);
        $minuman = Menu::where('jenis_menu', 'like', "%"."minuman"."%")->paginate(4);
        $cemilan = Menu::where('jenis_menu', 'like', "%"."cemilan"."%")->paginate(4);
        return view('Menu.menu',compact('makanan', 'minuman', 'data', 'cemilan'));

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
        return view('admin', compact('order', 'transaksi', 'user'));
    }

    public function transaksi(Request $request)
    {
        $tgl = date('Y-m-d');
        $order = Order::with('meja')->where('tgl_order', 'like', "%".$tgl."%")->paginate(10);
        return view('transaksi.admin',compact('order'));
    }
}
