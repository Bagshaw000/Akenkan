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

class user_class extends db_connection
{

	//--INSERT--//
	function insert_user_cls($email, $password, $name,$role){
        $sql = "INSERT INTO users (`email`, `password`, `display_name`,`role`) 
        VALUES ('$email','$password','$name','$role')";

        return $this->db_query_escape_string($sql);
    }

	//--SELECT--//

    function select_user_cls($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";

        return $this->db_fetch_one($sql);
    }


	//--UPDATE--//



	//--DELETE--//
	

}

?>