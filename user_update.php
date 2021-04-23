<?php
include('core/header.php');
$customer_id= $_GET['id'];

$br = "<br>";
$customersql =   "SELECT `customer_id`, `gender`, `first_name`, `middle_name`, `last_name`, `street`, `house_number`, `house_number_addon`, `zip_code`, `city`, `phone`, `e-mailadres`, `password`, `newsletter_subscription` FROM `customer`";

$productqry = $con->prepare($customersql);
if($productqry === false) {
    echo mysqli_error($con);
} else{
    $productqry->bind_result($customer_id,$gender,$firstName,$middelName, $lastName , $street, $house_number,$house_number_addon, $zip_code, $city, $phone, $emailadres, $password, $newsletter_subscription);
    if($productqry->execute()){
        $productqry->store_result();
      
?>
  <form  action='actionsuser.php?id= <?php echo $customer_id?>' method='POST'>
						<div style="color: rgb(98, 0, 255); text-align: center;" >
							<label>Updateuser</label>
			
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>gender:&nbsp;</label>
							<input value='<?php echo $gender; ?>' name='gender' type='text'  placeholder='Gender' />
						</div>
						<br>
						<div style="color: rgb(255, 81, 0); text-align: center;">
							<label>firstName:&nbsp;</label>
							<input value='<?php echo $firstName; ?>' name='firstname' type='text'  placeholder='firstname' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>middelName:&nbsp;</label>
							<input value='<?php echo $middelName; ?>' name='middlename' type='text'  placeholder='middelname' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>lastName:&nbsp;</label>
							<input value='<?php echo $lastName; ?>' name='lastname' type='text'  placeholder='lastname' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>street: &nbsp;</label>
							<input value='<?php echo   $street;?>' name='street'  type='text'  placeholder='street' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>house_number: &nbsp;</label>
							<input value='<?php echo  $house_number; ?>' name='house_number'  type='number' class='form-control' placeholder='house_number' />
						</div>
						<br>
						<div style="color: rgb(255, 81, 0); text-align: center;">
							<label>house_number_addon: &nbsp;</label>
							<input value='<?php echo  $house_number_addon; ?>' name='house_number_addon'  type='text' placeholder='house_number_addon' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>zip_code:&nbsp; </label>
							<input value='<?php echo  $zip_code; ?>' name='zip_code'type='text'  placeholder='zip_code' />
						</div>
						<br>
						<div style="color: rgb(255, 81, 0); text-align: center;">
							<labe>phone: &nbsp;</label>
							<input value='<?php echo  $city; ?>' name='city'  type='text'  placeholder='city' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label> phone :&nbsp;</label>
							<input value='<?php echo  $phone; ?>' name='phone'  type='number'  placeholder='phone' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>emailadres:&nbsp;</label>
							<input value='<?php echo  $emailadres; ?>' name='emailadres'  type='text'  placeholder='emailadres' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>password:&nbsp;</label>
							<input value='<?php echo  $password; ?>' name='password'  type='text'  placeholder='password' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<label>newsletter_subscription:&nbsp;</label>
							<input value='<?php echo  $newsletter_subscription; ?>' name=' newsletter_subscription'  type='text'  placeholder=' newsletter_subscription' />
						</div>
						<br>
                        <div style="color: rgb(255, 81, 0); text-align: center;">
							<button name='btnupdate'>Update</button>
						</div>

                   
                        
            
<?php
 }
	}
		

 ?>