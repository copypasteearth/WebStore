<?php
/**
 * author: John Rowan
 * description: controller for the view that displays all orders. this controller
 *              gets all orders from database and the user associated with each order
 */
require_once "include/db.php";
require_once "include/smarty.php";
$orders = R::findAll('order');
foreach($orders as $order){
    $user = R::findOne('user','id=?',[$order->user_id]);
    $order->name = $user->name;
}


$data = [
  'orders' => $orders
];
$smarty->assign( $data );
$smarty->display("allorders.tpl");
