<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*
/*
Route::get('/', function () {
    return view('welcome');
});*/
//gọi ctl index
Route::get('/','Content_controller@index');
//gọi ctl content
route::get('content-content-son','Content_controller@content');
//gọi ctl detail
route::get('content-detail','Detail_controller@detail');
//gọi ctl dangtin
route::get('dangtin','Dangtin_controller@dangtin');
//gọi ctl quanlytin
route::get('quanlytin','Quanlytin_controller@quanlytin');
route::post('dangnhap','Dangnhap_controller@dangnhap');
route::get('a',function(){
	echo "đăng nhập k thành công";
});
//trang admin
route::group(['prefix'=>'admin'],function(){
	//users
	route::group(['prefix'=>'users'],function(){
		//admin/users/danhsach
		route::get('danhsach', 'Usercontroller@getdanhsach');

		//sửa user 
		route::get('sua/{id}', 'Usercontroller@getsua');
		route::post('sua/{id}', 'Usercontroller@postsua');

		//thêm user
		route::get('them', 'Usercontroller@getthem');
		route::post('them', 'Usercontroller@postthem');

		//xóa user 
		route::get('xoa/{id}', 'Usercontroller@getxoa');
	});
	//the loai
	route::group(['prefix'=>'theloai'],function(){
		//admin/theloai/danhsach
		route::get('danhsach', 'Theloaicontroller@getdanhsach');

		//sửa thể loại
		route::get('sua/{id}', 'Theloaicontroller@getsua');
		route::post('sua/{id}', 'Theloaicontroller@postsua');
		
		//thêm thể loại
		route::get('them', 'Theloaicontroller@getthem');
		route::post('them', 'Theloaicontroller@postthem');
		//xóa thể loại
		route::get('xoa/{id}', 'Theloaicontroller@getxoa');
	});
		//danh muc
	route::group(['prefix'=>'danhmuc'],function(){
		//admin/danhmuc/danhsach
		route::get('danhsach', 'Danhmuccontroller@getdanhsach');

		//sửa danh mục
		route::get('sua/{id}', 'Danhmuccontroller@getsua');
		route::post('sua/{id}', 'Danhmuccontroller@postsua');
		
		//thêm danh mục
		route::get('them', 'Danhmuccontroller@getthem');
		route::post('them', 'Danhmuccontroller@postthem');
		//xóa danh mục
		route::get('xoa/{id}', 'Danhmuccontroller@getxoa');
	});

	//dang tin
	route::group(['prefix'=>'dangtin'],function(){
		//admin/dangtin/duyệt tin
		route::get('duyet', 'Dangtincontroller@getduyet');
		//admin/dangtin//giaotrinh-sach
		route::get('giaotrinh_sach', 'Dangtincontroller@getgiaotrinh_sach');
		//admin/dangtin//dodung-vatdung
		route::get('dodung_vatdung', 'Dangtincontroller@getdodung_vatdung');


		route::get('sua', 'Dangtincontroller@getsua');
		route::get('them', 'Dangtincontroller@getthem');
	});

	//binh luan
	route::group(['prefix'=>'binhluan'],function(){
		//admin/binhluan/danhsach
		route::get('danhsach', 'Theloaicontroller@getdanhsach');
		route::get('sua', 'Theloaicontroller@getsua');
		route::get('them', 'Theloaicontroller@getthem');
	});


	
});