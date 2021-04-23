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
 $category_id = $_GET['id'];

 $categorysql =  "SELECT `category_id`, `name`, `description`, `active` FROM `category`";
$categoryqry = $con->prepare($categorysql);
 if($categoryqry=== false) {
     echo mysqli_error($con);
 } else{
    $categoryqry->bind_result($category_id, $categoryName, $categorydescription, $categoryactive);
     if($categoryqry->execute()){
        $categoryqry->store_result();
        echo "<table>";
        echo "<tr>";
        echo "<th> id </th>";
        echo " <th>name</th>";
        echo " <th>decicription</th>";
        echo " <th>categoryactive</th>";
        echo  "</tr>";
         while($categoryqry->fetch()){

              

           
              

              
               echo "<tr>";
               echo "<td>$category_id</td>";
               echo " <td>$categoryName</td>";
               echo " <td>$categorydescription</td>";
               echo " <td>$categoryactive</td>";
               echo  "</tr>";

              //  echo "</table>";

}
     }
          }

?>
  
  