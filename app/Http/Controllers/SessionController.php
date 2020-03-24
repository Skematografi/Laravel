<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function tampil(Request $request){
    	//Menampilkan session
    	if($request->session()->has('nama')){
    		$session = $request->session()->get('nama');
    		return view('session.session',['session' => $session]);
    	}else{
    		$session = 'Tidak ada data dalam session';
    		return view('session.session',['session' => $session]);
    	}
    }

    public function buat(Request $request){
    	//Buat session
    	session()->put('nama',$request->session);

    	return redirect()->back();
    	
    }

    public function hapus(Request $request){
    	//Hapus session
    	session()->forget('nama');
    	return redirect()->back();

    }

    public function error(){
    	return abort(403,'Dudu seng ndue');
    }

}
