<?php
/**
 * author: John Rowan
 * description: this is the controller for loggin in view
 */
require_once "include/smarty.php";

if (isset($session->login)) {
  header("location: .");
  exit();
}

// username is flash memory
$username = $session->username;
unset($session->username);

$data = [
    'username' => $username,
];
$smarty->assign( $data );
$smarty->display("login.tpl");
