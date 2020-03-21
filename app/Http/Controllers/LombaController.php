<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Anggota;
use App\Hadiah;

class LombaController extends Controller
{
    public function index(){

    	$anggota=Anggota::get();

    	return view('/relation/many_to_many',['anggota' => $anggota]);
    }

    public function enkripsi(){
    	$enkrip = Crypt::encryptString('Belajar Framework Laravel');
    	$deskrip = Crypt::decryptString($enkrip);

    	return view('/matakuliah.enkrip',['enkrip' => $enkrip , 'deskrip' => $deskrip]);
    }

    public function data(){
		
		$parameter =[
			'nama' => 'Suwendri Wijaya',
			'alamat' => 'Tangerang',
		];
		$enkripsi= Crypt::encrypt($parameter);
		echo "<a href='/data/".$enkripsi."'>URL Encryption</a>";
	}
 
	public function data_proses($data){
		$data = Crypt::decrypt($data);
 
		echo "Nama : " . $data['nama'];
		echo "<br/>";
		echo "Alamat : " . $data['alamat'];
	}
}
