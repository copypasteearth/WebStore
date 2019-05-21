<?php
/**
 * author: John Rowan
 * description: this is called when the user clicks on any button in the showproduct view
 *              either they will click cancel, remove, or set
 */
require_once 'include/session.php';
//if set button is clicked this will exist
$set = filter_input(INPUT_GET, 'set');
//if cancel button is clicked this will exist
$cancel = filter_input(INPUT_GET, 'cancel');
//if remove button is clicked this will exist
$remove = filter_input(INPUT_GET, 'remove');
//quantity input feild
$quantity = filter_input(INPUT_GET, 'quantity');
//hidden is the id of the product set in a hidden input feild
$hidden = filter_input(INPUT_GET, 'hidden');

//if cancel is clicked user will be redirected to home page
if(!is_null($cancel)){
    header("location: .");
    exit();
}
//if set is clicked session cart is updated with quantity and id and
//user is relocated to the cart
if(!is_null($set)){
    $session->cart[$hidden] = $quantity;
    header("location: cart.php");
    exit();
}
//if user clicks remove from cart the item is removed from session cart and
//user is reirected to the cart
if(!is_null($remove)){
   unset($session->cart[$hidden]);
   header("location: cart.php");
   exit();
}

