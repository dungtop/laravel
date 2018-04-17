<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Danhmuc;
class Danhmuccontroller extends Controller
{
    //xem danh sách danh mục
    public function getdanhsach()
    {
    	$danhmuc= Danhmuc::all();
    	return view('admin.danhmuc.danhsach',['danhmuc'=>$danhmuc]);
    }
    //gọi view sửa
    public function getsua($id)
    {
      $danhmuc= Danhmuc::find($id);
    	return view('admin.danhmuc.sua', ['danhmuc'=>$danhmuc]);
    }
    //sửa danh mục
    public function postsua(Request $request,$id)
    {
      $danhmuc= Danhmuc::find($id);
      $this-> validate($request,
        [
          'ten_danhmuc'=>'unique:Danhmuc,ten_danhmuc',
        ]
        ,
        [
          'ten_danhmuc.unique'=>'tên danh mục đã tồn tại'
        ]
      );
      $danhmuc->ten_danhmuc= $request->ten_danhmuc;
      $danhmuc->theloai_id= $request->theloai;
      $danhmuc->save();
      return redirect('admin/danhmuc/danhsach')->with('thongbao','Sửa dữ liệu thành công!');
    }

    //gọi view thêm
    public function getthem()
    {
    	return view('admin.danhmuc.them');
    }
    //them the loai
    public function postthem(Request $request)
    {
    	$this ->validate($request,
    		[
    			'ten_danhmuc'=>'min:3|max:100|unique:Danhmuc,ten_danhmuc'
    		],
    		[
    			'ten_danhmuc.min'=> 'tên danh mục phải có ít nhất 3 kí tự',
    			'ten_danhmuc.max'=> 'tên danh mục không được quá 100 kí tự',
          		'ten_danhmuc.unique'=>'tên danh mục đã tồn tại'
    		]
    	);
       

    	$danhmuc=new Danhmuc;
    	$danhmuc->ten_danhmuc= $request->ten_danhmuc;
    	$danhmuc->theloai_id= $request->theloai;
    	$danhmuc->save();
    	return redirect('admin/danhmuc/them')->with('thongbao','Thêm dữ liệu thành công!');
    }

    public function getxoa($id)
    {
      $danhmuc= Danhmuc::find($id);
      $danhmuc-> delete();
      return redirect('admin/danhmuc/danhsach')->with('thongbao','xóa dữ liệu thành công!');
    }
}
