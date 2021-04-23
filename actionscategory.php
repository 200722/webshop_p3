<?php
//    category
include('core/header.php');
$category_id = $_GET['id'];

if( isset($_POST['btnupdate']) ) {

   $name = $_POST['name'];
   $description = $_POST['description'];
   $active = $_POST['active'];
   
   
   $query="UPDATE `category` SET `name`='$name',`description`= '$description',`active`= '$active' WHERE `category_id`= '$category_id'";
  
   
   $result = mysqli_query($con, $query) or die('Cannot update data in database. '.mysqli_error($con));
   $user   = mysqli_fetch_assoc($result);
   if($result) header('Location:./category_admin.php');
  
  }