<?php
	require("../settings/db_class.php");

	/**
	*General class to handle all functions
	*/
	/**
	 *@author David Sampah
	 *
	 */

	class claim_class extends db_connection
	{

		//--INSERT--//

		//Creates  a new claim record in the databse
		function make_a_claim_cls($user_id,$message){
			$sql = "INSERT INTO `claims` (`user_id`, `message`) VALUES ('$user_id','$message')";
			return $this->db_query($sql);
		}

		//--SELECT--//
		//Gets all claims filed by a user
		function get_claims_by_user_id_cls($id){
			$sql = "SELECT * FROM `claims` WHERE `user_id` = '$id'";
			return $this->db_fetch_all($sql);
		}

		//gets all claims that have the passed status
		function get_claims_by_status_cls($status){
			$sql = "SELECT * FROM `claims` WHERE `claim_status` = '$status'";
			return $this->db_fetch_all($sql);
		}

		//Gets the claim with the matching claim id
		function get_claim_by_id_cls($id){
			$sql = "SELECT * FROM `claims` WHERE `claim_id` = '$id'";
			return $this->db_fetch_one($sql);
		}

		//Retrieves all claims in the databse
		function get_all_claims_cls(){
			$sql = "SELECT * FROM `claims` ";
			return $this->db_fetch_all($sql);
		}

		//--UPDATE--//

		//Changes the status of a claim to the passed status
		function change_claim_status_cls($id, $status){
			$sql = "UPDATE `claims` SET `claim_status` ='$status' WHERE `claim_id`='$id'";
			return $this->db_query($sql);
		}


		//--DELETE--//


	}

?>