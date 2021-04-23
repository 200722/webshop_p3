<?php

include('core/header.php');

$product_id = $_GET['id'];
$query = "DELETE FROM `product` WHERE product_id=$product_id";
	$result = mysqli_query($con, $query) or die('Cannot delete data from database. '.mysqli_error($con));
	if($result) {
	  echo 'Data deleted from database.';
	  mysqli_free_result($result);
	  
	}