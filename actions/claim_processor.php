<?php
	require_once("../controllers/claim_controller.php");
	require_once("../settings/core.php");

	if (isset($_POST["message"])){
		$message = $_POST["message"];
		$success = make_a_claim_ctrl(get_session_user_id(), $message);
		header("Location: ../web/index.php");
	}else {
		$status = $_POST["status"];
		$id = $_POST["id"];
		if ($status == "closed"){
			 close_claim_ctrl($id);
		} else {
			 open_claim_ctrl($id);
		}
		echo "Success";
	}

?>