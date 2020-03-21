<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
    public function index(){
    	$pengguna = Pengguna::all();

    	return view('relation/one_to_one',['pengguna' => $pengguna]);
    }

    public function hapus($id){
    	$pengguna = Pengguna::find($id);
    	$pengguna->delete();

    	return redirect()->back();
    }
}
