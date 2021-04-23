<?php

//    user
include('core/header.php');
$customer_id = $_GET['id'];

if( isset($_POST['btnupdate']) ) {

   $gender    = $_POST['gender'];
   $firstname = $_POST['firstname'];
   $middle_name = $_POST['middlename'];
   $lastname   = $_POST['lastname'];
   $street     =  $_POST['street'];
   $housenumber = $_POST['house_number'];
   $zipCode     = $_POST['zip_code'];
   $city         = $_POST['city'];
   $phone         =$_POST['phone'];
   $emailadres   = $_POST['emailadres'];
   $password     = $_POST['password'];
   $newsletter_subscription = $_POST['newsletter_subscription'];
  
   
   
   $query="UPDATE `customer` SET `gender`='$gender', `first_name`='$firstname',`middle_name`= '$middle_name',`last_name`= '$lastname', `house_number`= '$housenumber',`zip_code`= '$zipCode',`city`= '$city', `phone`= '$phone',`e-mailadres`= '$emailadres',`password`= '$password',`newsletter_subscription`= '$newsletter_subscription' WHERE `customer_id`= $customer_id";
   // var_dump($query);
  
   
   $result = mysqli_query($con, $query) or die('Cannot update data in database. '.mysqli_error($con));
   $customer  = mysqli_fetch_assoc($result);
   if($result) header('Location:./user.php');
  
  }