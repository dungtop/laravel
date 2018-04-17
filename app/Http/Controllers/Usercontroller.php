<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Usercontroller extends Controller
{
	 //xem danh sách User
    public function getdanhsach()
    {
    	$users= User::all();
    	return view('admin.users.danhsach',['users'=> $users]);
    }

    //gọi view sửa
    public function getsua($id)
    {
      $users= User::find($id);
    	return view('admin.users.sua', ['users'=>$users]);
    }
    //sửa danh mục
    public function postsua(Request $request,$id)
    {
      $users= User::find($id);
      $users->username= $request->usersname;
      $users->password=md5( $request->pass);
      $users->fullname= $request->full_name;
      $users->email= $request->email;
      $users->level= $request->level;
      $users->save();
      return redirect('admin/users/danhsach')->with('thongbao','Sửa dữ liệu thành công!');
    }

    //gọi view thêm
    public function getthem()
    {
    	return view('admin.users.them');
    }
    //them the loai
    public function postthem(Request $request)
    {
    	$users =new User;
    	$users->username= $request->usersname;
    	$users->password= md5($request->pass);
      $users->fullname= $request->full_name;
      $users->email= $request->email;
      $users->level= $request->level;
    	$users->save();
    	return redirect('admin/users/them')->with('thongbao','Thêm dữ liệu thành công!');
    }

    public function getxoa($id)
    {
      $users= User::find($id);
      $users-> delete();
      return redirect('admin/users/danhsach')->with('thongbao','xóa dữ liệu thành công!');
    }
}
