<?php
 include('core/header.php');
 
$product_id = $_GET['id'];

if(isset($_POST['review'])){
    $review= $_POST['review'];
}

if(isset($_POST['opmerking'])){
    $opmerking= $_POST['opmerking'];
}
echo $product_id . $review . $opmerking;

$query = "INSERT INTO `review`(`review`,`product_id`, `opmerking` )
				VALUES('$review', '$product_id', '$opmerking')";
	
	$result = mysqli_query($con, $query) or die('Cannot insert data into database. '.mysqli_error($con));
	if($result) {
	  echo 'Data inserted into database.';
}
?>
<?php
    include('core/footer.php');
    header('Location:./products.php');
?>