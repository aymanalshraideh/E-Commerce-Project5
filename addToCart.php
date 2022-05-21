<?php
require 'config.php';
if (isset($_GET['productId'])){
$p_id=$_GET['productId'];
$category_name=$_GET['c_name'];
$category_id=$_GET['cat_id'];

$sql='SELECT * FROM products WHERE product_id = :p_id';
$statement = $db->prepare($sql);
$statement->bindParam(':p_id', $p_id, PDO::PARAM_INT);
$statement->execute();
$data = $statement->fetch(PDO::FETCH_ASSOC);

$p_price=$data['product_price'];
$p_name=$data['product_name'];
$p_image=$data['product_main_image'];

  $insert_cart = $db->prepare("INSERT INTO `cart`(product_f_id , product_quantity,product_price,product_name,	product_main_image) VALUES(?,?,?,?,?)");
  $insert_cart->execute([$p_id,1,$p_price,$p_name ,$p_image]);
  header('location:store.php?category='.$category_id.'&name='.$category_name);
}
?>