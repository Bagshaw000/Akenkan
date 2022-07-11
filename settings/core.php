<?php
//start session
session_start();

//for header redirection
ob_start();


//Creates a session to log in the user
function sign_in_session_user($id, $role){
	$_SESSION["role"] = $role;
	$_SESSION["user_id"] = $id;
}


//Returns a boolean to represent the user sign in status
function is_user_signed_in(){
	return isset($_SESSION["role"]) && isset($_SESSION["user_id"]);
}

//Returns the user's ip address
function get_user_ip(){
	return $_SERVER["REMOTE_ADDR"];
}

//Signs out the user from sesson
function sign_out_session(){
	unset($_SESSION["role"]);
	unset($_SESSION["user_id"]);
}

//Returns the signed in user's id
function get_session_user_id(){
	if (isset($_SESSION["user_id"])){
		return $_SESSION["user_id"];
	}
	return "";
}


//Returns boolean representing whether a user
// is an admin or not
function is_session_user_admin(){
	return $_SESSION["role"] == "admin";
}


//function to get user ID


//function to check for role (admin, customer, etc)



?>