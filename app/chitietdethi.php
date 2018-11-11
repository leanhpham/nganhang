<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdethi extends Model
{
     protected $table="chitietdethi";
    protected $fillable=['idCH','idDT'];
     public $timestamps=false;
        public function cauhoi()
     {
     	return $this->belongsTo('App\cauhoi','idCH','id');
     }
        public function dethi()
     {
     	return $this->belongsTo('App\dethi','idDT','id');
     }
}
