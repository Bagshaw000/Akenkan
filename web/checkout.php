<?php

require_once("../settings/core.php");
require_once("../controllers/cart_controllers.php");
require_once("../controllers/user_controller.php");
require_once("../controllers/book_controller.php");
$user_data=get_user_by_id_ctrl($_SESSION["user_id"]);
$user_id = $user_data["user_id"];
$email= $user_data['email'];





?>


<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Flat Cart Widget  Responsive Widget Template | Home :: w3layouts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link href="css/cart.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Cart Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--google fonts-->
<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="../js/cart.js"></script>
<!-- CSS only -->
<script src="../js/payment.js"></script>

<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.cake-top').fadeOut('slow', function(c){
	  		$('.cake-top').remove();
		});
	});	  
});
</script>

<script>$(document).ready(function(c) {
	$('.close-btm').on('click', function(c){
		$('.cake-bottom').fadeOut('slow', function(c){
	  		$('.cake-bottom').remove();
		});
	});	  
});
</script>
</head>
<body>
<!-- <div class="logo">
	<h3>Checkout Page</h3>
</div> -->
<div class="header-bottom-right">

					<script src="../js/auth.js"></script>
					<?php
					

					// echo get_cart_by_ip_ctrl(get_user_ip());
					if (is_user_signed_in()) {
						$data=get_cart_total_price_ctrl($_SESSION["user_id"]);
						$item_data= get_every_item_price_ctrl($_SESSION["user_id"]);
						
				?>

					<div class="clearfix"> </div>
				</div>
<div class="cart">
   <div class="cart-top">
   	  <div class="cart-experience">
   	  	 <h4>Cart Page</h4>
   	  </div>
   	  <div class="cart-login">
   	  	 <div class="cart-login-img">
   	  	 	<!-- <img src="images/loggin_man.png"> -->
   	  	 </div>
   	  	 <div class="cart-login-text">
   	  	 	
   	  	 </div> 	
   	  	  <!-- <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">This is looking great</option>
					<option value="1">Many variations</option>
					<option value="2">Ipsum is simply</option>
					<option value="3">Nemo enim ipsam</option>
				</select>
			 </div>  	  -->
   	  	 <div class="clear"> </div>
   	  </div>
   	 <div class="clear"> </div>
   </div>
   <div class="cart-bottom">
   	 <div class="table">
   	 	<table>
   	 		<tbody>
   	 	      <tr  class="main-heading">	  	      	
		 			<th><b>Images</b></th>
		 			<th class="long-txt"><b>Product Description</b></th>
		 			<th><b>Quantity</b></th>
		 			<th><b>Price</b></th>
		 			<th><b>Total</b></th> 		 			 	
   	 	     </tr>
			 <?php
			 foreach($item_data as $item){
			 ?>
   	 	     <tr class="cake-top">
   	 	     	<td class="cakes">	 	     	  
   	 	     		<div class="product-img">
   	 	     			<img src="<?php echo($item["image_location"]); ?>">
   	 	     		</div>
   	 	        </td>
   	 	        <td class="cake-text">
   	 	     		<div class="product-text">
   	 	     			<h3><?php echo($item["description"]); ?></h3>
   	 	     			
   	 	     		</div>
 	     	    </td>
 	     	    <td class="quantity"> 	 	     	 
   	 	     	  <div class="product-right">
   	 	     	  	 <input min="1" type="number" id="quantity" name="quantity" value="<?php echo($item["quantity"]) ?>" class="form-control input-small">				  
   	 	     	  </div>
   	 	     	</td>
   	 	     	<td class="price">
   	 	     		<h4><?php echo("GHC"); echo($item["price"]); ?></h4>	 	     		
   	 	     	</td>
   	 	     	<td class="top-remove">
   	 	     		<h4><?php echo("GHC"); echo($item["books.price * cart.quantity"]); ?></h4>
   	 	     		

   	 	     	</td>
  	 	     	
   	 	     </tr>

			 <?php }?>

			 
   	 	      <!-- <tr class="cake-bottom">
   	 	     	<td class="cakes">	 	     	  
   	 	     		<div class="product-img2">
   	 	     			<img src="images/cack2.png">
   	 	     		</div>
   	 	        </td>
   	 	        <td class="cake-text">
   	 	     		<div class="product-text">
   	 	     			<h3>Box Of 12 Rose Petal Blueberry Cupcakes</h3>
   	 	     			<p>Product Code: TLG12345</p>
   	 	     		</div>
 	     	    </td>
 	     	    <td class="quantity"> 	 	     	 
   	 	     	  <div class="product-right">
   	 	     	  	 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">				  
   	 	     	  </div>
   	 	     	</td>
   	 	     	<td>
   	 	     		<h4>$12.99</h4>
   	 	     	</td>
   	 	     	<td class="btm-remove">
   	 	     		<h4>$25.98</h4>
   	 	     		<div class="close-btm">
   	 	     	   <h5>Remove</h5>
   	 	        </div>
   	 	     	</td>
   	 	     	
   	 	     
     	 	     </tr> -->
				   	
   	 	   </tbody>

   	 	</table>
			<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Pls enter billing adresss</label>
						<textarea class="form-control" id="exampleFormControlTextarea1"  required rows="3"></textarea>
					</div>
   	 </div>
   	 <div class="vocher">
   	 	<!-- <div class="dis-card">
   	 		<h2>Discount Code or Voucher</h2>
   	 		<p>Enter your discount code or voucher to receive a discount on your total order.</p>
   	 		<form>
   	 			<input type="text" value="">
   	 			<input type="submit"  value="Redeem">
   	 		</form>
   	 	</div> -->
   	 	<div class="dis-total">
   	 		<h1>Total GHC <?php  echo $data["SUM(books.price * cart.quantity)"] ?></h1>
   	 		<div class="tot-btn">
   	 		
   	 			<a class="check" href="checkout.php" onclick="payWithPaystack('<?php echo ($email) ?>','<?php  echo $data['SUM(books.price * cart.quantity)'] ?>','<?php echo $user_id ?>')">Pay</a>
   	 		</div>
   	 	</div>
   	   <div class="clear"> </div>
   	 </div>
   </div>
</div>
<?php 	} else {
				header('Location: index.php');	
					}
				
					?>
<div class="copy-right">
			<!-- <p>© 2016 Flat Cart Widget. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p> -->
</div>

</body>
</html>
