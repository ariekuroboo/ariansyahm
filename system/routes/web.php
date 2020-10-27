<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});
Route::get('index', function () {
    return view('pages.index');
});
Route::get('cart', function () {
    return view('pages.keranjang');
});
Route::get('shop', function () {
    return view('pages.toko');
});
Route::get('product-details', function () {
    return view('pages.barang');
});
Route::get('checkout', function () {
    return view('pages.pembayaran');
});