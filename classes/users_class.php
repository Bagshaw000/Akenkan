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

    //Signs up a user as a buyer
    function create_user_cls($email,$password,$name){
        $sql = "INSERT INTO users (`email`, `password`, `display_name`)
        VALUES ('$email','$password','$name','user')";
        return $this->db_query($sql);
    }

	//--SELECT--//

    //Retrieves information about the user with the passed id
    function get_user_by_id_cls($id){
        $sql = "SELECT * FROM `users` WHERE `user_id`=$id";
        return $this->db_fetch_one($sql);
    }




    // function select_user_cls($email){
    //     $sql = "SELECT * FROM users WHERE email = '$email'";

    //     return $this->db_fetch_one($sql);
    // }



	//--UPDATE--//

    function change_account_status($id, $status){
        $sql = "UPDATE `users` SET `account_status`='$status' WHERE `user_id` = '$id'";
        return $this->db_query($sql);

    }



	//--DELETE--//


}

?>