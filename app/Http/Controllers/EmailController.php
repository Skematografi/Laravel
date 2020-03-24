<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\WendriEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
    	Mail::to("wendri.net@gmail.com")->send(new WendriEmail());
    	return "Email terkirim.";
    }
}
