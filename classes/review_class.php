<?php
	require_once("../settings/db_class.php");

	/**
	*General class to handle all functions
	*/
	/**
	 *@author David Sampah
	 *
	 */

	class review_class extends db_connection
	{

		//--INSERT--//

		function insert_review_cls($user_id, $book_id, $rating, $comment){
			$sql = "INSERT INTO `reviews` (`user_id`, `book_id`, `num_of_stars`, `review_comment`) VALUES
			('$user_id', '$book_id', '$rating', '$comment')";
			return $this->db_query($sql);
		}



		//--SELECT--//
		function get_reviews_by_book_id_cls($id){
			$sql = "SELECT * FROM `reviews` WHERE `book_id` = '$id'";
			return $this->db_fetch_all($sql);
		}

		function get_all_reviews_cls(){
			$sql = "SELECT * FROM `reviews`";
			return $this->db_fetch_all($sql);
		}


		//--UPDATE--//

		//--DELETE--//


	}

?>