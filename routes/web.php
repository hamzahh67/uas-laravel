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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index']);
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create']);
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit']);
Route::patch('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update']);
Route::delete('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']);

Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\ProdukController::class, 'create']);
Route::post('/produk', [App\Http\Controllers\ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', [App\Http\Controllers\ProdukController::class, 'edit']);
Route::patch('/produk/{id}', [App\Http\Controllers\ProdukController::class, 'update']);
Route::delete('/produk/{id}', [App\Http\Controllers\ProdukController::class, 'destroy']);

Route::get('/keranjang', [App\Http\Controllers\KeranjangController::class, 'index']);
Route::get('/keranjang/create', [App\Http\Controllers\KeranjangController::class, 'create']);
Route::post('/keranjang', [App\Http\Controllers\KeranjangController::class, 'store']);
Route::get('/keranjang/{id}/edit', [App\Http\Controllers\KeranjangController::class, 'edit']);
Route::patch('/keranjang/{id}', [App\Http\Controllers\KeranjangController::class, 'update']);
Route::delete('/keranjang/{id}', [App\Http\Controllers\KeranjangController::class, 'destroy']);