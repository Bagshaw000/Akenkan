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

class publisher_class extends db_connection
{
	//--INSERT--//
    /**
     * The function insert the publisher into the database
     * @return bool
     * OR 
     * @return error
     */

    function insert_pub_cls($pub_name){
        try{
        $sql = "INSERT INTO `publisher`(`publisher_name`,`pub_perm`) VALUES ('$pub_name',1)";

        return $this->db_query($sql);
        }catch(exception $e){
            return $e;
        }
    }
	

	//--SELECT--//



	//--UPDATE--//

    /**
     * This function updates the publisher name in the database
     * @return bool 
     * OR
     * @return error
     */
    function update_pub_cls($pub_name,$pub_id){
        try{
            $sql = "UPDATE `publisher` SET ,`publisher_name`='$pub_name' WHERE `publisher_id`='$pub_id'";

            return $this->db_query($sql);}
        catch(exception $e){
            return $e;
        }
    }



	//--DELETE--//
    /**
     * This function update the publisher permission to simulate the delete function
     * @return bool
     * OR 
     * @return error
     */

    function delete_pub_cls($pub_name){

        try{
            $sql = "UPDATE `publisher` SET `publisher_name`='$pub_name' WHERE `pub_perm`=2";

            return $this->db_query($sql);}
        catch(exception $e){
            return $e;
       }
    }
	

}

?>