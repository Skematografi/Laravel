<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function index(){

    	$matakuliah=Matakuliah::all();

    	return view('matakuliah/index',['matakuliah' => $matakuliah]);
    }

    public function tambah(){
    	return view('matakuliah/tambah');
    }

    public function proses(Request $request){

    	$this->validate($request,[
    		'kode_mk' => 'required|min:5|max:7',
    		'nama_mk' => 'required'
    	]);

    	Matakuliah::create([
    		'kode_mk' => $request->kode_mk,
    		'nama_mk' => $request->nama_mk
    	]);

    	return redirect('/matakuliah');
    }

    public function cari(Request $request){
    	$cari=$request->cari;

    	$matakuliah = Matakuliah::where('kode_mk','like','%'.$cari.'%')->get();

    	return view('/matakuliah/index',['matakuliah' => $matakuliah]);
    }

    public function edit($id){

    	$matakuliah = Matakuliah::find($id);

    	return view('/matakuliah/edit',['matakuliah' => $matakuliah]);
    }

    public function update($id, Request $request){
    	$this->validate($request,[
    		'kode_mk' => 'required|min:5|max:7',
    		'nama_mk' => 'required'
    	]);

    	$matakuliah = Matakuliah::find($id);
    	$matakuliah->kode_mk = $request->kode_mk;
    	$matakuliah->nama_mk = $request->nama_mk;
    	$matakuliah->save();

    	return redirect('/matakuliah');
    }

    public function hapus($id){

    	$matakuliah = Matakuliah::find($id);
    	$matakuliah->delete();

    	return redirect()->back();
    }

    public function sampah(){

    	//Mengambil data yang sudah dihapus
    	$matakuliah = Matakuliah::onlyTrashed()->get();

    	return view('/matakuliah/sampah',['matakuliah' => $matakuliah]);
    }

    public function restore($id){
    	//Mencari data sesuai id
    	$matakuliah = Matakuliah::onlyTrashed()->where('id',$id);

    	//Mengembalikan data yang terhapus
    	$matakuliah->restore();
    	return redirect()->back();
    }

    public function hapus_permanen($id){
    	$matakuliah=Matakuliah::onlyTrashed()->where('id',$id);

    	//Menghapus data permanen
    	$matakuliah->forceDelete();
    	return redirect()->back();
    }


    public function restore_semua(){
        //Mengembalikan semua data yang terhapus
        $matakuliah = Matakuliah::onlyTrashed();
        $matakuliah->restore();
        return redirect('/matakuliah');
    }
}
 