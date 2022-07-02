<?php
//connect to the user account class
include("../classes/users_class.php");
include("../functions/function_store.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
/**
 * The function pass the data from the proc page to the user class
 * and insert the user into the database
 * @return bool
 */
function insert_user_ctr($email, $password, $name,$role){
    $data = new user_class();
    $hashed_pas= hash_pass($password);

    return $data->insert_user_cls(cleanText($email), cleanText($hashed_pas), cleanText($name,$role));
}

//--SELECT--//

/**
 * The function pass the data from the proc page to the user class
 * and selects the user with that email and check if the user exists
 * @return bool
 */
function select_user_ctr($email){
    $data = new user_class();
    $user_data=$data->select_user_cls(cleanText($email));
    if (empty($user_data)){
        return false;
    }else{
        return $user_data;
    };
}

//--UPDATE--//

//--DELETE--//

?>