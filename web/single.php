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
require_once("../controllers/book_controller.php");
if (!isset($_GET["id"]) || !select_book_by_id_ctrl($_GET["id"])) {
	header("Location: index.php");
} else {
	$book = select_book_by_id_ctrl($_GET["id"]);
	$image = $book["image_location"];
	$title = $book["title"];
	$price = $book["price"];
	$description = $book["description"];
	$id = $book["book_id"];
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/etalage.css" type="text/css" media="all" />
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

	<script src="js/jquery.etalage.min.js"></script>
	<script>
		jQuery(document).ready(function($) {

			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,
				source_image_width: 900,
				source_image_height: 1200,
				show_hint: true,
				click_callback: function(image_anchor, instance_id) {
					alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
				}
			});

		});
	</script>

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

		<div class=" single_top">
			<div class="single_grid">
				<div class="grid images_3_of_2">
					<ul id="etalage">
						<li>
							<a href="optionallink.php">
								<img class="etalage_thumb_image" <?php echo "src='$image'" ?> class="img-responsive" />
								<img class="etalage_source_image" <?php echo "src='$image'" ?> class="img-responsive" title="" />
							</a>
						</li>
						<!-- <li>
								<img class="etalage_thumb_image" src="images/s2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/si2.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/s3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/si3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/s1.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/si1.jpg"class="img-responsive"  />
							</li> -->
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="desc1 span_3_of_2">


					<h3><?php echo $title; ?></h3>
					<div class="cart-b">
						<div class="left-n ">GHS <?php echo $price; ?></div>
						<a class="now-get get-cart-in" href="#">ADD TO CART</a>
						<div class="clearfix"></div>
					</div>
					<!-- <h6>100 items in stock</h6> -->
					<p>BOOK DESCRIPTION <br>
						<?php echo $description; ?></p>
					<!-- <div class="share">
							<h5>Share Product :</h5>
							<ul class="share_nav">
								<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div> -->


				</div>
				<div class="clearfix"> </div>
			</div>
			<ul id="flexiselDemo1">
				<?php $random = get_book_by_random_ctrl();

				foreach ($random as $ran) {
					$im = $ran["image_location"];
					$ti = $ran["title"];
					$ran_id = $ran["book_id"];
					$ran_price = $ran["price"];
					echo "<li><img src='$im' /><div class='grid-flex'><a href='single.php?id=$ran_id'>$ti</a><p>GHS $price</p></div></li>";
				}
				?>

			</ul>
			<script type="text/javascript">
				$(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 5,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: {
							portrait: {
								changePoint: 480,
								visibleItems: 1
							},
							landscape: {
								changePoint: 640,
								visibleItems: 2
							},
							tablet: {
								changePoint: 768,
								visibleItems: 3
							}
						}
					});

				});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>

			<!-- <div class="toogle">
				<h3 class="m_3">Product Details</h3>
				<p class="m_text"> <?php /* echo $description; */ ?></p>
			</div> -->
			<div class="toogle">
				     	<h3 class="m_3">Reviews</h3>
				     		<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
							ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
							suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate 
							velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis </p>
				     </div>	

					 <div class="contact-form">
					 <h4 class="m_3">Review this book</h5>
							<form method="post" action="contact-post.php">
								<label for="">Rate from 1 to 5: </label>
								<input type="number" class="textbox" value="Rating" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Rating';}">
								<textarea value="Review" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Review';}">Type your review here...</textarea>
								<input type="submit" value="Submit">
								<div class="clearfix"> </div>
							</form>
					 </div>

		</div>

		<!---->
		<div class="sub-cate">
			<div class=" top-nav rsidebar span_1_of_left">
				<h3 class="cate">GENRES</h3>
				<ul class="menu">
					<?php
					$genres = get_all_genres_ctrl();
					foreach ($genres as $index => $gen) {
						$in = $index + 1;
						$name = $gen["genre_name"];
						echo "<li class='item$in'><a href='index.php?genre=$name'>$name </a></li>";
					}
					?>



					<!-- <li>
				<ul class="kid-menu">
					<li><a href="product.php">Sci-Fi</a></li>
					<li ><a href="product.php">Comedy</a></li>

				</ul>
			</li> -->

				</ul>
			</div>
			<!--initiate accordion-->
			<!-- <script type="text/javascript">
				$(function() {
					var menu_ul = $('.menu > li > ul'),
						   menu_a  = $('.menu > li > a');
					menu_ul.hide();
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});

				});
			</script> -->
			<!-- <div class=" chain-grid menu-chain">
								<a href="single.php"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>
								<div class="grid-chain-bottom chain-watch">
									<span class="actual dolor-left-grid">300$</span>
									<span class="reducedfrom">500$</span>
									<h6>Lorem ipsum dolor</h6>
								</div>
							</div>
							 <a class="view-all all-product" href="product.php">VIEW ALL PRODUCTS<span> </span></a>
				</div> -->
			<div class="clearfix"> </div>
		</div>
		<!---->
		<div class="footer">
			<div class="footer-top">
				<!-- <div class="container"> -->
				<!-- <div class="latter"> -->
				<!-- <h6>NEWS-LETTER</h6> -->
				<!-- <div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form> -->
				<!-- </div> -->
				<div class="clearfix"> </div>
				<!-- </div> -->
				<!-- <div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div> -->
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