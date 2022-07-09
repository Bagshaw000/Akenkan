<?php
//connect to the user account class
require_once("../classes/book_class.php");
require_once("../functions/function_store.php");



//--INSERT--//

/**
 * This function pass the book details from the porc page to
 * the class page
 * @return bool
 * OR
 * @return error
 */

function insert_book_ctr($book_id,$title,$desc,$p_date,$date_added,$author,$p_id)
{
    try{
        $data = new book_class();
        return $data->insert_book_cls($book_id,cleanText ($title),cleanText($desc),cleanText($p_date),cleanText($date_added),cleanText($p_id),cleanText($author));
    }
    catch(exception $e){
        return $e;
    }
}


function get_all_genres_ctrl(){
    $book = new book_class();
    return $book->get_all_genres_cls();
}


function get_all_authors_ctrl(){
    $book = new book_class();
    return $book->get_all_authors_cls();
}


function get_all_publishers_ctrl(){
    $book = new book_class();
    return $book->get_all_publishers_cls();
}

function insert_author_ctrl($id, $name){
    $book = new book_class();
    return $book->insert_author_cls($id,$name);
}

function insert_publisher_ctrl($id, $name){
    $book = new book_class();
    return $book->insert_publisher_cls($id,$name);
}

function insert_genre_ctrl($name){
    $book = new book_class();
    return $book->insert_genre_cls($name);
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

//filters list of books by the passed list of genre ids delimited by +
function filter_books_by_genre_ctrl($list){
    $book = new book_class();
    $filter = "";
    //
    $genre_array = explode("+",$list);

    //concatenate each genre filter query
    foreach ($genre_array as $genre){
        $filter = $filter ." OR `genre_name` = '$genre'";
    }
    //remove the leading or operator from query string
    $filter = substr($filter,3);
    return $book->filter_books_by_genre_cls($filter);

}


function select_all_published_book_ctrl(){
    $book = new book_class();
    return $book->select_all_published_book_cls();
}


function select_book_by_id_ctrl($id){
    $book = new book_class();
    return $book->select_book_by_id_cls($id);
}

function select_all_draft_book_ctrl(){
    $book = new book_class();
    return $book->select_all_draft_book_cls();
}

function select_all_deleted_book_ctrl(){
    $book = new book_class();
    return $book->select_all_deleted_book_cls();
}


function get_books_by_publisher_ctrl($id){
    $book = new book_class();
    return $book->get_books_by_publisher_cls($id);
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

function delete_book_ctr($id){
    try{
        $book = new book_class();
        return $book->change_book_status($id,"deleted");
    }catch(exception $e){
        return $e;
    }

}

function publish_book_ctrl($id){
    $book = new book_class();
    return $book->change_book_status($id,"published");
}

?>