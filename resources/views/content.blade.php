@extends('layouts.app')
@section('content')
<div id="wapper">
	<hr class="wapper-hr">
	@include('content-main.danhmuc')
	<div id='content-main'>
		@yield('content-main')
	</div>
	
</div>
@endsection