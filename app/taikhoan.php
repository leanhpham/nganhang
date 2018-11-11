<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
        protected $table="taiKhoan";
    protected $fillable=['tenTK','matKhau'];
     public $timestamps=false;
      public function giangvien()
    {
    	return $this->hasOne('App\giangvien');
    }
}
