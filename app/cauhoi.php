<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cauhoi extends Model
{
    protected $table="cauhoi";
    protected $fillable=['id','noiDungCH','ansA','ansB','ansC','ansD','dapAn','doKho','idChuong'];
     public $timestamps=false;
     public function chuong()
     {
     	return $this->belongsTo('App\chuong','idChuong','id');
     }
       public function chitietdethi()
     {
     	return $this->hasMany('App\chitietdethi','idCH','id');
     }
}

