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

class author_class extends db_connection
{
	//--INSERT--//

    /**
     * This function insert the author into the database
     * @return bool
     */
    function insert_author_cls($author_name){
        $sql = "INSERT INTO author (`author_name`) VALUES('$author_name') ";

        return $this->db_query($sql);
    }
	

	//--SELECT--//

    /**
     * This function takes the author name and return an array of 
     * results that match the author name
     * @return array
     */
    function search_author_cls($author_name){
        $sql = "SELECT * FROM author WHERE `author_name` LIKE '%$author_name%'";
        
        return $this->db_query($sql);
    }

	//--UPDATE--//



	//--DELETE--//
	

}

?>