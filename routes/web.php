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


Route::get('helo', function(){
	return "Hello, Nama Saya Wendri";
});

Route::get('blog', function(){
	return view('blog');
});

//Menjalankan view dari controller
Route::get('dosen', 'DosenController@index');

//Menangkap data dari URL
Route::get('/pegawai/{nama}', 'PegawaiController@index');

//Menangkap data dari form
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

//Buat blog sederhana
Route::get('/blog','BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

