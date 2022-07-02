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

class genre_class extends db_connection
{
	//--INSERT--//

    /**
     * This function insert the genre name into the genre table
     * @return bool
     */
    function insert_genre_cls($genre_name){
        $sql = "INSERT INTO `genres`(`genre_name`) VALUES ('$genre_name')";

        return $this->db_query($sql);

    }

	//--SELECT--//

    /**
     * This function gets all the genre in database
     * @return array
     */
    function select_all_genre_cls(){
        $sql = "SELECT * FROM `genres`";

        return $this->fetch_all($sql);
    }


	//--UPDATE--//



	//--DELETE--//
	

}

?>