<?php
include('../controllers/cart_controllers.php');
$u_id=(int) $_POST['uid'];
$p_id= $_POST['pid'];





remove_item_by_customer_ctrl($p_id,$u_id);
echo("Removed succesfull");
?>