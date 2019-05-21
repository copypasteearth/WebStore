<?php
/**
 * author: John Rowan
 * description: this is the controller file for the orderdetails page
 */
require_once "include/smarty.php";
require_once "include/db.php";

//order id from get
$order_id = filter_input(INPUT_GET, 'order_id');
//if process button is clicked this will exist
$process = filter_input(INPUT_GET, 'process');
//get all the selection details of an order
$selection = R::findAll('selection', 'order_id=?', [$order_id]);
//total price
$total_price = 0;
//order info sent to view
$order_info = [];
$username = "";
$useremail = "";
//boolean for if process button is clicked
$clickedprocess = false;
//if process is clicked set session message to press again set boolean to true
if(!is_null($process)){
    $clickedprocess = true;
    $session->confirm = 'confirm';
    $session->message = "Press Process Again.";
}
//if admin user getting username and email
if($session->login && $session->login->is_admin){
    $order = R::findOne("order", 'id=?',[$order_id]);
    $user = R::findOne('user', 'id=?', [$order->user_id]);
    $username = $user->name;
    $useremail = $user->email;
}
//setting all of the order_info variable to send to view
foreach($selection as $select){
   $product = R::findOne("product", "id=?",[$select->product_id]);
   $category = R::findOne("category", "id=?",[$product->category_id]);
   $cat_name = $category->name;
   $quantity = $select->quantity;
   $name = $product->name;
   $id = $product->id;
   $purchase_price = $select->purchase_price;
   $subtotal = $purchase_price * $quantity;
   $total_price += $subtotal;
   $order_info[$id] = [
        'id' => $id,
        'name' => $name,
        'category' => $cat_name,
        'price' => $purchase_price,
        'quantity' => $quantity,
       'subtotal' => $subtotal     
    ];
}

$data = [
  'order_id' => $order_id,
    'order_info' => $order_info,
    'total_price' => $total_price,
    'user_name' => $username,
    'user_email'=> $useremail,
    'clickedprocess' => $clickedprocess
        
        
];
$smarty->assign( $data );
$smarty->display("orderdetails.tpl");


