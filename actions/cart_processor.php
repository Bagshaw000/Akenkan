<?php
include('../controllers/cart_controllers.php');
$u_id=(int) $_POST['uid'];
$ip= $_POST['ip'];

$b_id = $_POST['book_id'];

$qty= (int) $_POST['qty'];

// echo($b_id);

add_to_cart_signed_in_ctrl($b_id, $u_id, $qty, $ip);

echo('Added Successfully');
?>