<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lampen</title>
    <link rel="stylesheet" href="./assets/css/cost.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>

<body>
    <!-- navigationbar -->
    <nav>
        <div class="top">
            <div class="container flex justify-between">
                <div class="Contact flex center">
                    <img src="./icons/phone.svg" alt="phone">
                    <div>
                        <h5>Call US: 0633388915</h5>
                        <h6>E-mail : ziedanireem@gmail.com</h6>
                    </div>
                </div>
                <div>
                    <img src="./icons/logo.png" alt="" width="150px" height="50px">
                </div>
                <div class=" flex center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (8.00am - 12.00am)</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar shadow">
            <div class="container flex justify-center">
                <a href="#" class="active">Home</a>
                <a href="about.php">about</a>
                <a href="Products.php" id="Products">Products</a>
                <a href="#">Blog</a>
                <a href="Gallery.html">Gallery</a>
                <a href="Contact.html">Contact</a>
                <!-- cart -->
                <form action="#" class="font-size-14 font-rale">
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class=""><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark ">0</span>
                      </a>
                  </form>
            </div>
        </div>
    </nav>


    <?php
    include('core/header.php');
?>
<!-- Overzicht van producten met ProductNaam, ProductPrijs, ProductAfbeelding en ProductCategorie -->
<h1>USER</h1>
<?php
$br = "<br>";
$customersql =   "SELECT `customer_id`, `gender`, `first_name`, `middle_name`, `last_name`, `street`, `house_number`, `house_number_addon`, `zip_code`, `city`, `phone`, `e-mailadres`, `password`, `newsletter_subscription` FROM `customer`";

$productqry = $con->prepare($customersql);
if($productqry === false) {
    echo mysqli_error($con);
} else{
    $productqry->bind_result($customer_id,$gender,$firstName,$middelName, $lastName , $street, $house_number,$house_number_addon, $zip_code, $city, $phone, $emailadres, $password, $newsletter_subscription);
    if($productqry->execute()){
        $productqry->store_result();
        while($productqry->fetch()){
            ?>
            <main >
                <div class="flex-container">

                            <?php echo $gender . $br  ;?>
                            <?php echo  $firstName  ;?>
                            <?php echo $middelName  ;?>
                            <?php echo $lastName  . $br ;?>
                            <?php echo $street  ;?>
                            <?php echo $house_number   ;?>
                            <?php echo $house_number_addon  ;?>
                            <?php echo $zip_code . $br ;?>
                            <?php echo $city . $br ;?>
                            <?php echo $phone . $br  ;?>
                            <?php echo $emailadres . $br  ;?>
                            <?php echo $password . $br ;?>
                            <?php echo $newsletter_subscription . $br ;?>
                            
                
                <div>
                    

            <a  href="userdetails.php?id= <?php echo  $customer_id ?>"><button  class="btn btn-success font-size-12">details</button>
            
            <a href="user_update.php?id= <?php echo  $customer_id ?>"><button  class="btn btn-success font-size-12">update</button>
            <a href="deleteuser.php?id=  <?php echo  $customer_id ?>"><button  class="btn btn-success font-size-12">Delete</button>

            <br>  <br>  <br>

               
                
    </main>

         

            <?php
        }
    }
    $productqry->close();
}


?>


<?php
    include('core/footer.php');
?>
<footer class="copyright">
        <div>
            Copyright © 2020 .All rights reserved by <a href="https://www.instagram.com">Reem Ziedani</a>.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>

</html>

