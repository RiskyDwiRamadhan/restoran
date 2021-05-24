<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Favorite;
use App\Models\Meja;
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
        return view('Menu.menu',compact('makanan', 'minuman', 'data'));

    }

    public function meja(){
        $meja = Meja::where('status_meja', 'like', "%"."kosong"."%")->paginate(6);
        return view('Meja.meja',compact('meja'));

    }

    public function admin(){
        // $meja = Meja::where('status_meja', 'like', "%"."kosong"."%")->paginate(6);
        return view('admin');

    }
}
