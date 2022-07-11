<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*General class to handle all functions
*/
/**
 *@author Kweku Acquaye
 *
 */

class cart_class extends db_connection{
	//--INSERT--//



	//--SELECT--//
	function count_cart_by_customer_cls($customer_id){
		$sql = "SELECT * FROM `cart` WHERE `customer_id`='$customer_id' ";
		return $this->db_count($sql);
	}

	function get_order_items_cls($order_id){
		$sql = "SELECT * FROM `orderdetails` WHERE `order_id`='$order_id'";
		return $this->db_fetch_all($sql);
	}

	function get_payment_info_cls($order_id){
		$sql = "SELECT * FROM `payment` WHERE `order_id`='$order_id'";
		return $this->db_fetch_one($sql);
	}

	function count_cart_by_ip_cls($customer_id){
		$sql = "SELECT * FROM `cart` WHERE `p_add`='$customer_id' ";
		return $this->db_count($sql);
	}
	function get_cart_by_customer_cls($customer_id){
		$sql = "SELECT * FROM `cart` WHERE `user_id`='$customer_id' ";
		return $this->db_fetch_all($sql);
	}

	function get_cart_by_ip_cls($customer_id){
		$sql = "SELECT * FROM `cart` WHERE `p_add`='$customer_id' ";
		return $this->db_fetch_all($sql);
	}

	function get_cart_item_by_customer_cls($product_id,$user_id){
		$sql = "SELECT * FROM `cart` WHERE `book_id`='$product_id' and `user_id`= '$user_id'";

		return $this->db_fetch_one($sql);
	}

	function get_cart_item_by_ip_cls($product_id,$ip_address){
		$sql = "SELECT * FROM `cart` WHERE `book_id`='$product_id' and `ip_address`= '$ip_address' and `user_id` = null";

		return $this->db_fetch_one($sql);
	}


	function create_order_from_cart_item_cls($order_id, $transaction_id,$date,$user_id){
		 	 	 	// billing_address 	amount
		$sql="INSERT INTO `orders` (`order_id`,`transaction_id`,`user_id`,`order_date`) VALUES ('$order_id','$transaction_id','$user_id','$date')";
		return $this->db_query($sql);
	}

	function record_payment_cls($transaction_id, $amount, $user_id, $order_id,$date){
		$sql="INSERT INTO `payment` (`pay_id`,`amt`,`customer_id`,`order_id`,`currency`,`payment_date`)
		VALUES ('$transaction_id', '$amount', '$user_id','$order_id','GHS' ,'$date')";
		return $this->db_query($sql);
	}

	function get_user_cart_item_cls($user_id, $item_id){
		$sql = "SELECT * FROM `cart` WHERE `user_id`='$user_id' AND `product_id`='$item_id'";
		return $this->db_fetch_one($sql);
	}

	function insert_order_detail($order_id,$product_id,$quantity){
		$sql = "INSERT INTO `orderdetails`(`order_id`,`product_id`,`quantity`) VALUES
		('$order_id', '$product_id','$quantity')";
		return $this->db_query($sql);
	}

	function get_every_item_price_cls($user_id){
		$sql = "SELECT books.price * cart.quantity,cart.quantity, books.description, books.price,books.image_location ,books.book_id FROM cart 
		INNER JOIN books on cart.book_id = books.book_id WHERE cart.user_id= '$user_id'  ";
		return $this->db_fetch_all($sql);

	}

	function get_cart_total_price_cls($user_id){
		$sql = "SELECT SUM(books.price * cart.quantity) FROM `cart` INNER JOIN `books` on cart.book_id = books.book_id WHERE cart.user_id ='$user_id'";

		return $this->db_fetch_one($sql);
	}


	//--UPDATE--//

	function add_to_cart_signed_in_ctrl($product_id, $customer_id, $quantity, $customer_ip){
		$sql = "INSERT INTO  `cart` (`book_id`, `ip_address`, `quantity`, `user_id`)
		VALUES ('$product_id', '$customer_ip', '$quantity', '$customer_id')";

		return $this->db_query($sql);
	}

	function add_to_cart_signed_out_ctrl($product_id, $quantity, $customer_ip){
		$sql = "INSERT INTO  `cart` (`user_id`, `ip_address`, `quantity`)
		VALUES ('$product_id', '$customer_ip', '$quantity')";

		return $this->db_query($sql);
	}

	function update_cart_cls($product_id, $customer_id, $quantity, $customer_ip){
		$sql = "UPDATE `cart` SET  `quantity`='$quantity'
		WHERE `book_id`='$product_id' AND `user_id`='$customer_id' AND `ip_address` = '$customer_ip'";

		return $this->db_query($sql);
	}




	//--DELETE--//


	function remove_item_by_customer_cls($product_id,$user_id){
		$sql = "DELETE FROM `cart` WHERE `book_id`='$product_id' and `user_id`= '$user_id'";
		return $this->db_query($sql);
	}

	function remove_item_by_ip_cls($product_id,$ip_address){
		$sql = "DELETE FROM `cart` WHERE `book_id`='$product_id' and `ip_address`= '$ip_address'  and `user_id` = null";
		return $this->db_query($sql);
	}


}

?>