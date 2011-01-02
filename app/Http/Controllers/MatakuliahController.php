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

    public function edit($id){

    	$matakuliah = Matakuliah::find($id);

    	return view('/matakuliah/edit',['matakuliah' => $matakuliah]);
    }
}
 