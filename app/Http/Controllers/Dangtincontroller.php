<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dangtin;
class Dangtincontroller extends Controller
{
	//gọi view duyệt tin
    public function getduyet()
    {
    	$dangtin = Dangtin::select('Dangtin.id','tieu_de','ten_danhmuc','gia_ban','chi_tiet','so_dien_thoai','username','ngay_dang','link_anh')->join('users','users.id','=','dangtin.user_id')->join('danhmuc','dangtin.danhmuc_id','=','danhmuc.id')->where('trang_thai','=',0)->get();
    	return view('admin.dangtin.duyettin',['dangtin'=>$dangtin]);
    }

    //gọi view giáo trình - sách
    public function getgiaotrinh_sach()
    {
    	$dangtin = Dangtin::select('Dangtin.id as matin','theloai_id','tieu_de','ten_danhmuc','gia_ban','chi_tiet','so_dien_thoai','username','ngay_dang','link_anh')->join('users','users.id','=','dangtin.user_id')->join('danhmuc','dangtin.danhmuc_id','=','danhmuc.id')->where('theloai_id','=',1)->get();
    	return view('admin.dangtin.giaotrinh_sach',['dangtin'=>$dangtin]);
    }

    //gọi view đồ dùng vật dụng
    public function getdodung_vatdung()
    {
    	$dangtin = Dangtin::select('Dangtin.id as matin','theloai_id','tieu_de','ten_danhmuc','gia_ban','chi_tiet','so_dien_thoai','username','ngay_dang','link_anh')->join('users','users.id','=','dangtin.user_id')->join('danhmuc','dangtin.danhmuc_id','=','danhmuc.id')->where('theloai_id','=',2)->get();
    	return view('admin.dangtin.dodung_vatdung',['dangtin'=>$dangtin]);
    }

}
