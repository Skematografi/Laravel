<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = "matakuliah";
    protected $fillable =['id','kode_mk','nama_mk','created_at','updated_at'];
}
