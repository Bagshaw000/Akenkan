<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>

<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
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
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"><a href="orderhistory.php"><span> </span>ORDERS</a></div>
							<ul class="login">
								<li><a href="login.php"><span> </span>LOGIN</a></li> |
								<li ><a href="register.php">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="#"><span> </span>CART (0)</a></div>
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
									<img class="etalage_thumb_image" src="images/thief_lord.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/thief_lord.jpg" class="img-responsive" title="" />
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
				  
					
					<h3>Book title goes here</h3>
				<div class="cart-b">
					<div class="left-n ">GHS 300</div>
				    <a class="now-get get-cart-in" href="#">ADD TO CART</a> 
				    <div class="clearfix"></div>
				 </div>
				 <!-- <h6>100 items in stock</h6> -->
			   	<p>BOOK DESCRIPTION <br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
					esse cillum dolore eu fugiat nulla pariatur.</p>
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
			<li><img src="images/48.jpg" /><div class="grid-flex"><a href="#">48 Laws of Power</a><p>Rs 850</p></div></li>
			<li><img src="images/focus.jpg" /><div class="grid-flex"><a href="#">Focus</a><p>Rs 850</p></div></li>
			<li><img src="images/wimpy_kid.jpg" /><div class="grid-flex"><a href="#">Diary of a Wimpy Kid</a><p>Rs 850</p></div></li>
			<li><img src="images/gifted.jpg" /><div class="grid-flex"><a href="#">Gifted Hands</a><p>Rs 850</p></div></li>
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
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

          	    	<div class="toogle">
				     	<h3 class="m_3">Product Details</h3>
				     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
				     </div>	
          	   </div>
          	   
          	   <!---->
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