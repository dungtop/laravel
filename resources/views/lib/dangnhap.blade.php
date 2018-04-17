<link type="text/css" href="../style.css" media="screen" rel="stylesheet">
<div id="login-form">
  <div class="modal-overlay login-close"></div>
  <form class="login-open" method="post" action="{{ url('http://localhost/svVinh.com/public/dangnhap') }}">
    {{ csrf_field() }}
     <p class="login-close">[X]</p>
   <h2>ĐĂNG NHẬP</h2>
    <input class="username" placeholder="Username" type="text" required="" name="username">
    <input class="username" placeholder="Password" type="password" required="" name="password">
    <button class="button">Đăng nhập</button>
    <p class="tk">chưa có tài khoản? <a class="dk" href="lib/dangky.php" title="">Đăng ký</a> ngay</p>
    
  </form>
</div>
<style>
p.login-close{float: right;
color:#fff;
margin:10px;
cursor:pointer;
}
	form.login-open{
  box-sizing: border-box;
  width: 350px;
  margin:auto;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
}
form.login-open h2 {
  box-sizing: border-box;
  padding: 20px;
  text-align: center;
  background-color: #2dc6f3;
  color: #fff;
  border-radius: 5px 5px 0px 0px;
}
 
input.username {
  margin: 30px 60px;
  width: 210px;
  display: block;
  border: none;
  padding: 13px ;
  border-bottom: solid 1px #2dc6f3;
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #2dc6f3 4%);
  background-position: -200px 0;
  background-size: 270px 100%;
  background-repeat: no-repeat;
  color: #0e6252; 
  font-size: 18px;
}
input.username:focus, input.username:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}
input.username:focus::-webkit-input-placeholder, input.username:valid::-webkit-input-placeholder {
  color: #1abc9c;
  font-size: 14px;
  transform: translateY(-20px);
  visibility: visible !important;
}
 
button.button {
  color: #2dc6f3;
  border: 1px solid #2dc6f3;
  border-radius: 3px;
  height: 45px;
  width: 234px;
  background-color: #fff;
  margin-left: 60px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
  font-size: 14px;
}
button.button:hover {
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
  background-color: #2dc6f3;
  color: #fff;
  border-radius: 3px;
}
p.tk{
	text-align: center;
  margin: 40px;
  color: #6c7071;
}
a.dk{
  color: #fb0e16;
}
</style>