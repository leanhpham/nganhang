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
        return redirect()->route('nganhangcauhoi');
    }

    public function postxoacauhoi(Request $rq)
    {

      $cauhoi =cauhoi::select('idCH')->where('idCH',$rq->idCH)->delete();
      
      return view('pages.nganhangcauhoi');
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
   $made=$rq->made;

   foreach($cauhoi1 as $ch)
   {
    DB::table('chitietdethi')->insert(['idCH' => $ch->idCH, 'idDT' => $rq->made]);
}

return redirect()->route('de',[$made]);
}

public function getde(Request $rq)
{
    $chitietdethi=chitietdethi::select('idCH')->where('idDT',$rq->id)->get();
    $cauhoi=cauhoi::select()->get();
    $made=$rq->id;
    $mamon=dethi::select()->where('idDT',$rq->id)->first();
    $monhoc=monhoc::select()->where('idMH',$mamon->idMH)->first();
    $nganh=nganh::select()->where('idNganh',$monhoc->idNganh)->first();

    return view('pages.de',compact('chitietdethi','cauhoi','monhoc','nganh','made'));
}
public function getnganhangdethi()
{
   $nganh=nganh::select()->get();
   $monhoc=monhoc::select()->get();
   $chuong=chuong::select()->get();
   $cauhoi=cauhoi::select()->get();
   $dethi=dethi::select()->get();
   return view('pages.nganhangdethi',compact('nganh','monhoc','chuong','cauhoi','dethi'));
}
}
