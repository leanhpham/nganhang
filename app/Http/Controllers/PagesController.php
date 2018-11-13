<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cauhoi;
use App\chitietdethi;
use App\chuong;
use App\monhoc;
use App\nganh;
use App\dethi;

use DB;

class PagesController extends Controller
{
    public function getthemcauhoi()
    {
        $nganh=nganh::select()->get();
        $monhoc=monhoc::select()->get();
        $chuong=chuong::select()->get();
        return view('pages.themcauhoi',compact('nganh','monhoc','chuong'));

    }

    public function postthemcauhoi(Request $rq)
    {
    	$cauhoi=new cauhoi;
        $cauhoi->noiDungCH=$rq->noidung;
        $cauhoi->ansA=$rq->dapan1;
        $cauhoi->ansB=$rq->dapan2;
        $cauhoi->ansC=$rq->dapan3;
        $cauhoi->ansD=$rq->dapan4;
        $cauhoi->doKho=$rq->dokho;
        $cauhoi->dapAn=$rq->dapan;
        $cauhoi->idChuong=$rq->chuong;
        $cauhoi->save();
        return redirect('themcauhoi')->with('success', 'Thêm thành công');
    }
    public function getnganhangcauhoi()
    {
        $nganh=nganh::select()->get();
        $monhoc=monhoc::select()->get();
        $chuong=chuong::select()->get();
        $cauhoi=cauhoi::select()->get();
        return view('pages.nganhangcauhoi',compact('nganh','monhoc','chuong','cauhoi'));
    }
    public function posteditcauhoi(Request $rq)
    {
        $cauhoi=new cauhoi;
        $cauhoi->where('idCH',$rq->idCH)->update(['noiDungCH'=>$rq->noidung,'ansA'=>$rq->A,'ansB'=>$rq->B,'ansC'=>$rq->C,'ansD'=>$rq->D,'dapAn'=>$rq->dapan]);
        echo 1;
    }

    public function postxoacauhoi(Request $rq)
    {

      $cauhoi =cauhoi::select('idCH')->where('idCH',$rq->idCH)->delete();
      
      echo 1;
  }

  public function gettaode()

  {
   $nganh=nganh::select()->get();
   $monhoc=monhoc::select()->get();
   $chuong=chuong::select()->get();
   $cauhoi=cauhoi::select()->get();




   

  return view('pages.taode',compact('nganh','monhoc','chuong','cauhoi','cauhoide','cauhoitb','cauhoikho'));
}

public function posttaode(Request $rq)
{ 


 $chuong=chuong::select('idChuong')->where('idMH',$rq->mh)->get()->toArray();
 $cauhoi1=cauhoi::select()->whereIn('idChuong',$chuong)->inRandomOrder()->take($rq->socau)->get();
 $dethi=new dethi;
 $dethi->idDT=$rq->made;
 $dethi->ngayLap=date('y/m/d');
 $dethi->soLuong=$rq->socau;
 $dethi->idMH=$rq->mh;
 $dethi->save();

 
 foreach($cauhoi1 as $ch)
 {
    DB::table('chitietdethi')->insert(['idCH' => $ch->idCH, 'idDT' => $rq->made]);
 }

 echo 1;
}

public function getde()
{
   return view('pages.de');
}
}
