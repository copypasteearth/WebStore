<?php
/**
 * author: John Rowan 
 * description: this file is the controller for the view that allows the user 
 *              to create new categories.
 */
require_once "include/db.php";
require_once "include/smarty.php";

//if cancel button is pressed this will exist
$cancel = filter_input(INPUT_POST,'cancel');
//if add button is pressed this will exist
$add = filter_input(INPUT_POST,'add');
//this refers to the input which holds the text of category name
$cat = filter_input(INPUT_POST,'cat');

//if cancel button exists and is pressed
//go to the home page
if(!is_null($cancel)){
    header("location: .");
    exit();
}
/**
 * if the add button is pressed trim the input text with category
 * name and check if it already exists in database, if not add it to 
 * database, if it exists then set flash message
 */
if(!is_null($add)){
    $cat = trim($cat);
    $categoryexists = R::findOne('category', 'name=?', [$cat]);
    if(is_null($categoryexists)){
        $catstore = R::dispense('category');
        $catstore->name = $cat;
        R::store($catstore);
    }else{
        $session->message = "That Category Already Exists!!!!";
    }
}


$categories = R::findAll('category');



$data = [
  'categories' => $categories
];
$smarty->assign( $data );
$smarty->display("addcategory.tpl");
