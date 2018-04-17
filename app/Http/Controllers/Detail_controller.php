<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dangtin;
use App\Danhmuc;
use App\User;
use App\Theloai;

class Detail_controller extends Controller
{
    public function detail(request $request)
    {
    	$danhmuc=Danhmuc::where('theloai_id', $request->get('theloai'))->get();
        $theloai=Theloai::where('id', $request->get('theloai'))->first();
        $chitiet = Dangtin::join ('users','users.id','=','dangtin.user_id')->where('dangtin.id', $request->get('matin'))->join ('danhmuc','danhmuc.id','=','dangtin.danhmuc_id')->where('danhmuc.id', $request->get('danhmuc'))->first();
		return view ('content-main.detail',['chitiet'=>$chitiet,'theloai'=>$theloai,'danhmuc'=>$danhmuc]);
      
    }
}
