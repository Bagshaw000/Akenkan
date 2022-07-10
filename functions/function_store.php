<?php

/**
 * This function hashes the users password
 * @return string
 */
function hash_pass($password){
    return md5($password);
    // return password_hash($password, PASSWORD_DEFAULT);

}

/**
 * This function verifies the password of the user
 * @return bool
 */
function verify_pass($hashed_pass, $password){
    return $hashed_pass == md5($password);
    // return password_verify( $password, $hashed_pass);

}


//Removes white space from passed strings
function cleanText($data){
    $data = trim($data);
    //$data = stripslashes($data);
    //$data = htmlspecialchars($data);
    return $data;
  }
?>