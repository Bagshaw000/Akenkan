<?php
//connect to the user account class
include("../classes/book_genre_class.php");

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
 * This function gets the data from the proc page and pass
 * it to the insert book class
 * @return bool
 * OR
 * @return error
 */
function insert_book_genre_ctr($book_id,$genre_id,$b_genre_perm){
    try{
    $data = new book_genre_class();
    return $data-> insert_book_genre_cls(cleanText($book_id),cleanText($genre_id),cleanText($b_genre_perm));
    }catch(exception $e){
        return $e;
    }
}

//--SELECT--//
/**
 * This function get all the booke from a particualr genre
 * @return array
 * OR
 * @return error
 */
function select_all_book_genre_ctr($genre_id){
    try {
        $data = new book_genre_class();
        return $data->select_all_book_genre_cls(cleanText($genre_id));
    } catch (exception $e) {
        return  $e;
    }
}
//--UPDATE--//
/**
 * This function get the data to be updated and
 * pass it to the class
 * @return bool
 * OR
 * @return error
 */
function update_book_genre_ctr($book_id,$genre_id){
    try {
        $data = new book_genre_class();
        return $data->update_book_genre_cls(cleanText($book_id),cleanText($genre_id));
    } catch (exception $e) {
        return $e;
    }
}

//--DELETE--//
/**
 * This function get the data to be deleted and pass it
 * it to the book genre class
 * @return bool
 * OR
 * @return error
 */

function delete_book_from_genre_ctr($book_id){
    try {
        $data = new book_genre_class();
        return $data->delete_book_from_genre_cls(cleanText($book_id));
    } catch (exception $e) {
        return $e;
    }

}

?>