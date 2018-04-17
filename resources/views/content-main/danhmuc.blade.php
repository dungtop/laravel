<div id="danhmuc">
		<ul><p>{{$theloai->ten_theloai}}</p>
			@foreach($danhmuc as $dm)
           	<li><a href="content-content-son?theloai={{$theloai->id}}&danhmuc={{$dm->id}}">{{$dm->ten_danhmuc}}</a></li>
			@endforeach
		</ul>
</div>