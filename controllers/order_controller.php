<?php
	require_once("../classes/order_class.php");


	//--INSERT--//
	function create_order_ctrl($user_id, $trans_id, $billing_address, $amount, $status){
		$order = new order_class();
		return $order->create_order_cls($user_id, $trans_id, $billing_address, $amount, $status);
	}


	//--SELECT--//

	function get_all_orders_ctrl(){
		$order = new order_class();
		return $order->get_all_orders_cls();
	}

	function get_orders_by_user_id_ctrl($id){
		$order = new order_class();
		return $order->get_orders_by_user_id_cls($id);
	}

	function get_orders_by_status_ctrl($status){
		$order = new order_class();
		return $order->get_orders_by_status_cls($status);
	}


	function count_orders_by_status_ctrl($status){
		$order = new order_class();
		return $order->count_orders_by_status_cls($status);
	}

	function count_all_orders_ctrl(){
		$order = new order_class();
		return $order->count_all_orders_cls();
	}
	
	function create_order_items_ctrl($order_id,$book_id,$quantity){
		$cart = new order_class();
		return $cart->create_order_items_cls($order_id,$book_id,$quantity);
	}

	function get_last_order_ctrl(){
		$order = new order_class();
		return $order->get_last_order_cls();
	}




	//--UPDATE--//

	function update_order_status_ctrl($id, $status){
		$order = new order_class();
		return $order->update_order_status_cls($id, $status);
	}
?>