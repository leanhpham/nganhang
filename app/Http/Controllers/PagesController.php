<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cauhoi;
use App\chitietdethi;
use App\chuong;
use App\monhoc;
use App\nganh;
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
}
