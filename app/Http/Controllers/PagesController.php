<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cauhoi;
use App\chitietdethi;
use App\chuong;
use App\monhoc;
use App\nganh;
use App\dethi;
use App\taikhoan;
use App\giangvien;
use Session;

use DB;

class PagesController extends Controller
{
    public function postlogin(Request $rq)
    {
        $tenTK=$rq->username;
        $matKhau=$rq->password;
    // $this->validate($rq,[
    //     'username'=>'require|min:3|max:20',
    //     'password'=>'require|min:3|max:50'
    //   ],[
    //     'username.min'=>'Nhap kho duoc it hon 3 ky tu',
    //     'password.max'=>'Nhap khong qua 20 ky tu',
    //   ]);
        $user=taikhoan::where('tenTK',$tenTK)->first();
        if($user!=null)
        {
            $pass=taikhoan::where('tenTK',$tenTK)->select()->first();
            if($pass->matKhau==$matKhau)
            {
                Session()->put('login',true);
                Session()->put('name',$tenTK);
                return redirect()->route('nganhangcauhoi');
            }
            else{

                echo 0;
            }
        }
        else 
            echo 2;
    }
    public function postLogout(Request $rq)
    {
        Session()->put('login',false);
        $rq->Session()->flush();
        return redirect('login');
    }
    public function getthemcauhoi()
    {
        if(Session::has('login') && Session::get('login')==true){
            $nganh=nganh::select()->get();
            $monhoc=monhoc::select()->get();
            $chuong=chuong::select()->get();
            return view('pages.themcauhoi',compact('nganh','monhoc','chuong'));
        }
        else
            return redirect('login');

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
        if(Session::has('login') && Session::get('login')==true){
            $nganh=nganh::select()->get();
            $monhoc=monhoc::select()->get();
            $chuong=chuong::select()->get();
            $cauhoi=cauhoi::select()->get();
            return view('pages.nganhangcauhoi',compact('nganh','monhoc','chuong','cauhoi'));
        }
        else
            return redirect('login');
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
     if(Session::has('login') && Session::get('login')==true){
         $nganh=nganh::select()->get();
         $monhoc=monhoc::select()->get();
         $chuong=chuong::select()->get();
         $cauhoi=cauhoi::select()->get();
         return view('pages.taode',compact('nganh','monhoc','chuong','cauhoi','cauhoide','cauhoitb','cauhoikho'));
     }
     else
        return redirect('login');
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
   if(Session::has('login') && Session::get('login')==true){
       $nganh=nganh::select()->get();
       $monhoc=monhoc::select()->get();
       $chuong=chuong::select()->get();
       $cauhoi=cauhoi::select()->get();
       $dethi=dethi::select()->get();
       return view('pages.nganhangdethi',compact('nganh','monhoc','chuong','cauhoi','dethi'));
   }
   else
    return redirect('login');
}
public function getLogin()
{
    return view('pages.signIn');
}

}
