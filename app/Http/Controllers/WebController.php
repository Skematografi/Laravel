<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class WebController extends Controller
{
    public function index(){
    	$article=Article::all();

    	return view('/relation/one_to_many',['article' => $article]);
    }
}
