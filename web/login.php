<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once("../settings/core.php");
require_once("../controllers/cart_controllers.php");
require_once("../controllers/user_controller.php");

?>
<!DOCTYPE html>
<html>

<head>
	<title>Akenkan | Login </title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
					<!-- <ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">24x7 live<span class="live"> support</span></a></li>
					</ul> -->
					<!-- <ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live"></span></a></li>
					</ul> -->
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping <span class="live"></span></a></li>
					</ul>
					<!-- <div class="down-top">
						  <select class="in-drop">
							  <option value="English" class="in-of">English</option>
							  <option value="Japanese" class="in-of">Japanese</option>
							  <option value="French" class="in-of">French</option>
							  <option value="German" class="in-of">German</option>
							</select>
					 </div> -->
					<!-- <div class="down-top top-down">
						  <select class="in-drop">

						  <option value="Dollar" class="in-of">Dollar</option>
						  <option value="Yen" class="in-of">Yen</option>
						  <option value="Euro" class="in-of">Euro</option>
							</select>
					 </div> -->
					<!---->
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
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">

					<script src="../js/auth.js"></script>
					<?php
					echo "<ul class='login'>";
					if (is_user_signed_in()) { //show log out and username if signed in
						$name = get_user_name_by_id_ctrl(get_session_user_id());
						echo "<div class='account'><a href='login.php'><span> </span>$name</a></div>";
						echo "<li><a onclick='onsignout()'><span> </span>LOGOUT</a></li>";
					} else { // show sign up and login if not
						echo "<div class='account'><a href='login.php'><span> </span>YOUR ACCOUNT</a></div>";
						echo "<li><a href='login.php'><span> </span>LOGIN</a></li> |";
						echo "<li><a href='register.php'>SIGNUP</a></li>";
					}
					echo "</ul>";

					// echo get_cart_by_ip_ctrl(get_user_ip());
					if (is_user_signed_in()) {
						$cart_count = get_cart_by_customer_ctrl(get_session_user_id());
					} else {
						$cart_count = get_cart_by_ip_ctrl(get_user_ip());
					}
					echo "<div class='cart'><a href='cart.php'><span> </span>CART ($cart_count)</a></div>";

					?>

					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!---->
	<div class="container">

		<div class="account_grid">
			<div class=" login-right">
				<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
					<div>
						<span><b>Email Address</b><label>*</label></span>
						<input type="email" id="email">
						<small>Enter a valid email address</small>
					</div>
					<div>
						<span><b>Password</b><label>*</label></span>
						<input type="password" id="password">
					</div>
					<script src="../js/auth.js"></script>
					<input type="submit" value="Login" onclick="onloginsubmit()">
					<a class="forgot" href="#">Forgot Your Password?</a>
				</form>
			</div>
			<div class=" login-left">
				<h3>NEW CUSTOMERS</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="register.php">Create an Account</a>
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
							<li><a href="#">History</a></li>
							<li><a href="#">Biographies</a></li>
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
							<li><a href="#">Corporate Enquiries</a></li>
							<li><a href="#">Shipping Policy</a></li>
							<li><a href="#">Customs Tariffs and Fees</a></li>
						</ul>
					</div>

					<div class="footer-bottom-cate">
						<h6>OUR STORY</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Meet our Team</a></li>
							<li><a href="#">Business Services</a></li>
						</ul>
					</div>
					<div class="footer-bottom-cate cate-bottom">
						<h6>OUR ADDERSS</h6>
						<ul>
							<li>Aliquam metus dui. </li>
							<li>orci, ornareidquet</li>
							<li> ut,DUI.</li>
							<li>nisi, dignissim</li>
							<li>gravida at.</li>
							<li class="phone">PH : 6985792466</li>
							<li class="temp">
								<p class="footer-class">Design by <a href="">A-Plus</a> </p>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
</body>

</html>