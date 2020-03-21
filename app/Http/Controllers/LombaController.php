<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Hadiah;

class LombaController extends Controller
{
    public function index(){

    	$anggota=Anggota::get();

    	return view('/relation/many_to_many',['anggota' => $anggota]);
    }
}
