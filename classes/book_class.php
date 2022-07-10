<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*General class to handle all functions
*/
/**
 *@author David Sampah
 *
 */

class book_class extends db_connection
{
	//--INSERT--//

    /**
     * This function insert the book details in the database
     * @return bool
     */
    function insert_book_cls($book_id,$title,$desc,$p_date,$date_added,$p_id, $author, $status, $price){
        $sql = "INSERT INTO `books`(`book_id`, `title`, `description`, `publish_date`, `date_added`, `publisher_id`, `author_id`, `book_status`, `price`)
         VALUES ('$book_id','$title','$desc','$p_date','$date_added','$p_id', '$author', '$status', '$price')";

         return $this->db_query($sql);
    }


    function join_book_genre_cls($book_id, $genre){
        $sql = "INSERT INTO `book_genres` (`book_id`,`genre_name`) VALUE ('$book_id','$genre')";
        return $this->db_query($sql);
    }


    function insert_author_cls( $name){
        $sql = "INSERT INTO `author` (`author_name`) VALUES ( '$name')";
        return $this->db_query($sql);
    }

    function insert_publisher_cls($name){
        $sql = "INSERT INTO `publisher` (`publisher_name`) VALUES ( '$name')";
        return $this->db_query($sql);
    }

    function insert_genre_cls( $name){
        $sql = "INSERT INTO `genres` (`genre_name`) VALUES ( '$name')";
        return $this->db_query($sql);
    }



	//--SELECT--//

    /**
     * This function selects all the books that have not been deleted in the database
     * @return array
     */
    function select_all_book_cls(){
        $sql = "SELECT * FROM `books`";
        return $this->db_fetch_all($sql);
    }



    function get_all_genres_cls(){
        $sql = "SELECT * FROM `genres`";
        return $this->db_fetch_all($sql);
    }


    function get_all_authors_cls(){
        $sql = "SELECT * FROM `author`";
        return $this->db_fetch_all($sql);
    }


    function get_all_publishers_cls(){
        $sql = "SELECT * FROM `publisher`";
        return $this->db_fetch_all($sql);
    }


    function select_all_published_book_cls(){
        $sql = "SELECT * FROM `books` WHERE `book_status`='published'";
        return $this->db_fetch_all($sql);
    }

    function select_book_by_id_cls($id){
        $sql = "SELECT * FROM `books` WHERE `book_id` = '$id'";
        return $this->db_fetch_one($sql);
    }


    function select_all_draft_book_cls(){
        $sql = "SELECT * FROM `books` WHERE `book_status`='draft'";
        return $this->db_fetch_all($sql);
    }

    function select_all_deleted_book_cls(){
        $sql = "SELECT * FROM `books` WHERE `book_status`='deleted'";
        return $this->db_fetch_all($sql);
    }


    function get_books_by_publisher_cls($id){
        $sql = "SELECT * FROM `books` WHERE `publisher_id`='$id'";
        return $this->db_fetch_all($sql);
    }

    function get_author_name_by_id_cls($id){
        $sql = "SELECT `author_name` FROM `author` WHERE `author_id`='$id'";
        return $this->db_fetch_one($sql);
    }


    function filter_books_by_genre_cls($filters){
        $sql = "SELECT * FROM `books` WHERE $filters";
        return $this->db_fetch_all($sql);
    }


	//--UPDATE--//

    /**
     * This function update the book details in the database
     * @return bool
     */
    function update_book_cls($book_id,$title,$desc,$p_date,$date_added,$p_id){
        $sql = "UPDATE `books` SET
        `book_id`='$book_id',`title`='$title',`description`='$desc',`publish_date`='$p_date',`date_added`='$date_added',`publisher_id`='$p_id'";
        return $this->db_query($sql);
    }


	//--DELETE--//
    /**
     * This function update the status of books with the passed id
     * @return bool
     */
    function update_book_status_cls($book_id,$status){
        $sql = "UPDATE `books` SET `book_status`='$status' WHERE `book_id`='$book_id'";
        return $this->db_query($sql);
    }


}

?>