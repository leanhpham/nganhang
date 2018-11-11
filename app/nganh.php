<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nganh extends Model
{
     protected $table="nganh";
    protected $fillable=['id','tenNganh'];
    public $timestamps=false;
     public function monhoc()
     {
     	return $this->hasMany('App\monhoc','idNganh','id');
     }
}
