<?php
	require_once("../classes/review_class.php");

	function insert_review_ctrl($user_id, $book_id, $rating, $comment){
		$review = new review_class();
		return $review->insert_review_cls($user_id, $book_id, $rating, $comment);
	}

	function get_all_reviews_ctrl(){
		$review = new review_class();
		return $review->get_all_reviews_cls();
	}


	//--SELECT--//
	function get_reviews_by_book_id_ctrl($id){
		$review = new review_class();
		return $review->get_reviews_by_book_id_cls($id);
	}
?>