<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailOrderController;
<<<<<<< HEAD
use App\Http\Controllers\MenuController;
=======
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MejaController;
use Illuminate\Support\Facades\Auth;
>>>>>>> 466eec0c21f5cea3c45765e1d79084c226648069

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
Route::get('/menu', [HomeController::class, 'menu'])->name('home.menu');
Route::get('/meja', [HomeController::class, 'meja'])->name('home.meja');

Route::get('/sementara/{id}', [DetailOrderController::class, 'simpanSementara'])->name('detailorder.sementara');
Route::get('/save', [DetailOrderController::class, 'save'])->name('detailorder.save');

Route::resource('order', OrderController::class);
<<<<<<< HEAD
Route::resource('detailorder', DetailOrderController::class);

//Menu//
Route::resource('menu', MenuController::class);
=======
Route::resource('favorite', FavoriteController::class);
Route::resource('detailorder', DetailOrderController::class);
Route::resource('booking', MejaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 466eec0c21f5cea3c45765e1d79084c226648069
