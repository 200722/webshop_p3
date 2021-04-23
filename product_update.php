<?php
include('core/header.php');
$product_id = $_GET["id"];
// echo $product_id;

$productsql = "SELECT `product_id`, `name`, `description`, `category_id`, `price`, `color`, `weight`, `active` FROM `product` WHERE product_id= $product_id";

$productqry = $con->prepare($productsql);
if($productqry === false) {
    echo mysqli_error($con);
} else{
    $productqry->bind_result($product_id, $productName, $productdescription, $category,$productPrice,$color, $weight,$active);
    if($productqry->execute()){
        $productqry->store_result();
        
?>
     
            <!-- <form action="update_action.php" method= "POST"></form> -->
            <form name='update' id='update' action='actionsproduct.php?id= <?php echo $product_id?>' method='POST'>
						<div style="color: rgb(98, 0, 255); text-align: center;" >
							<label>UpdateProuduct</label>
			
						</div>
						<br>
						<div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Name:&nbsp;</label>
							<input value='<?php echo $productName; ?>' name='name' type='text'  placeholder='name' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Description: &nbsp;</label>
							<input value='<?php echo   $productdescription;?>' name='description'  type='text'  placeholder='description' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Category: &nbsp;</label>
							<input value='<?php echo  $category; ?>' name='category'  type='text' class='form-control' placeholder='category' />
						</div>
						<br>
						<div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Price: &nbsp;</label>
							<input value='<?php echo  $price; ?>' name='price'  type='number' placeholder='price' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>Color:&nbsp; </label>
							<input value='<?php echo  $color; ?>' name='color'type='text'  placeholder='color' />
						</div>
						<br>
						<div style="color: rgb(255, 81, 0); text-align: center;">
							<labe>Weight: &nbsp;</label>
							<input value='<?php echo  $weight; ?>' name='weight'  type='text'  placeholder='weight' />
						</div>
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
