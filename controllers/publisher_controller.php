<?php
//connect to the user account class
include("../classes/publisher_class.php");

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
 * This function pass the data from the proc page to the insert publisher
 * class 
 * @return bool
 * OR
 * @return error
 */
function insert_pub_ctr($pub_name){
    try{
        $data= new publisher_class();
        return $data->insert_pub_cls(cleanText($pub_name));
    }catch(exception $e){
        return $e;
    }
}

//--SELECT--//

//--UPDATE--//

/**
 * This function pass the data to the update publisher class
 * @return bool
 * OR
 * @return error
 */

function update_pub_ctr($pub_name,$pub_id){
    try{
        $data= new publisher_class();
        return $data->update_pub_cls(cleanText($pub_name),cleanText($pub_id));
    }
    catch(exception $e){
        return $e;
    }
}

//--DELETE--//
/**
 * This function take the data to be deleted and passes into the 
 * to the delete class
 * @return bool
 * OR
 * @return error
 */
function delete_pub_ctr($pub_name){
    try{
        $data= new publisher_class();
        return $data->delete_pub_cls($pub_name); 
    }
    catch(exception $e){
        return $e;
    }
}

?>