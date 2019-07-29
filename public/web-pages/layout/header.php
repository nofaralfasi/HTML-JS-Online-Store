
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="<?php
if(isset($metaD) && !empty($metaD)) { 
   echo $metaD; 
} 
else { 
   echo "Some meta description"; 
} ?>" />

<title><?php 
if(isset($title) && !empty($title)) { 
   echo $title; 
} 
else { 
   echo "Default title tag"; 
} ?></title>
    <!-- <title>Home | Stickers Center</title> -->

    <!-- <script type="text/javascript" href="index.js"></script> -->


    <!-- ------------------ -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <script defer src="https://www.gstatic.com/firebasejs/6.0.2/firebase-app.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/6.0.2/firebase-auth.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/6.0.2/firebase-firestore.js"></script>
    <script defer src="../js/./app.js"></script>
    <script defer src="../js/./parseURL.js"></script>
    <script defer src="../js/./updateDB.js"></script>

    <script defer src="js/./updateDB-stars.js"></script>

</head>
<body>

<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i>+972 526205429</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> my.stickers.center@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/madbekot.comp/"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://twitter.com/stickers_center?lang=he"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/stickers_center_israel/"><i
                                    class="fa fa-instagram"></i></a></li>
                            <li><a href="https://plus.google.com/101066463055015880710"><i
                                    class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="images/home/logo4.png" alt=""/></a>
                    </div>
                    <div class="btn-group pull-left clearfix">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                IL
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Israel</a></li>
                                <li><a href="">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Shekels
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">EURO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="fa fa-user"></i> Account</a></li>
                            <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="web-pages/checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="web-pages/cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="web-pages/login.html"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="web-pages/shop.html">Products</a></li>
                                    <li><a href="../src/product-page.html">Product Details</a></li>
                                    <li><a href="web-pages/checkout.html">Checkout</a></li>
                                    <li><a href="web-pages/cart.html">Cart</a></li>
                                    <li><a href="web-pages/login.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="../src/blog.html">Blog List</a></li>
                                    <li><a href="../src/blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="../src/best-sellers.html">Best Sellers</a></li>
                            <li><a href="web-pages/contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

