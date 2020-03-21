<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matakuliah extends Model
{
	use SoftDeletes;

    protected $table = "matakuliah";
    protected $dates = ['deleted_at'];
    protected $fillable =['id','kode_mk','nama_mk','created_at','updated_at'];
}
