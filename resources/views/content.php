<!DOCTYPE html>
<html>
<head> 
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link  href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>trao đổi</title>
	<link type="text/css" href="../public/css/style.css" media="screen" rel="stylesheet">
</head>
<body>
	<?php 
	include 'modules/header.php';
	include 'modules/menu.php'; 
	include 'function/jquery.php';
	include 'lib/dangnhap.php';
	include 'lib/dangky.php';
	?>
<div id="wapper">
	<hr class="wapper-hr">
	<?php //phần danh mục ?>
	<div id="danhmuc">
		<ul><p>Giáo trình, sách</p>
			
           	<li><a href="">công nghệ thông tin</a></li>
        	<li><a href="">công nghệ thông tin</a></li>
			<li><a href="">công nghệ thông tin</a></li>
		</ul>
	</div>
	<div id='content-main'>
	
		<div class="content">
			<div id="content_img">
				<a class="ajax_load_product" href="detail" ><img src="upload/baove.jpg"></a>
			</div>
			<div class="content_text">
				<div id="gia">
					40.000d
				</div>
				<h3>ngôn ngữ c </h3>
				<p class="noidung">mình mới học xong môn này nên muốn bán sách, ai cần thì liên hệ với mình nha. Cách duy nhất bạn có thể đối phó với điều này là một trong  </p>
				<p class="nguoidang">dung top<i class="fa fa-user"></i></p>
				<p class="ngaygio"><i class="fa fa-clock-o"></i> June 28, 2018</p>
			</div>
		</div>
		
	</div>
	
</div>
</body>
</html>