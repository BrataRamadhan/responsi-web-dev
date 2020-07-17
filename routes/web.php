<?php

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

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

//Brand
Route::get('/brand', 'BrandController@index')->name('brand');
Route::get('/tambahbrand', 'BrandController@create')->name('inputbrand');
Route::post('/tambah_brand', 'BrandController@store')->name('store');
Route::delete('delete/{id}', 'BrandController@destroy')->name('delete');
Route::get('/edit_brand/{id}', 'BrandController@edit')->name('edit_brand');
Route::put('/update/{id}', 'BrandController@update')->name('update');

//Kategori
Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/tambahkategori', 'KategoriController@create')->name('inputkategori');
Route::post('/tambah_kategori', 'KategoriController@store')->name('store');
Route::delete('delete/{id}', 'KategoriController@destroy')->name('delete');
Route::get('/edit_kategori/{id}', 'KategoriController@edit')->name('edit_kategori');
Route::put('/update-data/{id}', 'KategoriController@update')->name('update-data');


//Product

Route::resource('/product', 'ProductController');



