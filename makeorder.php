<?php
/**
 * author: John Rowan
 * description: this script is called when the user makes an order from their
 *              cart. the cart is looped through and an order with selections for
 *              each product is made and entered into the database. finally the cart
 *              is set to empty and the user is redirected to the myorders page
 */
require_once "include/db.php";
require_once "include/smarty.php";

$order = R::dispense('order');
$order->user_id = $session->login->id;
$order->created_at = date("Y-m-d H:i:s", time());
foreach ($session->cart as $key => $value) {
    $product = R::findOne("product", "id=?",[$key]);
    $order->link('selection', [
              'quantity' => $value,
              'purchase_price' => $product->price
              ]
          )->product = $product;
}
R::store($order);
unset($session->cart);
header("location: myorders.php");

