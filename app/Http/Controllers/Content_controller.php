<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dangtin;
use App\Danhmuc;
use App\Theloai;
use App\User;
class Content_controller extends Controller
{
    //gọi view trang chủ
   public function index()
   {
        $theloai = Theloai::all();
        return view('index',['theloai'=>$theloai]);
   }
   //gọi view content
    public function content( Request $request)
    {
        //hàm truy vấn menu
        $danhmuc=Danhmuc::where('theloai_id', $request->get('theloai'))->get();
        $theloai=Theloai::where('id', $request->get('theloai'))->first();

        //hien content khi k co danh muc
         if($request->get('danhmuc')==null)
             $dangtin = Dangtin::select('dangtin.id as matin','link_anh','gia_ban','tieu_de','chi_tiet','username','ngay_dang','danhmuc_id')->join ('users','dangtin.user_id','=','users.id')->join ('danhmuc','dangtin.danhmuc_id','=','danhmuc.id')->where('theloai_id',$request->get('theloai'))->get();

          //hien content theo danh muc
        else $dangtin = Dangtin::select('dangtin.id as matin','link_anh','gia_ban','tieu_de','chi_tiet','username','ngay_dang','danhmuc_id')->join ('users','dangtin.user_id','=','users.id')->where('danhmuc_id', $request->get('danhmuc'))->get();

        return view ('content-main.content-son',['dangtin'=>$dangtin,'danhmuc'=>$danhmuc,'theloai'=>$theloai]);

            
               
    }
    
}