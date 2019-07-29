<?php
$page = "wallpapers";
$title = "Wallpapers";
$metaD = "Stickers Center Wallpapers";
include("./layout/header.php");
?>
<section id="advertisement">
    <div class="container">
        <div class="carousel-inner">
            <div class="item active">
                <div class="col-sm-4">
                    <h1><span>Wallpapers</span></h1>
                    <!--<h1><span>Wall</span>papers</h1>-->
                    <p>Decorate your space with our wallpapers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-products-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#kids">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Kids
                                    </a>
                                </h4>
                            </div>
                            <div id="kids" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Classic </a></li>
                                        <li><a href="">Shapes </a></li>
                                        <li><a href="">Flowers </a></li>
                                        <li><a href="">Lines </a></li>
                                        <li><a href="">Animals </a></li>
                                        <li><a href="">Stars </a></li>
                                        <li><a href="">Special </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#bedrooms">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Bedrooms
                                    </a>
                                </h4>
                            </div>
                            <div id="bedrooms" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Classic </a></li>
                                        <li><a href="">Shapes </a></li>
                                        <li><a href="">Flowers </a></li>
                                        <li><a href="">Lines </a></li>
                                        <li><a href="">Animals </a></li>
                                        <li><a href="">Special </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#home">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Home
                                    </a>
                                </h4>
                            </div>
                            <div id="home" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="">Classic </a></li>
                                        <li><a href="">Shapes </a></li>
                                        <li><a href="">Flowers </a></li>
                                        <li><a href="">Lines </a></li>
                                        <li><a href="">Animals </a></li>
                                        <li><a href="">Special </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Baby Room</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Dining Room</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Livingroom</a></h4>
                            </div>
                        </div>
                    </div><!--/category-productsr-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Subjects</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"> <span class="pull-right">(3)</span>Stars</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Flowers</a></li>
                                <li><a href="#"> <span class="pull-right">(27)</span>Animals</a></li>
                                <li><a href="#"> <span class="pull-right">(32)</span>Shapes</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                </div>
            </div>

            <!--features_items-->
            <div class="col-sm-9 padding-right"><
                <div id="mainPage" class="features_items">
                    <h2 class="title text-center">Features Items</h2>

                    <div class="col-sm-4"> <!--start of 1st product-->
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/home-wallpapers/gorgeous-modern-wallpaper-four-colors-stripes2.jpg"
                                         class="size200"
                                         alt="Modern stripes wallpaper for home" onclick="setClickedProduct('0002')"/>
                                    <h2>$26</h2>
                                    <p>Modern wallpaper with textured linear stripes in 4 different colors</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$26</h2>
                                        <p>Modern wallpaper with textured linear stripes in 4 different colors</p>
                                        <a href="#" id="addToCartLoadButton1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="javascript:alert('Product Added To Wish-List!');"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage0002" onclick="setClickedProduct('0002')"><a onclick="setClickedProduct('0002')"
                                                                                                                  href="?pid=productDetailsPage0002"><i
                                            href="?pid=productDetailsPage0002"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!--end of 1st product-->

                    <div class="col-sm-4"> <!--start of 2st product-->
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/home-wallpapers/stripts-wallpaper-6colors-classic1.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('0003')"/>
                                    <h2>$56</h2>
                                    <p>Classic modern wallpaper with textured linear stripes in 6 different colors</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Classic modern wallpaper with textured linear stripes in 6 different colors</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage0003" onclick="setClickedProduct('0003')"><a onclick="setClickedProduct('0003')"
                                                                                                                  href="?pid=productDetailsPage0003"><i
                                            href="?pid=productDetailsPage0003"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end of 2st product-->

                    <div class="col-sm-4"> <!--start of 3st product-->
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/home-wallpapers/vertical-striped-featured-3colors-wallpaper5.jpg" class="size200" alt=""
                                         onclick="setClickedProduct('0002')"/>
                                    <h2>$56</h2>
                                    <p>Classic wallpaper with textured linear stripes in 3 different colors</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Classic wallpaper with textured linear stripes in 3 different colors</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage0002" onclick="setClickedProduct('0002')"><a
                                            onclick="setClickedProduct('0002')"
                                            href="?pid=productDetailsPage0002"><i
                                            href="?pid=productDetailsPage0002"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!--end of 3st product-->

                    <div class="col-sm-4"> <!--start of 4st product-->
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/home-wallpapers/wallpaper-3colors-bedroom-modern-stripts-classic1.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('1905-28-25-1')"/>
                                    <h2>$56</h2>
                                    <p>Stylish vertical stripes wallpaper in 3 different colors</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Stylish vertical stripes wallpaper in 3 different colors</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage1905-28-25-1" onclick="setClickedProduct('1905-28-25-1')"><a
                                            onclick="setClickedProduct('1905-28-25-1')"
                                            href="?pid=productDetailsPage1905-28-25-1"><i
                                            href="?pid=productDetailsPage1905-28-25-1"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!--end of 4st product-->

                    <div class="col-sm-4"> <!--start of 5st product-->
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/home-wallpapers/wallpaper-4colors-livingroom-classic2.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('0002')"/>
                                    <h2>$56</h2>
                                    <p>Elegant modern wallpaper with textured linear stripes in 4 different colors</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Elegant modern wallpaper with textured linear stripes in 4 different colors</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="../images/home/new.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage0002" onclick="setClickedProduct('0002')"><a id="viewDetailsButton"
                                                                                                                  onclick="setClickedProduct('0002')"
                                                                                                                  href="?pid=productDetailsPage0002"><i
                                            href="?pid=productDetailsPage0002"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!--end of 5st product-->

                    <div class="col-sm-4"> <!--start of 6st product-->
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/home-wallpapers/white-grey-brick-wallpaper2.jpg" class="size200" alt=""
                                         onclick="setClickedProduct('1904-04-65-1')"/>
                                    <h2>$38</h2>
                                    <p>Luxurious classic white and grey bricks wallpaper</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2 onclick="setClickedProduct('1904-04-65-1')">$38</h2>
                                        <p>Luxurious classic white and grey bricks wallpaper</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="../images/home/sale.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage1904-04-65-1" onclick="setClickedProduct('1904-04-65-1')"><a
                                            onclick="setClickedProduct('1904-04-65-1')"
                                            href="?pid=productDetailsPage1904-04-65-1"><i
                                            href="?pid=productDetailsPage1904-04-65-1"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!--end of 6st product-->

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/home-wallpapers/wallpaper-8colors-livingroom-plain-classic1.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('000200')"/>
                                    <!-- <img src="../images/wallpapers/kids-wallpapers/Romantic-Pastoral-3D-Florals-Wallpaper-For-Walls-In-Rolls-Wall-papers-For-Living-Room-Bedroom-Three.jpg" alt="" /> -->
                                    <h2>$56</h2>
                                    <p>Plain elegant modern wallpaper 8 different colors</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Plain elegant modern wallpaper 8 different colors</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage0002" onclick="setClickedProduct('0002')"><a
                                            onclick="setClickedProduct('0002')"
                                            href="?pid=productDetailsPage0002"><i
                                            href="?pid=productDetailsPage0002"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/kids-wallpapers/wallpaper-kids-room-colorful-dots.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('1905-21-84-1')"/>
                                    <h2>$56</h2>
                                    <p>Classic wallpaper with colorful dots</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Classic wallpaper with colorful dots</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage1905-21-84-1" onclick="setClickedProduct('1905-21-84-1')"><a
                                            onclick="setClickedProduct('1905-21-84-1')"
                                            href="?pid=productDetailsPage1905-21-84-1"><i
                                            href="?pid=productDetailsPage1905-21-84-1"
                                            class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/kids-wallpapers/wallpaper-kids-room-blue-lines2.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('0002')"/>
                                    <h2>$56</h2>
                                    <p>Classic rich wallpaper with textured linear stripes</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Classic rich wallpaper with textured linear stripes</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage0002" onclick="setClickedProduct('0002')"><a
                                            onclick="setClickedProduct('0002')"
                                            href="?pid=productDetailsPage0002"><i
                                            href="?pid=productDetailsPage0002" class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/kids-wallpapers/wallpaper-kids-room-pink-lines3.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('1903-18-89')"/>
                                    <h2>$56</h2>
                                    <p>Stylish wallpaper with textured linear stripes</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Stylish wallpaper with textured linear stripes</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage1903-18-99-2" onclick="setClickedProduct('1903-18-89')"><a
                                            onclick="setClickedProduct('1903-18-89')"
                                            href="?pid=productDetailsPage1903-18-89"><i
                                            href="?pid=productDetailsPage1903-18-89" class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/kids-wallpapers/children-wallpaper-bedroom-boys-girls-room-clothing-store-hotels-fashion-simple-blue.jpg"
                                         class="size200" alt="" onclick="setClickedProduct('1905-31-79-1')"/>
                                    <h2>$56</h2>
                                    <p>Snoopy playful wallpaper for kids rooms</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Snoopy playful wallpaper for kids rooms</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage1905-31-79-1" onclick="setClickedProduct('1905-31-79-1')"><a
                                            onclick="setClickedProduct('1905-31-79-1')"
                                            href="?pid=productDetailsPage1905-31-79-1"><i
                                            href="?pid=productDetailsPage1905-31-79-1" class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/wallpapers/kids-wallpapers/children-sailboat-wallpaper-bedroom-boys-room-blue.jpg" class="size200"
                                         alt="" onclick="setClickedProduct('0002')"/>
                                    <h2>$56</h2>
                                    <p>Sailboat wallpaper for kids & home decor</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Sailboat wallpaper for kids & home decor</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li href="?pid=productDetailsPage0002" onclick="setClickedProduct('0002')"><a
                                            onclick="setClickedProduct('0002')"
                                            href="?pid=productDetailsPage0002"><i
                                            href="?pid=productDetailsPage0002" class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a onclick="setPageTwo('Home Wallpapers', 'Kids Wallpapers')" href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>
                </div><!--features_items-->

