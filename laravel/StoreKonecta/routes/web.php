<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('producto', productoController::class);

Route::put('vender/{producto}', [productoController::class,'vender'])->name('producto.vender');

Route::get('mayor/venta', [productoController::class,'mayorVenta'])->name('producto.mayor');
Route::get('mayor/stock', [productoController::class,'mayorStock'])->name('producto.stock');

