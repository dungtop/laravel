<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theloai;

class Theloaicontroller extends Controller
{
    //xem danh sách thể loại
    public function getdanhsach()
    {
    	$theloai= Theloai::all();
    	return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }
    //gọi view sửa
    public function getsua($id)
    {
      $theloai= Theloai::find($id);
    	return view('admin.theloai.sua', ['theloai'=>$theloai]);
    }
    //sửa thể loại
    public function postsua(Request $request,$id)
    {
      $theloai= Theloai::find($id);
      $this-> validate($request,
        [
          'sua_theloai'=>'unique:Theloai,ten_theloai',
        ]
        ,
        [
          'sua_theloai.unique'=>'tên thể loại đã tồn tại'
        ]
      );
      $theloai->ten_theloai= $request->sua_theloai;
      $theloai->save();
      return redirect('admin/theloai/danhsach')->with('thongbao','Sửa dữ liệu thành công!');
    }

    //gọi view thêm
    public function getthem()
    {
    	return view('admin.theloai.them');
    }
    //them the loai
    public function postthem(Request $request)
    {
    	$this ->validate($request,
    		[
    			'ten'=>'required|min:3|max:100|unique:Theloai,ten_theloai'
    		],
    		[
    			'ten.required'=> 'Bạn phải nhập tên thể loại',
    			'ten.min'=> 'tên thể loại phải có ít nhất 3 kí tự',
    			'ten.max'=> 'tên thể loại không được quá 100 kí tự',
          'ten.unique'=>'tên thể loại đã tồn tại'
    		]
    	);
        //Kiểm tra file
      if($request->hasFile('image')){
          $file = $request->image;
   
          //Lấy Tên files
          $ten=$file->getClientOriginalName();
   
          //Lấy Đuôi File
          $duoi=$file->getClientOriginalExtension();
          if($duoi!='jpg' && $duoi!='png'&& $duoi!='jpeg')
          {
            return redirect('admin/theloai/them')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
          }
       }

       $file->move('images',$ten);
    	$theloai=new Theloai;
    	$theloai->ten_theloai= $request->ten;
    	$theloai->link= $ten;
    	$theloai->save();
    	return redirect('admin/theloai/them')->with('thongbao','Thêm dữ liệu thành công!');
    }

    public function getxoa($id)
    {
      $theloai= Theloai::find($id);
      $theloai-> delete();
      return redirect('admin/theloai/danhsach')->with('thongbao','xóa dữ liệu thành công');
    }
}
