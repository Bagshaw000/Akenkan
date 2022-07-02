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

class book_class extends db_connection
{
	//--INSERT--//

    /**
     * This function insert the book details in the database
     * @return bool
     */
    function insert_book_cls($book_id,$title,$desc,$p_date,$date_added,$b_perm,$p_id){
        $sql = "INSERT INTO `books`(`book_id`, `title`, `description`, `publish_date`, `date_added`, `b_perm`, `publisher_id`)
         VALUES ('$book_id','$title','$desc','$p_date','$date_added','$b_perm','$p_id')";

         return $this->db_query($sql);
    }
	

	//--SELECT--//

    /**
     * This function selects all the books that have not been deleted in the database
     * @return array
     */
    function select_all_book_cls(){
        $sql = "SELECT * FROM `books` WHERE `b_perm`=1";

        return $this->db_fetch_all($sql);
    }


	//--UPDATE--//

    /**
     * This function update the book details in the database 
     * @return bool
     */
    function update_book_cls($book_id,$title,$desc,$p_date,$date_added,$b_perm,$p_id){
        $sql = "UPDATE `books` SET 
        `book_id`='$book_id',`title`='$title',`description`='$desc',`publish_date`='$p_date',`date_added`='$date_added',`b_perm`='$b_perm',`publisher_id`='$p_id'";

        return $this->db_query($sql);
    }


	//--DELETE--//
    /**
     * This function update the permision of any book to simulate the delete process
     * @return bool
     */
    function delete_book_cls($book_id,$perm){
        $sql = "UPDATE `books` SET `b_perm`='$b_perm' WHERE `book_id`='$book_id'";

        return $this->db_query($sql);

    }
	

}

?>