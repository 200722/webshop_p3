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
 $product_id = $_GET['id'];

 $productsql = "SELECT `product_id`, `name`, `description`, `category_id`, `price`, `color`, `weight`, `active` FROM `product` WHERE product_id= $product_id";

 $productqry = $con->prepare($productsql);
 if($productqry === false) {
     echo mysqli_error($con);
 } else{
     $productqry->bind_result($product_id, $productName, $productdescription, $category,$productPrice,$color, $weight,$active);
     if($productqry->execute()){
         $productqry->store_result();
         while($productqry->fetch()){

              

               echo "<table>";
               echo "<tr>";
               echo "<th> id </th>";
               echo " <th>name</th>";
               echo " <th>decicription</th>";
               echo " <th>category</th>";
               echo " <th>price</th>";
               echo " <th>color</th>";
               echo " <th>weight</th>";
               echo " <th>active</th>";
               echo  "</tr>";

              
               echo "<tr>";
               echo "<td>$product_id</td>";
               echo " <td>$productName</td>";
               echo " <td>$productdescription</td>";
               echo " <td>$category</td>";
               echo " <td>$productPrice</td>";
               echo " <td>$color</td>";
               echo " <td>$weight</td>";
               echo " <td>$active</td>";
               echo  "</tr>";
}
     }
    }
  
  