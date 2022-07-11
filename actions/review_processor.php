<?php
require_once("../controllers/review_controller.php");
	$user_id = $_POST["user_id"];
	$book_id = $_POST["book_id"];
	$stars = $_POST["stars"];
	$comment = $_POST["comment"];


	insert_review_ctrl($user_id,$book_id,$stars,$comment);

	header("Location: ../web/single.php?id=".$book_id);
?>