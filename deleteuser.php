<?php

include('core/header.php');

$customer_id= $_GET['id'];
$query = "DELETE FROM `customer` WHERE customer_id=$customer_id";
	$result = mysqli_query($con, $query) or die('Cannot delete data from database. '.mysqli_error($con));
	if($result) {
	  echo 'Data deleted from database.';
	  mysqli_free_result($result);
	  
	}