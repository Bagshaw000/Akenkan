<?php
	require_once("../controllers/book_controller.php");

	print_r( $_FILES);

	if(isset($_FILES)){
		print_r( $_FILES);
		$image = $_FILES["tmp_name"];
		$path = "../images/uploads/";
		$destination = $path.$image['name'];

		//creating the directory if it does not exist
		if (!file_exists($path)) {
			 mkdir($path, 0777, true);
		}
		//move uploaded image to destination
		$success = copy($image['tmp_name'], $destination);

		if (!$success){
			echo "upload failed";
		}
		echo $destination;
	echo "upload";
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
		$price = $_POST["price"];
		$description = $_POST["description"];
		$publish_date = $_POST["publish_date"];
		$status = $_POST["status"];
		$author = $_POST["author"];
		$genre = $_POST["genre"];
		$publisher = $_POST["publisher"];
		$date = date('Y-m-d');
		$image = null;

		$success = insert_book_ctr($id,$name,$description,$publish_date,$date,$author,$publisher,$status,$price);
		join_book_genre_ctrl($id,$genre);
		if ($success){
			echo "Added Book: $name";
		} else {
			echo "Couldn't add Book. It might already exist";
		}
	} else if ($_POST["action"]=='get_genre'){
		// print_r (get_book_genre_ctrl($_POST["id"]));
		echo json_encode(get_book_genre_ctrl($_POST["id"]));

	} else if ($_POST["action"]=="update_book"){
		$id = $_POST["id"];
		$name = $_POST["title"];
		$price = $_POST["price"];
		$description = $_POST["description"];
		$publish_date = $_POST["publish_date"];
		$status = $_POST["status"];
		$author = $_POST["author"];
		$genre = $_POST["genre"];
		$publisher = $_POST["publisher"];
		// $date = date('Y-m-d');
		$image = null;

		$success = update_book_ctrl($id, $name,$description, $publish_date,$status,$price, $publisher);
		echo $success;
		// join_book_genre_ctrl($id,$genre);
		if ($success){
			echo "Updated Book: $name";
		} else {
			echo "Couldn't update Book. Try again";
		}
	} else if ($_POST["action"]=="update_status"){
		$id = explode("_",$_POST["id"])[1];
		$status = $_POST["status"];
		$succes = update_book_status_ctrl($id,$status);
		if ($succes){
			echo "Status updated";
		} else {
			echo "Status change failed";
		}
	}else if ($_POST["action"]=="get_book"){
		echo json_encode( select_book_by_id_ctrl($_POST["id"]));
	}else {
		echo "Unsupported Action";
	}
?>