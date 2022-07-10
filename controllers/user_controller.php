<?php
//connect to the user account class
require_once("../classes/users_class.php");
require_once("../functions/function_store.php");

//sanitize data



//--INSERT--//
/**
 * The function pass the data from the proc page to the user class
 * and insert the user into the database
 * @return bool
 */
function insert_user_ctr($email, $password, $name,$role){
    $data = new user_class();
    $hashed_pas= md5($password);

    return $data->create_user_cls(cleanText($email), $hashed_pas, cleanText($name));
}

//--SELECT--//

/**
 * The function pass the data from the proc page to the user class
 * and selects the user with that email and check if the user exists
 * @return bool
 */

function select_user_ctr($email){
    $data = new user_class();
    $user_data=$data->get_user_by_id_cls(cleanText($email));
    return $user_data;
    if (empty($user_data)){
        return false;
    }else{
        return $user_data;
    };
}


//Authenticates a user's email and password, returning
//information if successful and false otherwise
function sign_in_user_ctrl($email, $password) {
    $user = new user_class();
    return $user->sign_in_user_cls($email, md5($password));

}

//--UPDATE--//

//Marks a user account as suspended
function suspend_user_account_ctrl($id){
    $user = new user_class();
    return $user->change_account_status($id, "suspended");
}


//Marks a user account as deleted
function delete_user_account_ctrl($id){
    $user = new user_class();
    return $user->change_account_status($id, "deleted");
}


//Marks a user account as active
function activate_user_account_ctrl($id){
    $user = new user_class();
    return $user->change_account_status($id, "active");
}

function get_user_count_ctrl(){
    $user = new user_class();
    return $user->get_user_count_cls();
}

function get_user_name_by_id_ctrl($id){
    $user = new user_class();
    return $user->get_user_name_by_id_cls($id)["display_name"];
}

//--DELETE--//
?>