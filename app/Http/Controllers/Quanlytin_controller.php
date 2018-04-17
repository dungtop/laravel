<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
use App\Theloai;

class Quanlytin_controller extends Controller
{
     public function quanlytin(request $request)
    {
    	$danhmuc=Danhmuc::where('theloai_id', $request->get('theloai'))->get();
        $theloai=Theloai::where('id', $request->get('theloai'))->first();
         return view ('quanlytin',['theloai'=>$theloai,'danhmuc'=>$danhmuc]);
    }
}
