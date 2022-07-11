<?php
include('../controllers/order_controller.php');
include('../controllers/cart_controllers.php');
$email= $_POST['email'];
$amt=  (float)$_POST['amount'];
$ref= $_POST['ref'];
$res= $_POST['res'];
$o_stat= $_POST['o_stat'];
$bill_add = $_POST['bill_add'];
$user_id = (int)$_POST['user_id'];


$data= get_cart_by_customer_ctrl($user_id);
$id=get_last_order_ctrl();

// print_r(get_last_order_ctrl());
foreach ( $data as $item){
    create_order_items_ctrl($id['order_id'],$item['book_id'],$item['quantity']);
    remove_item_by_customer_ctrl($item['book_id'],$item['user_id']);
}

var_dump( create_order_ctrl($user_id, $ref, $bill_add, $amt, $o_stat));

// exit();
$url = "https://api.paystack.co/transaction/initialize";
$fields = [
  'email' => $email,
  'amount' =>  $amt
];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;
$curl = curl_init();
  
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/:$ref",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer SECRET_KEY",
    "Cache-Control: no-cache",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}