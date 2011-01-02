<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Carbon;

class MahasiswaController extends Controller
{
	public function index(){
		//Mengambil semua data mahasiswa
	    $mahasiswa = Mahasiswa::paginate(10);

	    //Mengirim data ke view index
	    return view('mahasiswa/index',['mahasiswa' => $mahasiswa]);

	}

	public function tambah(){
		return view('mahasiswa/tambah');
	}

	public function proses(Request $request){
		//Validasi
		$this->validate($request,[
			'nim' => 'required|numeric',
			'nama' =>'required|min:5|max:30',
			'jurusan' => 'required|min:5|max:50',
			'alamat' => 'required'
		]);

		//Input data ke database dengan model
		Mahasiswa::create([
			'nim' => $request->nim,
			'nama' => $request->nama,
			'jurusan' => $request->jurusan,
			'alamat' => $request->alamat
		]);

		return redirect('/mahasiswa');
	}

	public function edit($id){

		//Mengambil data sesuai id
		$mahasiswa = Mahasiswa::find($id);

		//Mengirim data sesuai id
		return view('mahasiswa/edit',['mahasiswa' => $mahasiswa]);
	}

	public function update($id,Request $request){
		//Validasi
		$this->validate($request,[
			'nim' => 'required|numeric',
			'nama' =>'required|min:5|max:30',
			'jurusan' => 'required|min:5|max:50',
			'alamat' => 'required'
		]);

		//Mencari data kemudian memperbarui
		$mahasiswa = Mahasiswa::find($id);
		$mahasiswa->nim = $request->nim;
		$mahasiswa->nama = $request->nama;
		$mahasiswa->jurusan = $request->jurusan;
		$mahasiswa->alamat = $request->alamat;
		$mahasiswa->save();

		return redirect('/mahasiswa');
	}

	public function hapus($id){
		
		//Cari data
		$mahasiswa = Mahasiswa::find($id);

		//Hapus data
		$mahasiswa->delete();

		return redirect()->back();
	}

	public function cari(Request $request){
		//menangkap data pencarian
		$cari = $request->cari;

		$mahasiswa = Mahasiswa::where('nama','like','%'.$cari.'%')->paginate();

		//Mengirim data ke view index
	    return view('mahasiswa/index',['mahasiswa' => $mahasiswa]);
	}
	
}
