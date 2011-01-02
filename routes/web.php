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
Route::get('/dosen/{nama}', 'DosenController@index');

//Menangkap data dari form
Route::get('/formulir','PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

//Template blade
Route::get('/blog','BlogController@home');
Route::get('/blog/tentang','BlogController@tentang');
Route::get('/blog/kontak','BlogController@kontak');


//CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/pegawai/cari','PegawaiController@cari');

//CRUD Eloquent Mahasiswa
Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/tambah','MahasiswaController@tambah');
Route::post('/mahasiswa/proses','MahasiswaController@proses');
Route::get('/mahasiswa/edit/{id}','MahasiswaController@edit');
Route::put('/mahasiswa/update/{id}','MahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}','MahasiswaController@hapus');
Route::get('/mahasiswa/cari','MahasiswaController@cari');


//CRUD Eloquent Matakuliah
Route::get('/matakuliah','MatakuliahController@index');
Route::get('/matakuliah/tambah','MatakuliahController@tambah');
Route::post('/matakuliah/proses','MatakuliahController@proses');
Route::get('/matakuliah/edit/{id}','MatakuliahController@edit');