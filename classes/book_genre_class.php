<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class book_genre_class extends db_connection
{
	//--INSERT--//
    /**
     * This function insert the book genre
     * @return bool
     */
	
    function insert_book_genre_cls($book_id,$genre_id,$b_genre_perm){
        $sql ="INSERT INTO `book_genres`(`book_id`, `genre_id`,`b_genre_perm`) VALUES ('$book_id','$genre_id','$b_genre_perm')";

        return $this->db_query($sql);
    }

	//--SELECT--//

    /**
     * This function select all the books by genre
     * @return array 
     */
    function select_all_book_genre_cls($genre_id){
        $sql="SELECT * FROM `book_genres` WHERE `genre_id`='$genre_id'";

        return $this->fetch_all($sql);
    }





	//--UPDATE--//

    /**
     * This function update the genre of a book
     * @return bool
     */
    function update_book_genre_cls($book_id,$genre_id){
        $sql ="UPDATE `book_genres` SET `genre_id`='$genre_id' WHERE `book_id`='$book_id'";

        return $this->db_query($sql);
    }



	//--DELETE--//
	/**
     * This function update the book permission
     * @return bool
     */
    function delete_book_from_genre_cls($book_id){
        $sql = "UPDATE `book_genres` SET `b_genre_perm`=2 WHERE `book_id`='$book_id'";

        return $this->db_query($sql);

    }
}

?>