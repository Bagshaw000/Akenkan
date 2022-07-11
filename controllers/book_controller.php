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

function insert_book_ctr($book_id,$title,$desc,$p_date,$date_added,$author,$p_id,$status, $price)
{
    try{
        $data = new book_class();
        return $data->insert_book_cls($book_id,cleanText ($title),cleanText($desc),cleanText($p_date),cleanText($date_added),cleanText($p_id),cleanText($author), $status, $price);
    }
    catch(exception $e){
        return $e;
    }
}
function join_book_genre_ctrl($id,$gen){
    $book = new book_class();
    return $book->join_book_genre_cls($id,$gen);
}
function insert_author_ctrl( $name){
    $book = new book_class();
    return $book->insert_author_cls($name);
}

function insert_publisher_ctrl( $name){
    $book = new book_class();
    return $book->insert_publisher_cls($name);
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

function count_all_books_ctrl(){
    return count(select_all_book_ctr() ?? []);
}

function get_all_publishers_ctrl(){
    $book = new book_class();
    return $book->get_all_publishers_cls();
}



function count_books_by_status_ctrl($status){
    $user = new book_class();
    return $user->count_books_by_status_cls($status);
}
function get_all_genres_ctrl(){
    $book = new book_class();
    return $book->get_all_genres_cls();
}


function get_all_authors_ctrl(){
    $book = new book_class();
    return $book->get_all_authors_cls();
}

function filter_books_by_genre_ctrl($genre){
    $book = new book_class();
    return $book->filter_books_by_genre_cls($genre);

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

function get_book_by_random_ctrl(){
    $book = new book_class();
    return $book->get_book_by_random_cls();
}

function select_all_deleted_book_ctrl(){
    $book = new book_class();
    return $book->select_all_deleted_book_cls();
}


function get_books_by_query_cls($id){
    $book = new book_class();
    return $book->get_books_by_query_cls($id);
}

function get_author_name_by_id_ctrl($id){
    $book = new book_class();
    return $book->get_author_name_by_id_cls($id)["author_name"];
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

function update_book_status_ctrl($id, $status){
    $book = new book_class();
    return $book->update_book_status_cls($id,$status);
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
        return $book->update_book_status_cls($id,"deleted");
    }catch(exception $e){
        return $e;
    }

}

function publish_book_ctrl($id){
    $book = new book_class();
    return $book->update_book_status_cls($id,"published");
}

?>