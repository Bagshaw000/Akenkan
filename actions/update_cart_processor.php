<?php
include('../controllers/cart_controllers.php');
$u_id=(int) $_POST['uid'];
$p_id= $_POST['pid'];
$qty=(int) $_POST['qty'];
$ip= $_POST['ip'];

update_cart_ctrl($p_id, $u_id, $qty, $ip);

echo ('Updated Successfully');