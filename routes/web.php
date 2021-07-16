<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

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

//MENAMPILKAN ADMIN PRODUK KATEGORI
Route::resource('produkkat', ProdukKatController::class);
//MENAMPILKAN ADMIN BRAND
Route::resource('brand', BrandController::class);
//MENAMPILKAN ADMIN PRODUK
Route::resource('produk', ProdukController::class);
//MENAMPILKAN ADMIN ARTIKEL KATEGORI
Route::resource('artikelkat', ArtikelKatController::class);
//MENAMPILKAN ADMIN ARTIKEL 
Route::resource('artikel', ArtikelController::class);
//MENAMPILKAN ADMIN SLIDE SHOW / SLIDER
Route::resource('slider', SliderController::class);


//MENAMPILKAN USER INDEX
Route::resource('/', UserController::class);
//MENAMPILKAN USER AC
Route::get('ac', 'UserController@ac');
//MENAMPILKAN USER laptop
Route::get('laptop', 'UserController@laptop');
//MENAMPILKAN USER tv
Route::get('tv', 'UserController@tv');
//MENAMPILKAN USER kulkas
Route::get('kulkas', 'UserController@kulkas');
//MENAMPILKAN USER audio
Route::get('audio', 'UserController@audio');
//MENAMPILKAN USER artikel
// Route::resource('artikels', UserController::class);
// Route::get('artikels/{id}', 'UserController@artikels');

//MENAMPILKAN USER artikel
// Route::get('/detailartikel/{id}', [UserController::class, 'artikels'])->name('detailartikel');
// Route::get('/detailartikel', 'UserController@artikels')->name('detailartikel');
// Route::get('/detailartikel', [UserController::class, 'artikels']);
Route::get('/detailartikel/{id}', [App\Http\Controllers\UserController::class, 'artikels'])->name('detailartikel');

//MENAMPILKAN USER DETAIL PRODUK
Route::get('/detailproduk/{id}', [App\Http\Controllers\UserController::class, 'produks'])->name('detailproduk');
