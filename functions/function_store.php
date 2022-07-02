<?php

/**
 * This function hashes the users password 
 * @return string
 */
function hash_pass($password){

    return password_hash($password, PASSWORD_DEFAULT);

}

/**
 * This function verifies the password of the user
 * @return bool
 */
function verify_pass($hashed_pass, $password){

    return password_verify( $password, $hashed_pass);

}
?>