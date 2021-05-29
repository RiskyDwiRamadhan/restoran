<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    // // Route::get('/home', [HomeController::class, 'home'])->name('home.home');
    // Route::get('/menus', [HomeController::class, 'menu'])->name('home.menu');
    // Route::get('/meja', [HomeController::class, 'meja'])->name('home.meja');
    // // Route::get('/admin', [HomeController::class, 'admin'])->name('home.admin');

    // Route::get('/sementara/{id}', [DetailOrderController::class, 'simpanSementara'])->name('detailorder.sementara');
    // Route::get('/save', [DetailOrderController::class, 'save'])->name('detailorder.save');
    // Route::get('/bayar/{id}', [TransaksiController::class, 'transaksi'])->name('transaksi.bayar');
    // Route::get('/proses/{id}', [TransaksiController::class, 'save'])->name('transaksi.proses');
    // Route::get('/transaksi/admin', [TransaksiController::class, 'admin'])->name('transaksi.admin');

    // Route::resource('order', OrderController::class);
    // Route::resource('detailorder', DetailOrderController::class);
    // Route::resource('menu', MenuController::class);
    // Route::resource('favorite', FavoriteController::class);
    // // Route::resource('detailorder', DetailOrderController::class);
    // Route::resource('booking', MejaController::class);
    // Route::resource('transaksi', TransaksiController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [HomeController::class, 'admin'])->name('home.admin');
        Route::get('/Atransaksi', [HomeController::class, 'transaksi'])->name('home.transaksi');
        Route::resource('booking', MejaController::class);
        Route::resource('menu', MenuController::class);
        Route::resource('favorite', FavoriteController::class);
        Route::resource('userdata', UserDataController::class);
    });
    
    Route::middleware(['customer'])->group(function () {
        Route::get('/home', [HomeController::class, 'home'])->name('home.home');
    });
 
    Route::middleware(['kasir'])->group(function () {
        Route::get('/home', [HomeController::class, 'home'])->name('home.home');
        Route::get('/menus', [HomeController::class, 'menu'])->name('home.menu');
        Route::get('/meja', [HomeController::class, 'meja'])->name('home.meja');

        Route::resource('detailorder', DetailOrderController::class);
        Route::get('/sementara/{id}', [DetailOrderController::class, 'simpanSementara'])->name('detailorder.sementara');
        Route::get('/save', [DetailOrderController::class, 'save'])->name('detailorder.save');
        
        Route::resource('transaksi', TransaksiController::class);
        Route::get('/bayar/{id}', [TransaksiController::class, 'transaksi'])->name('transaksi.bayar');
        Route::get('/proses/{id}', [TransaksiController::class, 'save'])->name('transaksi.proses');
        Route::get('/transaksi/admin', [TransaksiController::class, 'admin'])->name('transaksi.admin');
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/home');
    });
 
});
 
