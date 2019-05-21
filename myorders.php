<?php
/**
 * author: John Rowan
 * description: this is the controller script for the my orders view. it gets all
 * of the orders from the database that belong to the user id which is stored in
 * the session->login->id variable
 */
require_once "include/smarty.php";
require_once "include/db.php";

$orders = R::findAll('order', 'user_id=?', [$session->login->id]);

$data = [
  'orders' => $orders
];
$smarty->assign( $data );
$smarty->display("myorders.tpl");
