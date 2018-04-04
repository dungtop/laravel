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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('index');
});
Route::get('content', 'Mycontroller@content' );
//Route::get('detail', 'Mycontroller@detail' );
Route::get('detail', function () {
    return view('detail');
});
/*route::get('database',function(){
	Schema::create('users',function($table){
		$table -> increments ('id');
		$table -> text ('username');
		$table -> text ('password');
		$table -> text ('fullname');
		$table -> text ('email');
	});
	echo "đã tạo xong";

});*/
/*route::get('theloai',function(){
	Schema::create('theloai',function($table){
		$table -> increments ('ma_theloai');
		$table -> text ('ten_theloai');
		$table->foreign(‘KhoaPhu’)->references(‘KhoaChinh’)->on(‘Bang’);
	});
	echo "đã tạo xong";

});*/
route::get('danhmuc',function(){
	Schema::create('danhmuc',function($table){
		$table -> increments ('ma_danhmuc');
		$table -> text ('ten_danhmuc');
		$table -> text ('ten_theloai');

	});
	echo "đã tạo xong";

});
route::get('dangtin',function(){
	Schema::create('dangtin',function($table){
		$table -> increments ('matin');
		$table -> text ('tieude');
		$table -> text ('danhmuc');
		
		$table -> text ('giaban');
		$table -> text ('chitiet');
		$table -> text ('linkanh');
		$table->timestamps();
		
	});
	echo "đã tạo xong";

});