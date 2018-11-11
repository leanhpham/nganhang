<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/cauhoi;
use App/chitietdethi;
use App/chuong;
use App/monhoc;
use App/nganh;
use DB;

class PagesController extends Controller
{
    public function getthemcauhoi()
    {
    	$nganh=nganh::select()->get();
    	$monhoc=monhoc::select()->where()
    	return view('themcauhoi');
    }
    public function postthemcauhoi(Request $rq)
    {
    	
    }
}
