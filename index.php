<?php

require_once('php/component.php')
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SHOP CART</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
</head>

<body>

    <?php require_once("php/navbar.php"); ?>

    <div class="container-fluid row" style="padding-top: 20px;">
        <div class="row">
            <div id="shopList" class="col-sm-3">
                <a>Shop</a>
                <a> > </a>
                <a>All Product</a>
            </div>

            <div class="dropdown" id="shopCart">
                <a style="padding-right: 20px;">SORT BY: </a>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">TYPE OF SORT</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Feauture</a>
                    <a class="dropdown-item" href="#">Most Popular</a>
                    <a class="dropdown-item" href="#">Price : Low To High</a>
                    <a class="dropdown-item" href="#">Price : Hight To Low</a>
                    <a class="dropdown-item" href="#">Newest To Oldest</a>
                    <a class="dropdown-item" href="#">Oldest To Newest</a>
                </div>
            </div>


        </div>

    </div>

    <div class="container center">
        <div class="row text-center py-5">
            <?php
            component();
            component();
            component();
            component();
            component();
            component();
            component();

            ?>
        </div>
    </div>


    <div class="col">
        <div class="mx-auto text-center">
            <a class="troli" href="#prev"><img src="Picture/icon shop/cart/navigate_before.png" /></a>
            <a class="arrow" href="#next"><img src="Picture/icon shop/cart/navigate_next.png" /></a>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once("php/footer.php"); ?>
    <!-- Footer -->
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</body>

</html>