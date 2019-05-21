<?php
/**
 * author: John Rowan
 * description: this is the controller for the view that adds a product to 
 *              the database.
 */
require_once "include/db.php";
require_once "include/smarty.php";
require_once 'include/htmLawed.php';

//if cancel button is pressed this will exist
$cancel = filter_input(INPUT_POST,'cancel');
//text from textarea used for the description feild of a product
$textarea = filter_input(INPUT_POST,'textarea');
//name of the product
$name = filter_input(INPUT_POST,'name');
//price of the product
$price = filter_input(INPUT_POST,'price');
//the photo id of the select component
$photo_id = filter_input(INPUT_POST,'photo_id');
//if add button is clicked this will exist
$add = filter_input(INPUT_POST,'add');
//the category id of the select component
$category_id = filter_input(INPUT_POST,'category_id');

//getting all of the photos from the photos folder
$photos_dir = __DIR__ . "/img/products/";
$photoFiles = array_diff(scandir($photos_dir),[".",".."]);
//message used for flash message in session
$message = '';
//boolean used for name validation
$namegood = true;
//boolean used for html validation for description
$correct = false;
//holds reference to the selected photo name
$selectedPhoto = '';

/**
 * go through the photo file array and if photo_id is not null then set selected
 * photo to the value.  check if the photo_file exists in a product in the 
 * database and if it is then unset that value and key from the array
 */
foreach($photoFiles as $key => $value){
    if(!is_null($photo_id)){
        if($photo_id == $key){
            $selectedPhoto = $value;
        }
    }
    $product = R::findOne('product','photo_file=?',[$value]);
    if(!is_null($product)){
        unset($photoFiles[$key]);
    }else{
        if(is_null($photo_id)){
            $photo_id = $key;
        
        }
    }
}
/**
 * this is when add button is clicked.
 * first it validates the name and then it validates the description html.
 * if both of them are good then it adds the new product to the database.
 * if info is not valid it concatenates error messages to the session
 * flash variable and returns them to the view. price is validated through html5
 */
if(!is_null($add)){
    if(!is_null($name)){
    $name = trim($name);
    $productName = R::findOne('product', 'name=?', [$name]);
    if(strlen($name) < 3){
        $message .= " Name must be at least 3 characters long ";
        $namegood = false;
    }
    if(!is_null($productName)){
        $message .= " Name already exists ";
        $namegood = false;
    }
    
    
}

if(!is_null($textarea)){
    $fixed_input = htmLawed($textarea);
    $correct = ($textarea === $fixed_input);
    if(!$correct){
        $message .= " Not Valid HTML in TextArea ";
    }
}
if($correct && $namegood){
    $prod = R::dispense('product');
    $prod->name = $name;
    $prod->description = $textarea;
    $prod->price = $price;
    $prod->photo_file = $selectedPhoto;
    $prod->category_id = $category_id;
    R::store($prod);
    header("location: .");
    exit();
}
}

//if cancel button is clicked user is redirected to home
if(!is_null($cancel)){
    header("location: .");
    exit();
}
//set flash message
$session->message = $message;

//get categories
$category_recs = R::findAll('category', 'order by name');
$categories = [];
foreach($category_recs as $rec) {
    if(is_null($category_id)){
        $category_id = $rec->id;
    }
  $categories[$rec->id] = $rec->name;
}

$data = [
 'categories' => $categories,
        'photos' => $photoFiles,
        'textarea' => $textarea,
    'name' => $name,
    'price' => $price,
        'photo_id' => $photo_id,
        'category_id' => $category_id,
        'selected_photo' => $selectedPhoto
        
];
$smarty->assign( $data );
$smarty->display("addproduct.tpl");
