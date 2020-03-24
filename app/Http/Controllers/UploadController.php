<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use File;

class UploadController extends Controller
{
    public function upload(){
    	$gambar=Gambar::get();

    	return view('upload_download.upload',['gambar' => $gambar]);
    }

    public function proses_upload(Request $request){

    	//Validasi file
    	$this->validate($request,[
    		'file' => 'required|file|image|mimes:jpeg,png,jpg,|max:2048',
    		'keterangan' => 'required'
    	]);

    	//Ambil data dari variabel $file
    	$file=$request->file('file');

    	$nama_file=time()."_".$file->getClientOriginalName();

    	//Folder tujuan upload
    	$tujuan_upload='asset';
    	$file->move($tujuan_upload,$nama_file);

    	//Memasukan data ke database
    	Gambar::create([
    		'file' => $nama_file,
    		'keterangan' => $request->keterangan
    	]);

    	return redirect()->back();
    }


    public function download($id){
    	//Mencari file dengan id
    	$gambar=Gambar::findOrFail($id);

    	//Mencari file dari model
    	$file=public_path().'/asset/'.$gambar->file;

    	//Download file
    	return response()->download($file,$gambar->file_name);
    }

    public function hapus($id){

    	//Hapus file gambar
    	$gambar=Gambar::where('id',$id)->first();
    	File::delete('asset/'.$gambar->file);

    	//Hapus data gambar
    	Gambar::where('id',$id)->delete();

    	return redirect()->back();
    }
}
