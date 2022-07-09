<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions
*/
/**
 *@author Kweku Acquaye
 *
 */

class order_class extends db_connection{

	//--INSERT--//
	function create_order_cls($user_id, $order_id, $trans_id, $billing_address, $amount, $status){
		$sql = "INSERT INTO `orders` (`user_id`,`order_id`,`transaction_id`,`billing_address`,`amount`,`order_status`)
		VALUES ('$user_id','$order_id','$trans_id','$billing_address','$amount','$status')";
		$this->db_query($sql);
	}


	//--SELECT--//

	function get_all_orders_cls(){
		$sql = "SELECT * FROM `orders`";
		return $this->db_fetch_all($sql);
	}


	function get_orders_by_user_id_cls($id){
		$sql = "SELECT * FROM `orders` WHERE `user_id`='$id'";
		return $this->db_fetch_all($sql);
	}

	function get_orders_by_status_cls($status){
		$sql = "SELECT * FROM `orders` WHERE `order_status`='$status'";
		return $this->db_fetch_all($sql);
	}

	function count_orders_by_status_cls($status){
		$sql = "SELECT * FROM `orders` WHERE `order_status`='$status'";
		return $this->db_count($sql);
	}

	function count_all_orders_cls(){
		$sql = "SELECT * FROM `orders`";
		return $this->db_count($sql);
	}



	//--UPDATE--//

	function update_order_status_cls($id, $status){
		$sql = "UPDATE `orders` SET `order_status`='$status' WHERE `order_id` = '$id'";
		return $this->db_query($sql);
	}


	//--DELETE--//


}

?>