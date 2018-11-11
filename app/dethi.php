<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dethi extends Model
{
	protected $table="dethi";
	protected $fillable=['id','ngayLap','soLuong','idMH'];
	public $timestamps=false;
	public function monhoc()
	{
		return $this->belongsTo('App\monhoc','idMH','id');
	}
	 public function chitietdethi()
     {
     	return $this->hasMany('App\chitietdethi','idDT','id');
     }
}
