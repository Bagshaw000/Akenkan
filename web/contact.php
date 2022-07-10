<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>
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


<!--script-->
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
						<div class="cart"><a href="#"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!---->
	<div class="container">
		
			<!---->
		 <div class="main"> 
         <div class="reservation_top">          
            	<div class=" contact_right">
            		<h3>Contact Form</h3>
            		<div class="contact-form">
							<form method="post" action="contact-post.php">
								<input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
								<input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
								<textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
								<input type="submit" value="Send">
								<div class="clearfix"> </div>
							</form>
							<address class="address">
                    <p>1 University Avenue, <br>Berekuso, Eastern Region</p>
                    <dl>
                        <dt> </dt>
                        <dd>Whatsapp:<span> +233 800 254 2478</span></dd>
                        <dd>Telephone:<span> +1 800 547 5478</span></dd>
                        <dd>FAX: <span>+1 800 658 5784</span></dd>
                        <dd>E-mail:&nbsp; <a href="">info(@)akenkan.com</a></dd>
                    </dl>
                </address>
						</div>
            	</div>
            </div>
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