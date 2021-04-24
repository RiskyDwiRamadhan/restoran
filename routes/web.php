<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\OrderSementara;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/meja', [HomeController::class, 'meja']);
Route::resource('order', OrderController::class);
Route::resource('detailorder', DetailOrderController::class);
Route::resource('ordersementara', DetailOrderController::class);