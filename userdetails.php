<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>


<?php
 include('core/header.php');
 $br = "<br>";
 $customer_id= $_GET['id'];

 $customersql =   "SELECT `customer_id`, `gender`, `first_name`, `middle_name`, `last_name`, `street`, `house_number`, `house_number_addon`, `zip_code`, `city`, `phone`, `e-mailadres`, `password`, `newsletter_subscription` FROM `customer`";
 
 $productqry = $con->prepare($customersql);
 if($productqry === false) {
     echo mysqli_error($con);
 } else{
     $productqry->bind_result($customer_id,$gender,$firstName,$middelName, $lastName , $street, $house_number,$house_number_addon, $zip_code, $city, $phone, $emailadres, $password, $newsletter_subscription);
     if($productqry->execute()){
         $productqry->store_result();

         echo "<table>";
         echo "<tr>";
         echo "<th>id</th>";
         echo " <th>gender</th>";
         echo " <th>firstname</th>";
         echo " <th>middelname</th>";
         echo " <th>lastname</th>";
         echo " <th>street</th>";
         echo " <th>house_number</th>";
         echo " <th>house_number_addon</th>";
         echo " <th>zip_code</th>";
         echo " <th>city</th>";
         echo " <th>phone</th>";
         echo " <th>emailadres</th>";
         echo " <th>password</th>";
         echo " <th>newsletter_subscription</th>";
         echo  "</tr>";
         while($productqry->fetch()){
               echo "<tr>";
               echo "<td>$customer_id  </td>";
               echo " <td>$gender</td>";
               echo " <td>$firstName</td>";
               echo " <td>$middelName</td>";
               echo " <td>$lastName</td>";
               echo " <td>$street</td>";
               echo " <td>$house_number</td>";
               echo " <td>$house_number_addon</td>";
               echo " <td>$zip_code</td>";
               echo " <td>$city</td>";
               echo " <td>$phone</td>";
               echo " <td>$emailadres</td>";
               echo " <td>$password</td>";
               echo " <td>$newsletter_subscription</td>";
               echo  "</tr>";

              

}
     }
    }
  
  