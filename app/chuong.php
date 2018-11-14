<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuong extends Model
{
    protected $table="cauhoi";
    protected $fillable=['id','tenChuong','idMH'];
     public $timestamps=false;
     public function monhoc()
     {
     	return $this->belongsTo('App\monhoc','idMH','id');
     }
     public function cauhoi()
     {
     	return $this->hasMany('App\cauhoi','idChuong','id');
     }

}
