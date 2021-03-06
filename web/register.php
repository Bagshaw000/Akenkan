<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	require_once("../settings/core.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Akenkan | Register </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>


</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live"></span></a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/akenkan.svg" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">
						<div class="account"><a href="login.php"><span> </span>YOUR ACCOUNT</a></div>
							<ul class="login">
								<li><a href="login.php"><span> </span>LOGIN</a></li> |
								<li ><a href="register.php">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!---->
	<div class="container">

		<div class="register">
		  	  <form>
				 <div class="  register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					<div class="mation">
						<span><b>Username</b><label>*</label></span>
						<input type="text" id="username">
						<small>This field cannot be blank</small>

						<span><b>Email</b><label>*</label></span>
						<input type="email" id="email">
						<small id="email_error">Enter a valid email</small>

						 <span><b>Password</b><label>*</label></span>
						 <input type="password" id="password">
						 <small id="pass_error_len">Must be at least 5 characters long</small>
						 <small id="pass_error_num">Must be contain at least one number</small>

						 <span><b>Confirm Password</b><label>*</label></span>
						 <input type="password" id="confirm_password">
						 <small id="pass_error_confirm">The passwords do not match</small>
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>I agree to the terms and conditions</label>
					   </a>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					<script src="../js/auth.js"></script>
					   <input type="submit" onclick="return onsignupsubmit()" value="Sign Up" id="register_btn">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
		   <div	class="sub-cate">
			<div class=" top-nav rsidebar span_1_of_left">
				<h3 class="cate">CATEGORIES</h3>
					<ul class="menu">
					<li class="item1"><a href="#">Drama </a>

					</li>
					<li class="item2"><a href="#">Adventure </a>

					</li>
					<li class="item3"><a href="#">Fantasy </a>

					</li>
					<li class="item4"><a href="#">Romance </a>

					</li>
					<li class="item5"><a href="#">Sci-Fi </a>

					</li>
					<li class="item6"><a href="#">Comedy </a>

					</li>

</ul>
				</div>

		  <div class="clearfix"> </div>
	   </div>
	<!---->
	<div class="footer">
		<div class="footer-top">
					<div class="clearfix"> </div>

		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>TOP CATEGORIES</h6>
					<ul>
						<li><a href="#">Drama</a></li>
						<li><a href="#">Sci-Fi</a></li>
						<li><a href="#">Fantasy</a></li>
						<li ><a href="#">History</a></li>
						<li ><a href="#">Biographies</a></li>
						<li><a href="#">Romance</a></li>
						<li><a href="#">Comedy</a></li>

					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>QUICK LINKS</h6>
					<ul>
						<li><a href="#">Terms of Sale</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Track Order</a></li>
						<li ><a href="#">Corporate Enquiries</a></li>
						<li ><a href="#">Shipping Policy</a></li>
						<li><a href="#">Customs Tariffs and Fees</a></li>
					</ul>
				</div>

				<div class="footer-bottom-cate">
					<h6>OUR STORY</h6>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">Testimonials</a></li>
						<li ><a href="#">Meet our Team</a></li>
						<li ><a href="#">Business Services</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Aliquam metus  dui. </li>
						<li>orci, ornareidquet</li>
						<li> ut,DUI.</li>
						<li >nisi, dignissim</li>
						<li >gravida at.</li>
						<li class="phone">PH : 6985792466</li>
						<li class="temp"> <p class="footer-class">Design by <a href="">A-Plus</a> </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>