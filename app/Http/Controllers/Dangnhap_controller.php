<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User;

class Dangnhap_controller extends Controller
{
    public function dangnhap(request $request)
    {
    	$username = $request->input('username');
    	$password = $request->input('password');
    	 $user=User::select('username','password')->where('username',$username)->where('password',$password);

		if(has($user)){
            echo "<script language='javascript'>alert('Đăng nhập thành công');</script>";
            
        }

		else{
			return redirect("a");	
		}
    }
}
