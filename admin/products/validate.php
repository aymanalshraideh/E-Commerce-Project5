<?php
var_dump($_POST);
$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];
$category=$_POST["category"];
$imagePath="";
if(!$title){
    $errors[]='product title is required';
};
if(!$price){
    $errors[]="product price is required";
};
if(!is_dir("images")){
  mkdir("images");
}
if(empty($errors)){
  $image = $_FILES['img'] ?? null;
  var_dump($_FILES["img"]);
  $imagePath=$product["product_main_image"];
  if($image && $image["tmp_name"]){
    if($product["product_main_image"]){
        unlink($product["product_main_image"]);
    }
    $imagePath="images/".randomString(8)."/".$image["name"];
    mkdir(dirname($imagePath));
    move_uploaded_file($image['tmp_name'],$imagePath);
  }

};