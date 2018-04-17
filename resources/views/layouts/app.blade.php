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
    
    @include ('modules/header')
    @include ('modules/menu')
    @include ('function/jquery')
    @include ('lib/dangnhap')
    @include ('lib/dangky')
    @yield('index')
    @yield('content')
    @yield('dangtin')

</body>
</html>