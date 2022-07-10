<?php
	require_once("../controllers//book_controller.php");


	if(!isset($_POST["action"])){
		echo "Missing action paramter";
	} else if ($_POST["action"]=="add_author"){
		$name = $_POST["name"];

		$success = insert_author_ctrl($name);
		if ($success){
			echo "Added author: $name";
		} else {
			echo "Couldn't add author. Try again";
		}
	} else if ($_POST["action"]=="add_publisher"){
		$name = $_POST["name"];

		$success = insert_publisher_ctrl($name);
		if ($success){
			echo "Added publisher: $name";
		} else {
			echo "Couldn't add publisher. Try again";
		}
	} else if ($_POST["action"]=="add_genre"){
		$name = $_POST["name"];

		$success = insert_genre_ctrl($name);
		if ($success){
			echo "Added Genre: $name";
		} else {
			echo "Couldn't add genre. It might already exist";
		}
	} else if ($_POST["action"]=="add_book"){
		$id = $_POST["id"];
		$name = $_POST["title"];
		$description = $_POST["description"];
		$publish_date = $_POST["publish_date"];
		$status = $_POST["status"];
		$author = $_POST["author"];
		$genre = $_POST["genre"];
		$publisher = $_POST["publisher"];
		$date = date('Y-m-d');
		$image = null;

		$success = insert_book_ctr($id,$name,$description,$publish_date,$date,$author,$publisher,$status);
		if ($success){
			echo "Added Book: $name";
		} else {
			echo "Couldn't add genre. It might already exist";
		}
	} else {
		echo "Unsupported Action";
	}
?>