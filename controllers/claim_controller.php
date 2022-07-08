<?php

require_once("../classes/claim._classphp");


	function make_a_claim_ctrl($user_id,$message){
		$claim = new claim_class();
		return $claim->make_a_claim_cls($user_id,$message);
	}

	//--SELECT--//
	//Gets all claims filed by a user
	function get_claims_by_user_id_ctrl($id){
		$claim = new claim_class();
		return $claim->get_claims_by_user_id_cls($id);
	}

	//gets all claims that have the passed status
	function get_claims_by_status_ctrl($status){
		$claim = new claim_class();
		return $claim->get_claims_by_status_cls($status);
	}


	//Gets the claim with the matching claim id
	function get_claim_by_id_ctrl($id){
		$claim = new claim_class();
		return $claim->get_claim_by_id_cls($id);
	}

	//Retrieves all claims in the databse
	function get_all_claims_ctrl(){
		$claim = new claim_class();
		return $claim->get_all_claims_cls();
	}

	//--UPDATE--//


	//Marks a claim as open
	function open_claim_ctrl($id){
		$claim = new claim_class();
		return $claim->change_claim_status_cls($id,"opened");
	}

	//Marks a claim has adddressed(closed)
	function close_claim_ctrl($id){
		$claim = new claim_class();
		return $claim->change_claim_status_cls($id,"opened");
	}

?>