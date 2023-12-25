
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopHouse</title>

    <!--boostrap cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--owl-carousel CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Custom Css file-->
    <link rel="stylesheet" href="style.css">
    <!--JS-->
     <!-- alertify js -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
        
    <?php
    // require functions.php
    require('functions.php');
    ?>

</head>
    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark color-third-bg ">
        <a class="navbar-brand" href="index.php">ShopHouse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link navbar-dark" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categories.php">Categories<i class="fas fa-chevron-down"></i></a>
                </li>
                <?php 
                if(isset($_SESSION['auth']))
                {
                 ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user"></i>
                            <?=$_SESSION['auth_user']['name'] ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Sign Out
                        <i class="fa fa-sign-out white-color"></i>
                        </a>
                    </li>
                    <?php
                }
                else
                {
                    ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Log in</a>
                            </li>
                    <?php 
                }
                ?>
            </ul>
            <?php 
                if(isset($_SESSION['auth']))
                {
                 ?>
                    <form action="#" class="font-size-14 font-rale">
                        <a href="carts.php" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light text-decoration-none"><?php echo count($product->getData('carts')); ?></span>
                        </a>
                    </form>
                 <?php
                }
                ?>     
        </div>
    </nav>
    <!-- !Primary Navigation -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-PW8M+M0e6zZkN/FjKd+8WcJhVLfC3XKvwvM/1aWWhvbJbQZDfFm6ivlKmWxU6B5U6J+1vz8fKQLnpygJDJBCsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/68b7c09863.js" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/">
<!-- alertify js -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</header>
<body>
<!--Start header-->

<!--Start header-->
<!--Start main-->
<main id="main-site">
