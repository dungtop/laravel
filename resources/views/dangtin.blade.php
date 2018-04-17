@extends('layouts.app')
@section('dangtin')
<div id="dangtin" >
	<h1 class="dangtin">Đăng tin miễn phí</h1>
	<form action="">
		
		<ul>
			<li><span>Tiêu đề</span><input class="dangtin-input" type="text" name="tieude" required="" placeholder="Nhập tiêu đề"></li>

			<li><span>thể loại</span><select class="dangtin-select" name="">
			<option>Giáo trình, sách</option>
			<option>Đồ dùng, vật dụng</option>
			</select></li>

			<li><span>Danh mục</span><select class="dangtin-select" name="">
				<option>Công nghệ thông tin</option>
				<option>Công nghệ thực phẩm</option>
				<option>máy tính</option></select>
			</li>

			<li><span>Giá bán</span><input class="dangtin-input" type="text" name="giaban" required="" placeholder="Nhập giá bán"></li>

			<li style="height: 185px;"><span>Chi tiết</span><textarea class="dangtin-area" type="text" placeholder="Nhập chi tiết" required="" ></textarea></li>

			<li><span>Số điện thoại</span><input class="dangtin-input" type="text" name="sdt" placeholder="Nhập số điện thoại" required="" ></li>
		</ul>
		<button class="button-dangtin"name="dangtin">Đăng tin</button>
	</form>
</div>
@endsection()