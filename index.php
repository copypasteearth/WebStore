<?php
/**
 * author: John Rowan
 * description: this is the main entry point for the application and controls 
 *              the home page
 */
require_once "include/smarty.php";
require_once "include/db.php";

// field is what to sort the products by
$field = filter_input(INPUT_GET, 'field');
// category to filter which products are displayed
$category_id = filter_input(INPUT_GET,'category_id');

//set the session category to the category id selected
if(!is_null($category_id)){
    if($category_id == 0){
        $session->category_id = null;
    }else{
       $session->category_id = $category_id; 
    }
    
}
// set field in session for sorting
if(!is_null($field)){
    $session->field = $field;
}
//set default session category to null
if(!isset($session->category_id)){
    $session->category_id = null;
}
//set default session field to sort by name
if (!isset($session->field)) {
  $session->field = 'name';
}

//get categories from database and set to variable that goes to view
$category_recs = R::findAll('category', 'order by name');
$categories[0] = "-- ALL --";
foreach($category_recs as $rec) {
  $categories[$rec->id] = $rec->name;
}
//getting products from database sorting by the session field setting
if(!($session->category_id === null)){
$products = R::findAll('product','category_id=? order by '.$session->field,[$session->category_id]);
}else{
    $products = R::findAll('product','order by '.$session->field);
}


$data = [
  'products' => $products,
  'categories' => $categories,
  'category_id' => $session->category_id,
];
$smarty->assign($data);
$smarty->display("index.tpl");