<!--Product's Details-Page-->
                <div id="productDetailsPage" class="features_items">
                    <!--<h2 id="outputHeaderName" class="title text-center"></h2>-->
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img id="productMainImageSrc" src="" class="size250" alt=""/>
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href=""><img id="productImageSrc2" src="" class="size50" alt=""></a>
                                        <a href=""><img id="productImageSrc3" src="" class="size50" alt=""></a>
                                        <a href=""><img id="productImageSrc4" src="" class="size50" alt=""></a>
                                    </div>
                                    <div class="item">
                                        <a href=""><img id="productImageSrc5" src="" class="size50" alt=""></a>
                                        <a href=""><img id="productImageSrc6" src="" class="size50" alt=""></a>
                                        <a href=""><img id="productImageSrc7" src="" class="size50" alt=""></a>
                                    </div>
                                    <!--<div class="item">-->
                                    <!--<a href=""><img id="productImageSrc8" src="../images/product-details/similar1.jpg" class="size50" alt=""></a>-->
                                    <!--<a href=""><img id="productImageSrc9" src="../images/product-details/similar1.jpg" class="size50" alt=""></a>-->
                                    <!--<a href=""><img id="productImageSrc10" src="../images/product-details/similar1.jpg" class="size50" alt=""></a>-->
                                    <!--</div>-->
                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>

                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="../images/product-details/new.jpg" class="newarrival" alt=""/>
                                <h2 id="productOutputName" data-index=""></h2>
                                <p id="sku">SKU: </p>
                                <img src="../images/product-details/rating.png" alt=""/>
                                <span>
									<span id="price">US $</span>
									<label>Quantity:</label>
									<input type="text" id="productQuantityInput" value="1"/>
									<button type="button" id="addToCartLoadButton" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                                <p id="productAvailability"><b>Availability: </b></p>
                                <p id="productColor"><b>Color: </b></p>
                                <p id="productSize"><b>Size: </b></p>
                                <a href=""><img src="../images/product-details/share.png" class="share img-responsive"
                                                alt=""/></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Details</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                                <li><a href="#tag" data-toggle="tab">Tag</a></li>
                                <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="details">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img  src="../images/wallpapers/kids-wallpapers/children-sailboat-wallpaper-bedroom-boys-room-blue.jpg" class="size150" alt=""/>
                                                <h2 id="priceSimilar1">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img  src="../images/wallpapers/kids-wallpapers/wallpaper-kids-room-colorful-dots.jpg" class="size150" alt=""/>
                                                <h2 id="priceSimilar2">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img  src="../images/wallpapers/kids-wallpapers/two-tone-vertical-striped-wallpaper-for-children-room3.jpg" class="size150" alt=""/>
                                                <h2 id="priceSimilar3">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img  src="../images/wallpapers/kids-wallpapers/Cute-Hello-Kitty-Kids-Room-Wallpaper-3d-Lovely-Cartoon-Cat-Children-Baby-Girl-Bedroom-Wall-Papers.jpg" class="size150" alt=""/>
                                                <h2 id="priceSimilar4">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="companyprofile">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img  src="../images/wallpapers/kids-wallpapers/children-wallpaper-bedroom-boys-girls-room-clothing-store-hotels-fashion-simple-green.jpg" class="size150" alt=""/>
                                                <h2 id="priceSimilar5">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img  src="../images/wallpapers/kids-wallpapers/two-tone-vertical-striped-wallpaper-for-children-room5.jpg" class="size150" alt=""/>
                                                <h2 id="priceSimilar6">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img  src="../images/wallpapers/kids-wallpapers/Romantic-Pastoral-3D-Florals-Wallpaper-For-Walls-In-Rolls-Wall-papers-For-Living-Room-Bedroom-Three.jpg" class="size150" alt=""/>
                                                <h2 id="priceSimilar7">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href=""><img src="../images/wallpapers/kids-wallpapers/wallpaper-kids-room-pink-lines2.jpg" class="size150" alt=""></a>
                                                <h2 id="priceSimilar8">$</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>Text.....</p>
                                    <p><b>Write Your Review</b></p>

                                    <form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
                                        <textarea name=""></textarea>
                                        <b>Rating: </b> <img src="../images/product-details/rating.png" alt=""/>
                                        <button type="button" class="btn btn-default pull-right">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div><!--/category-tab-->

                <!--recommended_items-->
                    <div class="recommended_items">
                        <h2 class="title text-center">recommended items</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/wallpapers/home-wallpapers/wallpaper-4colors-livingroom-classic1.jpg" class="size150"
                                                         alt="" onclick="setClickedProduct('0003')"/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/wallpapers/home-wallpapers/stripts-wallpaper-6colors-classic3.jpg" class="size150"
                                                         alt="" onclick="setClickedProduct('0003')"/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/wallpapers/home-wallpapers/wallpaper-3colors-bedroom-modern-stripts-classic2.jpg" class="size150"
                                                         alt="" onclick="setClickedProduct('0003')"/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/wallpapers/home-wallpapers/wallpaper-4colors-livingroom-classic4.jpg" class="size150"
                                                         alt="" onclick="setClickedProduct('0003')"/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/wallpapers/home-wallpapers/wallpaper-3colors-bedroom-modern-stripts-classic4-notinstock.jpg"
                                                         class="size150"
                                                         alt="" onclick="setClickedProduct('0003')"/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/wallpapers/home-wallpapers/vertical-striped-wallpaper-featured-pink3.jpg" class="size150"
                                                         alt="" onclick="setClickedProduct('0003')"/>
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i>Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!--/recommended_items-->

                </div><!--features_items-->

            </div>


        </div>
    </div>
</section>

<?php
include "./layout/footer.php";
?>