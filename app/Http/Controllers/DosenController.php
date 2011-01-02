<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index($nama){
    	/*$nama="Suwendri Wijaya";
    	$hobi=["Programming", "Design", "Reading Book", "Hiking"];
    	return view('biodata',['name' => $nama, 'suka' => $hobi]);*/

    	return $nama;
    }
}
