<?php
/** @var pdo \PDO */
require_once "./../database.php";
require_once "./../functions.php";
$errors =[];
$title="";
$price="";
$description="";
$category="";
$product = [
  "product_main_image" => "" 
];
if($_SERVER["REQUEST_METHOD"]==="POST"){
require_once "./../validate.php";
if(empty($errors)){

$statement=$pdo->prepare("INSERT INTO products (product_name, product_main_image, product_description, product_price,product_categorie_id)
 VALUES (:title, :image, :description, :price, :category)
 ");
 $statement->bindValue(':title', $title);
 $statement->bindValue(':image', "$imagePath");
 $statement->bindValue(':description', $description);
 $statement->bindValue(':price', $price);
 $statement->bindValue(':category', $category);
 $statement->execute();
 header('location:index.php');
};
};

?>
<?php include_once "./../partials/header.php" ?>
<p><a href="index.php" class="btn btn-secondary">GO Back</a></p>
    <h1>ProductsCRUD</h1>
    <?php include_once "./../products/form.php" ?>
<?php include_once "./../partials/footer.php" ?>