<?php
/**
 * author: John Rowan
 * description: this is the controller for the modifyproduct view.
 */
require_once "include/db.php";
require_once "include/smarty.php";
require_once 'include/htmLawed.php';

//this is the id of the product being modified
$id = filter_input(INPUT_POST,'id');
//this is the id of the photo selected in the select dropdown
$photo_id = filter_input(INPUT_POST,'photo_id');
//this is the category id selected in the select dropdown
$category_id = filter_input(INPUT_POST,'category_id');
//this is the price set in the input field
$price = filter_input(INPUT_POST,'price');
//this is the description html set in a textarea
$textarea = filter_input(INPUT_POST,'textarea');
//if this is set then the user clicked cancel
$cancel = filter_input(INPUT_POST,'cancel');
//if this is set then the user clicked modify
$modify = filter_input(INPUT_POST,'add');
echo "<script>console.log( 'Debug Objects: " . $id . "' );</script>";
//the selected photo string to pass into product
$selectedPhoto = '';
//message variable to set to session flash pending errors with validation
$message = '';

//if user clicked cancel they are redirected to the home page
if(!is_null($cancel)){
    header("location: .");
    exit();
}
//get the product that is to be modified from the database
$product = R::findOne('product', 'id=?', [$id]);
//if the textarea is not set then set it to the products original description
if(is_null($textarea)){
    $textarea = $product->description;
}
//if the price is not set then set it to the products original price
if(is_null($price)){
    $price = $product->price;
}
//get photos from directory
$photos_dir = __DIR__ . "/img/products/";
$photoFiles = array_diff(scandir($photos_dir),[".",".."]);

/**
 * loop through the photo files and if a photo id is set then set selected photo to value.
 * check if each photo is already used by a product and unset that part of the array unless
 * it belongs to the currently modifiable product
 */
if(!is_null($photo_id)){
    $selectedPhoto = $photoFiles[$photo_id];
}
foreach($photoFiles as $key => $value){
    
    $product1 = R::findOne('product','photo_file=?',[$value]);
    if(!is_null($product1)){
        if(!($product->photo_file == $value)){
            unset($photoFiles[$key]);
        }else{
            $photo_id = $key;
        }
        
    }else{
        if(is_null($photo_id) && $product->photo_file == $value){
            $photo_id = $key;
        
        }
    }
}
//set categories
$category_recs = R::findAll('category', 'order by name');
$categories = [];
foreach($category_recs as $rec) {
    if(is_null($category_id)){
        $category_id = $product->category_id;
    }
  $categories[$rec->id] = $rec->name;
}
/**
 * if modify button is clicked first it checks if html is valid then it alters the product
 * and stores it using update into database. after it redirects to the showproduct page with
 * the products id.
 */
if(!is_null($modify)){
    if(!is_null($textarea)){
    $fixed_input = htmLawed($textarea);
    $correct = ($textarea === $fixed_input);
    if(!$correct){
        $message .= " Not Valid HTML in TextArea ";
    }else{
       $product->description = $textarea;
       $product->category_id = $category_id;
       $product->photo_file = $selectedPhoto;
       $product->price = $price;
       R::store($product);
       header("location: showProduct.php?product_id=".$id);
       exit();
    }
}
}
$session->message = $message;
$data = [
    'id' => $id,
    'categories' => $categories,
    'name' => $product->name,
    'category_id' => $category_id,
    'price' => $price,
    'textarea' => $textarea,
    'photo_id' => $photo_id,
    'photos' => $photoFiles,
        'selected_photo' => $selectedPhoto
];
$smarty->assign( $data );
$smarty->display("modifyproduct.tpl");