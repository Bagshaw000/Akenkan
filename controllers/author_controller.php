<?php
//connect to the user account class
include("../classes/author_class.php");

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
 * This function calls the insert author class and pass the the data from the proc page
 * @return bool 
 * OR
 * @return error 
 */

function insert_author_ctr($author_name){
    try{
    $data = new user_class();

    return  $data->insert_author_cls(cleanText($author_name));
    }
    catch(exception $e){
        return $e->getMessage();
    }
}

//--SELECT--//
/**
 * This function calls the search author class and pass the author name from the proc page 
 * @return array
 * OR
 * @return error
 */

function search_author_ctr($author_name){
    try{

        $data = new user_class();
        return $data->search_author_cls(cleanText($author_name));
    }
    catch(exception $e){
        return $e->getMessage();
    }
}

//--UPDATE--//

//--DELETE--//

?>