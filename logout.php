<?php
/**
 * author: John Rowan
 * description: when the user clicks logout the session login var is unset
 *              and the user is redirected to the home page.
 */
require_once "include/session.php";

unset($session->login);
header( "location: ." );
