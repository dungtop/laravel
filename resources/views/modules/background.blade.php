<div id="bg">
	<img src="images/roi.png" alt="">
</div>
<div id="bgson">
	<h1>CHỌN DANH MỤC</h1>
	<ul>
		@foreach($theloai as $tl)
		<li><a href="content-content-son?theloai={{$tl->id}}" title=""><img src="images/{{$tl->link}}" alt=""></a> </li>
		@endforeach
		
	</ul>
</div>