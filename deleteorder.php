<?php
/**
 * author: John Rowan
 * description: this is a script that is posted to and it deletes and order and
 *              corresponding selections and redirects to allorders called from
 *              the admin console to process orders
 */
require_once "include/smarty.php";
require_once "include/db.php";

$cancel = filter_input(INPUT_GET, 'cancel');
$order_id = filter_input(INPUT_GET,'idhid');
$confirm = filter_input(INPUT_GET,'confirm');
$selection = R::findAll('selection', 'order_id=?', [$order_id]);
//total price
$total_price = 0;
//order info sent to view
$order_info = [];
$username = "";
$useremail = "";
if(!is_null($cancel)){
    header("location: allorders.php");
    exit();
}
if(is_null($confirm)){
    $session->confirm = 1;
    $session->message = "Press Process Again.";
    header("location: orderdetails.php?order_id=".$order_id);
    exit();
}
if(!is_null($confirm)){
    $selection = R::findAll('selection', 'order_id=?', [$order_id]);
    foreach ($selection as $sel) {
        R::trash($sel);
    }
    $order = R::findOne('order', 'id=?', [$order_id]);
    R::trash($order);
    $session->message = "Order #".$order_id." successfully processed";
    header("location: allorders.php");
    exit();
}
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
    'user_email'=> $useremail
    //'clickedprocess' => $clickedprocess
        
        
];
$smarty->assign( $data );
$smarty->display("orderdetails.tpl");


