<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Tests\Debug\FileLinkFormatterTest;
use Illuminate\Support\Facades\Storage;
use Validate;
use App\File;
use App\cauhoi;
use App\chitietdethi;
use App\chuong;
use App\dethi;
use App\giangvien;
use App\monhoc;
use App\nganh;
use App\users;
use DB;

class MyController extends Controller {

  public function login_AD(Request $rq)
  {
   $tenTK=$rq['username'];
   $matkhau=$rq['password'];
  //  $this->validate($rq,[
  //   'tenTK'=>'require|min:3|max:20',
  //   'password'=>'require|min:3|max:50'
  // ],[
  //   'tenTK.require'=>'Chua nhap tai khoan',
  //   'tenTK.min'=>'Nhap khong duoc it hon 3 ky tu',
  //   'tenTK.max'=>'Nhap khong qua 20 ky tu',
  //   'password.require'=>'Chua nhap pass'
  // ]);
   if(Auth::attempt(['tenTK' => $tenTK, 'password' => $matkhau])){
    return view('admin.adminIndex',['user'=>Auth::user()]);
  }
  else
   return view('signIn');
}

public function getDangXuatAdmin() 
{
  Auth::logout();
  return redirect('admin.signIn');
}

public function themgiangvien(Request $rq)
{
 $tenGV=$rq->tenGV;
 $ngaySinh=$rq->ngaySinh;
 $email=$rq->email;
 $soDT=$rq->soDT;
 $tenTK=$rq->tenTK;
 $matKhau=bcrypt($rq->matKhau);

 $taikhoanAD= new taiKhoanAD;
 $taikhoanAD->tenTK=$tenTK;
 $taikhoanAD->matKhau=$matKhau;
 $taikhoanAD->save();
 $giangvien = new giangvien;
 $giangvien->tenGV=$tenGV;
 $giangvien->ngaySinh= $ngaySinh;
 $giangvien->email= $email;
 $giangvien->tenTK= $tenTK;
 $giangvien->save();
 echo "addSucess";
}
public function getList()
{
 $giangvien = new giangvien;
 $data= $giangvien->join('users','giangvien.tenTK','=','users.tenTK')->select('giangvien.*','giangvien.tenTK')->get()->toJson();

 return $data;
}
public function suagiangvien($id, Request $rq)
{
 $giangvien=new giangvien;
 $taikhoan = new taiKhoanAD;
 $giangvien->where('idGV',$id)->update(['tenGV'=>$rq->tenGV,'ngaySinh'=>$rq->ngaySinh,'email'=>$rq->email,'tenTK'=>$rq->tenTK]);
 $users->where('tenTK',$rq->tenTK)->update(['quyen'=>$rq->quyen]);
 return 1;
}
public function deleteGV($id)
{
 $giangvien =  giangvien::findOrFail($id);
 $giangvien->delete();
 return 1;
}
}