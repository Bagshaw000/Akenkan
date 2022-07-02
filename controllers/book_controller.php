<?php
//connect to the user account class
include("../classes/book_class.php");

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
 * This function pass the book details from the porc page to 
 * the class page
 * @return bool
 * OR
 * @return error
 */

function insert_book_ctr($book_id,$title,$desc,$p_date,$date_added,$b_perm,$p_id)
{
    try{
        $data = new book_class();
        return $data->insert_book_cls($book_id,cleanText ($title),cleanText($desc),cleanText($p_date),cleanText($date_added),cleanText($b_perm),cleanText($p_id));
    }
    catch(exception $e){
        return $e;
    }
    

}

//--SELECT--//
/**
 * This function selects all the books that have not been deleted
 * @return array
 * OR
 * @return error
 */

function select_all_book_ctr(){
    try{
        $data = new book_class();
        return $data->select_all_book_cls();

    }catch(exception $e){
        return $e;
    }
}

//--UPDATE--//
/**
 * This function take the info to be updated from the proc page and passs it 
 * to the class page
 * @return bool
 * OR
 * @return error
 */

function update_book_ctr($book_id,$title,$desc,$p_date,$date_added,$b_perm,$p_id){
    try{  
            $data = new book_class();
            return  $data->update_book_cls(cleanText($book_id),cleanText($title),cleanText($desc),cleanText($p_date),cleanText($date_added),cleanText($b_perm),cleanText($p_id));}
    catch(exception $e){
            return $e;

        }
}

//--DELETE--//
/**
 * This function take the data to be deleted and updates the permission
 * @return bool
 * OR
 * @return error
 */

function delete_book_ctr($book_id,$perm){
    try{
        $data = new book_class();
        return $data->delete_book_cls(cleanText($book_id),cleanText($perm));
    }catch(exception $e){
        return $e;
    }

}

?>