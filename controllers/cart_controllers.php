<?php

require_once("../classes/cart_class.php");
// include("../classes/cart_class.php");


	function get_cart_by_ip_ctrl($ip){
		$cart = new cart_class();
		return $cart->get_cart_by_ip_cls($ip);
	}

	function get_order_items_ctrl($order_id){
		$cart = new cart_class();
		return $cart->get_order_items_cls($order_id);
	}

	function get_payment_info_ctrl($order_id){
		$cart = new cart_class();
		return $cart->get_payment_info_cls($order_id);
	}


	function get_cart_by_customer_ctrl($id){
		$cart = new cart_class();
		return $cart->get_cart_by_customer_cls($id);
	}

	function count_cart_by_customer_ctrl($customer_id){
		$cart = new cart_class();
		return count($cart->get_cart_by_customer_cls($customer_id) ?? []);
	}


	function create_order_from_cart_item_ctrl($order_id, $user_id,$date,$transaction_id){

		$cart = new cart_class();
		//create order entry
		return $cart->create_order_from_cart_item_cls($order_id, $transaction_id,$date,$user_id);

	}

	function insert_order_detail($order_id,$product_id,$quantity){
		$cart = new cart_class();
		return $cart->insert_order_detail($order_id,$product_id,$quantity);
	}

	function get_user_cart_item_ctrl($user_id, $item_id){
		$cart = new cart_class();
		return $cart->get_user_cart_item_cls($user_id, $item_id);
	}

	function record_payment_ctrl($transaction_id, $amount, $user_id, $order_id,$date){
		//create payment entry

		$cart = new cart_class();
		return $cart->record_payment_cls($transaction_id, $amount, $user_id, $order_id,$date);

	}

	function count_cart_by_ip_ctrl($customer_id){
		$cart = new cart_class();
		return count($cart->get_cart_by_ip_cls($customer_id) ?? []);
	}

	function get_every_item_price_ctrl($user_id){
		$cart = new cart_class();
		
		return $cart->get_every_item_price_cls($user_id);
	}

	function get_cart_total_price_ctrl($user_id){
		$cart = new cart_class();
	
		return $cart->get_cart_total_price_cls($user_id);
	}


	//--UPDATE--//

	function add_to_cart_signed_in_ctrl($product_id, $customer_id, $quantity, $customer_ip){
		$cart = new cart_class();

		//check if the product is already there
		$item = $cart->get_cart_item_by_customer_cls($product_id, $customer_id);
		
		if($item) { // update entry if product is already in cart
			return $cart->update_cart_cls($item["book_id"], $item["user_id"], intval($item["quantity"])+1,$item["ip_address"]);
		}else {
			//new entry if its not already added to cart
			return $cart->add_to_cart_signed_in_ctrl($product_id, $customer_id, $quantity, $customer_ip);
		}
	}

	function add_to_cart_signed_out_ctrl($product_id, $quantity, $customer_ip){
		$cart = new cart_class();
		//check if the product is already there
		$item = $cart->get_cart_item_by_ip_cls($product_id, $customer_ip);

		if($item) { // update entry if product is already in cart
			return $cart->update_cart_cls($item["product_id"], $item["user_id"], intval($item["quantity"])+1,$item["ip_add"]);
		}else {
		return $cart->add_to_cart_signed_out_ctrl($product_id, $quantity, $customer_ip);
		}
	}

	function update_cart_ctrl($product_id, $customer_id, $quantity, $customer_ip){
		$cart = new cart_class();
		return $cart->update_cart_cls($product_id, $customer_id, $quantity, $customer_ip);
	}


	function remove_item_by_customer_ctrl($product_id, $user_id){
		$cart = new cart_class();
		return $cart->remove_item_by_customer_cls($product_id, $user_id);
	}


	function remove_item_by_ip_ctrl($product_id, $ip_address){
		$cart = new cart_class();
		return $cart->remove_item_by_ip_cls($product_id, $ip_address);
	}

?>