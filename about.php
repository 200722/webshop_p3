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
                    <img src="./icons/phone.svg" alt="">
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
                <form action="#" class="font-size-14 font-rale">
                      <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                      </a>
                  </form>
            </div>
        </div>
    </nav>
  

<?php
    include('core/header.php');
?>
<h1>Categorie overzicht</h1>
<?php
$sql = "SELECT name, description FROM category WHERE active = 1";
$liqry = $con->prepare($sql);
if($liqry === false) {
    echo mysqli_error($con);
} else{
    // $liqry->bind_param('s',$email);
    $liqry->bind_result($categoryName, $categoryDescription);
    if($liqry->execute()){
        $liqry->store_result();
        while($liqry->fetch()){
            ?>
             <div class="flex-container">
                <p class="container"><?php echo $categoryName;?></p>
                <p class="container"><?php echo $categoryDescription;?></p>
        </div>
            <?php
        }
    }
    $liqry->close();
}
?>

<h1>Random producten overzicht</h1>
<!-- Willekeurig 3 producten nodig; product naam, product prijs en categorie titel -->
<?php
$productsql = "SELECT product.name AS productName, product.price, category.name AS categoryName FROM product INNER JOIN category ON product.category_id = category.category_id WHERE category.active = 1 AND product.active = 1 ORDER BY RAND() LIMIT 3";

$productqry = $con->prepare($productsql);
if($productqry === false) {
    echo mysqli_error($con);
} else{
    $productqry->bind_result($productName, $productPrice, $categoryNameProduct);
    if($productqry->execute()){
        $productqry->store_result();
        while($productqry->fetch()){
            ?>
            <article>
                <h3><a href="products.php">&nbsp; &nbsp;<?php echo $productName;?></h3>
                <div class="random" >
                  <?php echo $categoryNameProduct;?><br>
                    &euro; <?php echo $productPrice;?>
                </div>
            </article>
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
</body>

</html>