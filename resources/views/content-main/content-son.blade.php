@extends ('content')
@section ('content-main')
@foreach($dangtin as $tin)
<div class="content">
	<div class="content_img">
		<a  href="content-detail?theloai={{$theloai->id}}&danhmuc={{$tin->danhmuc_id}}&matin={{$tin->matin}}" ><img src="upload/{{$tin->link_anh}}"></a>
	</div>
	<div class="content_text">
		<div class="gia">
			{{$tin->gia_ban}}
		</div>
		<a  href="content-detail?theloai={{$theloai->id}}&danhmuc={{$tin->danhmuc_id}}&matin={{$tin->matin}}" ><h3>{{$tin->tieu_de}} </h3></a>
		<p class="noidung">{{$tin->chi_tiet}}</p>
		<p class="nguoidang">{{$tin->username}}<i class="fa fa-user-circle"></i></p>
		<p class="ngaygio"><i class="fa fa-clock-o"></i> {{$tin->ngay_dang}}</p>
	</div>
</div>
@endforeach
@endsection﻿