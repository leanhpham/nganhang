<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monhoc extends Model
{
    protected $table="monhoc";
    protected $fillable=['id','tenMH','idNganh'];
    public $timestamps=false;
     public function chuong()
     {
     	return $this->hasMany('App\chuong','idMH','id');
     }
     public function nganh()
     {
     	return $this->belongsTo('App\nganh','idNganh','id');
     }


}
