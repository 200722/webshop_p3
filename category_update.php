<?php
include('core/header.php');
$product_id = $_GET["id"];
// echo $product_id;

$categorysql = "SELECT `category_id`, `name`, `description`, `active` FROM `category`";
$categoryqry = $con->prepare($categorysql);
if($categoryqry === false) {
    echo mysqli_error($con);
} else{
    $categoryqry->bind_result($category_id, $categoryName, $categorydescription,$active);
    if($categoryqry->execute()){
        $categoryqry->store_result();
       
?>
     
            <form name='update' id='update' action='actionscategory.php?id= <?php echo $product_id?>' method='POST'>
						<div style="color: rgb(98, 0, 255); text-align: center;" >
							<label>Updatecategory</label>
			
						</div>
						<br>
						<div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Name:&nbsp;</label>
							<input value='<?php echo $categoryName; ?>' name='name' type='text'  placeholder='name' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Description: &nbsp;</label>
							<input value='<?php echo   $categorydescription;?>' name='description'  type='text'  placeholder='description' />
						</div>
						<br>
                      
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Active:&nbsp;</label>
							<input value='<?php echo  $active; ?>' name='active'  type='text'  placeholder='active' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<button name='btnupdate'>Update</button>
						</div>

                   
                        
            
<?php
 }
	}
		

 ?>
