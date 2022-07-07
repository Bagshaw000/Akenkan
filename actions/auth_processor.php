<?php
	require_once("../settings/core.php");
	require_once("../controllers/user_controller.php");
	//if the action is to create an account, obtain
	//username, email and password

	if ($_POST["action"]=="sign_up"){ // create account
		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$response = insert_user_ctr($email, $password, $username,1);

		if ($response){ // if login was successful, save session and go to login page
			$user = select_user_ctr($email);

			sign_in_session_user($user["user_id"], $user["role"]);
			// header("Location: ../views/login.php");
			return "Sign In successful";

		}
			return "The email is already in use";
	} else if ($_POST["action"]=="log_in"){ // log in
		$email = $_POST["email"];
		$password = $_POST["password"];//encrypt password
		$response = sign_in_user_ctrl($email, $password);
		return $response;
		if ($response){ // sign in was successful
			//save login session
			sign_in_session_user($response["user_id"], $response["role"]);
			return "Login successful";
		} else {//sign in failed
			return "The email & password combination is wrong. Try again";
		}
	}
?>