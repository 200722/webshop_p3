<?php
 include('core/header.php');
 $product_id = $_GET['id'];
 
if( isset($_POST['btnupdate']) ) {

	$name = $_POST['name'];
	$description = $_POST['description'];
	$category   = $_POST['category'];  
	$Price = $_POST['price'];
	$color  = $_POST['color'];
    $weight = $_POST['weight'];
    $active = $_POST['active'];
    
	
	$query="UPDATE `product` SET `name`='$name',`description`= '$description',`category_id`= $category,`price`='$Price',`color`='$color',`weight`='$weight',`active`= $active WHERE `product_id`= $product_id";
	
    $result = mysqli_query($con, $query) or die('Cannot update data in database. '.mysqli_error($con));
	$product  = mysqli_fetch_assoc($result);
	if($result) header('Location:./product_admin.php');
   
   }




?>