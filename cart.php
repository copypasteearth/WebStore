<?php
/**
 * author: John Rowan
 * description: this is the controller for the cart view.
 */
require_once "include/smarty.php";
require_once "include/db.php";

//total price, adds up all products in cart
$total_price = 0;
//cart info stores all of the products and details returned to view
$cart_info = [];
//if the cart is not set set cart to empty array
if (!isset($session->cart)) { 
  $session->cart = [];
}
/**
 * loop through the cart and get each product from database and also get the category.
 * set the details in the $cart_info array to return to the view
 */
foreach ($session->cart as $key => $value) {
    $id = $key;
    $product = R::findOne("product", "id=?",[$key]);
    $category = R::findOne("category", "id=?",[$product->category_id]);
    $cat_name = $category->name;
    $quantity = $value;
    $name = $product->name;
    $price = $product->price;
    $cart_info[$id] = [
        'id' => $id,
        'name' => $name,
        'category' => $cat_name,
        'price' => $price,
        'quantity' => $quantity
    ];
    $total_price += $price * $quantity;
    echo "<script>console.log( 'Debug Objects: " . $product . "' );</script>";
}

$data = [
    'cart_info' => $cart_info,
    'total_price' => $total_price,
];
$smarty->assign($data);
$smarty->display("cart.tpl");
