<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
//Requiring neccessary php files
require_once("../settings/core.php");
require_once("../controllers/cart_controllers.php");
require_once("../controllers/user_controller.php");
require_once("../controllers/book_controller.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Akenkan: Home</title>
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
	<!--script-->
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
					<!-- LOGO -->
					<div class="logo">
						<a href="index.php"><img src="images/akenkan.svg" alt=" " /></a>

					</div>
					<!-- SEARCH BAR-->
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" placeholder="Search by title and author...">
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
		<div class="shoes-grid">
			<a href="single.php">
				<div class="wrap-in">
					<div class="wmuSlider example1 slide-grid">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-matter">
									<div class="col-md-5 banner-bag">
										<img class="img-responsive " src="images/thief_lord.jpg" alt=" " />
									</div>
									<div class="col-md-7 banner-off">
										<h2>FLAT 50% 0FF</h2>
										<label>FOR ALL PURCHASE <b>VALUE</b></label><br><br>
										<!-- <p>Title of book sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					 -->
										<span class="on-get">GET NOW</span>
									</div>

									<div class="clearfix"> </div>
								</div>

							</article>
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-matter">
									<div class="col-md-5 banner-bag">
										<img class="img-responsive " src="images/wimpy_kid.jpg" alt=" " />
									</div>
									<div class="col-md-7 banner-off">
										<h2>FLAT 50% 0FF</h2>
										<label>FOR ALL PURCHASE <b>VALUE</b></label> <br><br>
										<!-- <p>Title of book sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					 -->
										<span class="on-get">GET NOW</span>
									</div>

									<div class="clearfix"> </div>
								</div>

							</article>
							<article style="position: absolute; width: 100%; opacity: 0;">
								<div class="banner-matter">
									<div class="col-md-5 banner-bag">
										<img class="img-responsive " src="images/focus.jpg" alt=" " />
									</div>
									<div class="col-md-7 banner-off">
										<h2>FLAT 20% 0FF</h2>
										<label>FOR ALL PURCHASE <b>VALUE</b></label> <br><br>
										<!-- <p>Title of book sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>					 -->
										<span class="on-get">GET NOW</span>
									</div>

									<div class="clearfix"> </div>
								</div>

							</article>

						</div>
			</a>
			<ul class="wmuSliderPagination">
				<li><a href="#" class="">0</a></li>
				<li><a href="#" class="">1</a></li>
				<li><a href="#" class="">2</a></li>
			</ul>
			<script src="js/jquery.wmuSlider.js"></script>
			<script>
				$('.example1').wmuSlider();
			</script>
		</div>
	</div>
	</a>
	<!---->
	<!--  <div class="shoes-grid-left">
			<a href="single.php">
	   		     	<div class="col-md-6 con-sed-grid">

	   		     		<div class=" elit-grid">

		   		     		<h4>consectetur  elit</h4>
		   		     		<label>FOR ALL PURCHASE VALUE</label>
							<p>Title of book sit amet, consectetur adipisicing elit, </p>
							<span class="on-get">GET NOW</span>
						</div>
						<img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />

						<div class="clearfix"> </div>

	   		     	</div>
					</a>
					<a href="single.php">
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid">
		   		     		<h4>consectetur  elit</h4>
		   		     		<label>FOR ALL PURCHASE VALUE</label>
							<p>Title of book sit amet, consectetur adipisicing elit, </p>
							<span class="on-get">GET NOW</span>
						</div>
						<img class="img-responsive shoe-left" src="images/wa.jpg" alt=" " />

						<div class="clearfix"> </div>
	   		     	</div>
					</a>
	   		     </div> -->
	<div class="products">
		<h5 class="latest-product">LATEST BOOKS</h5>
		<!-- <a class="view-all" href="product.php">VIEW ALL<span> </span></a> 		      -->
		<?php
		// Getting all the products

		// $product_list = select_all_published_book_ctrl();

		?>
	</div>

	<?php
		$books = select_all_published_book_ctrl();

		foreach ($books as $item) {

			$id = $item["book_id"];
			$title = $item["title"];
			$author = get_author_name_by_id_ctrl($item["author_id"]);
			$price = $item["price"];
			$status = $item["book_status"];
			$image = $item["image_location"] ?? "images/1.jpg";

			echo "<tr>";
				echo "<td>

					<img src='$image' style='display:block'>
					$id
				</td>";
				echo "<td>$title</td>";
				echo "<td>$author</td>";
				echo "<td>$price</td>";
				echo "<td>$status</td>";
			echo "</tr>";
		}
	?>
	<div class="product-left">
		<div class="col-md-4 chain-grid">
			<a href="single.php"><img class="img-responsive chain" src="images/48.jpg" alt=" " /></a>
			<!-- <span class="star"> </span> -->
			<div class="grid-chain-bottom">
				<h6><a href="single.php">Title of book</a></h6>
				<div class="star-price">
					<div class="dolor-grid">
						<span class="actual">GHS 300</span>
						<!-- <span class="reducedfrom">400$</span>  -->
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 chain-grid">
			<a href="single.php"><img class="img-responsive chain" src="images/ba.jpg" alt=" " /></a>
			<!-- <span class="star"> </span> -->
			<div class="grid-chain-bottom">
				<h6><a href="single.php">Enter book title</a></h6>
				<div class="star-price">
					<div class="dolor-grid">
						<span class="actual">GHS 300</span>
						<!--  <span class="reducedfrom">400$</span>  -->
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 chain-grid grid-top-chain">
			<a href="single.php"><img class="img-responsive chain" src="images/bo.jpg" alt=" " /></a>
			<!-- <span class="star"> </span> -->
			<div class="grid-chain-bottom">
				<h6><a href="single.php">Title of book</a></h6>
				<div class="star-price">
					<div class="dolor-grid">
						<span class="actual">GHS 300</span>
						<!--  <span class="reducedfrom">400$</span>  -->
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
	</div>


	<div class="sub-cate">
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
			<div class="clearfix"> </div>
		</div>
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