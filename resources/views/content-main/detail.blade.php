@extends('content')
@section('content-main')

<div id="detail">
	<img src="upload/{{$chitiet->link_anh}}" alt="">
	<h2 class="detail-header">{{$chitiet->tieu_de}} </h2>
	<table>
		<tr><td  class="detail-td"><i class="fa fa-bars "></i> danh mục</td><td>{{$chitiet->ten_danhmuc}}</td></tr>
		<tr><td  class="detail-td"><i class="fa fa-usd"></i> giá bán</td><td>{{$chitiet->gia_ban}}</td></tr>
		<tr><td  class="detail-td"><i class="fa fa-user-circle"></i> liên hệ</td><td>{{$chitiet->username}}</td></tr>
		<tr><td  class="detail-td"><i class="fa fa-phone"></i> điện thoại</td><td>{{$chitiet->so_dien_thoai}}</td></tr>
		<tr><td  class="detail-td"><i class="fa fa-upload"></i> cập nhật</td><td>{{$chitiet->ngay_dang}}</td></tr>
	</table>
	<div id="detail-text">
	{{$chitiet->chi_tiet}}
	</div>
	@include('content-main.comment')
</div>
@endsection
<style>
	i.fa fa-usd{
		margin-right: 10px;
	}
</style>