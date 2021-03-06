<?php
/**
 * author: John Rowan
 * description: this is the controller for showproduct view. it gets product and
 *              quantity as well as the src for the products image and sends them to
 *              the view.
 */
require_once "include/db.php";
require_once "include/smarty.php";
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');

$product_id = filter_input(INPUT_GET, 'product_id');

$product = R::load('product', $product_id);

$quantity = '';
if (isset($session->cart[$product_id])) {
  $quantity = $session->cart[$product_id];
}

$image_src = "products/{$product->photo_file}";

$data = [
    'product' => $product,
    'quantity' => $quantity,
    'image_src' => $image_src,
];
$smarty->assign($data);
$smarty->display("showProduct.tpl");
