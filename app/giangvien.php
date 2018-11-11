<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giangvien extends Model
{
    protected $table="giangvien";
    protected $fillable=['id','tenGV','ngaySinh','email','soDT','tenTK'];
     public $timestamps=false;
     public function taikhoan()
     {
     	return $this->belongsTo('App\taikhoan','tenTK','tenTK');
     }
 }
