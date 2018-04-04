<div id="sign-up-form">
	<div class="modal-overlay sign-up-close"></div>
	<form class="sign-up-open">
		<p class="sign-up-close" 
     	style="float: right;color:#fff;margin:10px;cursor:pointer;">[X]</p>
		<h2 class="sign-up">ĐĂNG KÝ</h2>
		<input class="username-sign-up" placeholder="Username" type="text" required="">
	    <input class="username-sign-up" placeholder="Password" type="password" required="">
	    <input class="username-sign-up" placeholder="full name" type="text" required="">
	    <input class="username-sign-up" placeholder="email" type="email" required="">
	    <button class="button-sign-up">Đăng ký</button>
	</form>
</div>
<style>
.sign-up-open{
	width: 350px;
	background-color: white;
	border-radius: 5px;
	padding-bottom: 40px;

}
.sign-up-open h2.sign-up{
	padding: 20px;
  text-align: center;
  background-color: #2dc6f3;
  border-radius: 5px 5px 0px 0px;
  color: #fff;
}
input.username-sign-up {
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
input.username-sign-up:focus, input.username-sign-up:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}
input.username-sign-up:focus::-webkit-input-placeholder, input.username-sign-up:valid::-webkit-input-placeholder {
  color: #1abc9c;
  font-size: 14px;
  transform: translateY(-20px);
  visibility: visible !important;
}
 
button.button-sign-up {
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
button.button-sign-up:hover {
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
  background-color: #2dc6f3;
  color: #fff;
  border-radius: 3px;
}
</style>