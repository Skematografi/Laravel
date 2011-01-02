<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
	public function index(){
		//Mengambil semua data dari databse
		//$pegawai = DB::table('pegawai')->get();

		//Mengambil data dan membuat pagination
		$pegawai = DB::table('pegawai')->paginate(10);

		//Mengirim data ke view index
		return view('index', ['pegawai' => $pegawai]);
	}

	public function cari(Request $request){
		//menangkap data pencarian
		$cari = $request->cari;

		//Mengambil data yang sesuai pencarian
		$pegawai=DB::table('pegawai')->where('pegawai_nama','like','%'.$cari.'%')->paginate();

		//Mengirim data ke view index
		return view('index',['pegawai' => $pegawai]);

	}


	public function tambah(){
		return view('tambah');
	}

	public function store(Request $request){

		//Validasi
		$this->validate($request,[
			'nama' =>'required|min:5|max:30|alpha',
			'jabatan' => 'required|min:5|max:10|alpha',
			'umur'=> 'required|numeric',
			'alamat' => 'required'
		]);


		//Menambah data ke database
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		//Kembali ke halaman awal
		return redirect('/pegawai');

	}

	public function edit($id){
		//Mengambil data berdasarkan id
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();

		//Passing data ke view edit
		return view('edit',['pegawai' => $pegawai]);
	}

	public function update(Request $request){
		//Update data berdasarkan id
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		//Kembali ke halaman awal
		return redirect('/pegawai');
	}

	public function hapus($id){
		//Hapus data berdasarkan id
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->delete();

		//Kembali ke halaman awal
		return redirect('/pegawai');
	}
}