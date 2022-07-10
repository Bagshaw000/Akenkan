<?php
	require_once("../settings/core.php");
	require_once("../controllers/user_controller.php");
	//if the action is to create an account, obtain
	//username, email and password

	// var_dump($_POST);

	//USER AUTH
	if ($_POST["action"]=="sign_up"){ // create account
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$response = insert_user_ctr($email, $password, $username,1);

		if ($response){ // if login was successful, save session and go to login page
			// $user = select_user_ctr($email);

			// sign_in_session_user($user["user_id"], $user["role"]);
			// header("Location: ../views/login.php");
			echo "Sign up successful";

		} else {
			echo "The email is already in use";
		}
	} else if ($_POST["action"]=="log_in"){ // log in
		$email = $_POST["email"];
		$password = $_POST["password"];//encrypt password
		$response = sign_in_user_ctrl($email, $password);
		// var_dump($response);
		// return $response;
		if ($response){ // sign in was successful
			//save login session
			sign_in_session_user($response["user_id"], $response["role"]);
			echo "Login successful";
		} else {//sign in failed
			echo "The email & password combination is wrong. Try again";
		}


	} else if ($_POST["action"]=="log_out"){
		sign_out_session();
		echo "Successfully signed you out";
	} else {
		echo "Unsupported call";
	}
?>