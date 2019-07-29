<?php
$page = "home";
$title = "Homepage";
$metaD = "Stickers Center Homepage";
include("./layout/header.php");
?>
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Stickers</span> Center</h1>
                                <h2>Wall Stickers & Wallpapers</h2>
                                <p>Design your house as you wish with our wide range of products.</p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="../images/home/themes/bedroom-wall-design-for-mint-green3.jpg"
                                     class="girl img-responsive" alt=""/>
                                <!-- <img src="../images/home/pricing.png"  class="pricing" alt="" /> -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Stickers</span> Center</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Design your house as you wish with our wide range of products. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="../images/home/themes/livingroom-wall-design-classic-blue.jpg"
                                     class="girl img-responsive" alt=""/>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>Stickers</span> Center</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Design your house as you wish with our wide range of products. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="../images/home/themes/children-sailboat-wallpaper-bedroom-boys-room-blue.jpg" class="girl img-responsive" alt=""/>
                                <!-- <img src="../images/home/pricing.png" class="pricing" alt="" /> -->
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Wall Stickers</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Stickers By Subjects
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="web-pages/stars-wallstickers.html">Stars </a></li>
                                        <li><a href="web-pages/wallpapers.html">Texts </a></li>
                                        <li><a href="#">Disney </a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">3D </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Category
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Bedroom</a></li>
                                        <li><a href="#">Livingroom</a></li>
                                        <li><a href="#">Kid Room</a></li>
                                        <li><a href="#">Baby</a></li>
                                        <li><a href="#">Bathroom</a></li>
                                        <li><a href="#">Baby Room</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Office</a></li>
                                        <li><a href="#">Teens Room</a></li>
                                        <li><a href="#">Coffee Shop</a></li>
                                        <li><a href="#">Other</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Wallpapers
                                    </a>
                                </h4>
                            </div>
                            <div id="womens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="web-pages/wallpapers.html">Home</a></li>
                                        <li><a href="web-pages/wallpapers.html">Bedroom</a></li>
                                        <li><a href="web-pages/wallpapers.html">Kids</a></li>
                                        <li><a href="web-pages/wallpapers.html">Baby</a></li>
                                        <li><a href="web-pages/wallpapers.html">Livingroom</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="../src/views.js">Stars</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Texts</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Trees</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Flowers</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Sports</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Inspirational sentences</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Birds</a></h4>
                            </div>
                        </div>
                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Wallpapers</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="web-pages/wallpapers.html"> <span class="pull-right">(50)</span>Home</a></li>
                                <li><a href="web-pages/wallpapers.html"> <span class="pull-right">(56)</span>Bedroom</a></li>
                                <li><a href="web-pages/wallpapers.html"> <span class="pull-right">(27)</span>Kids</a></li>
                                <li><a href="web-pages/wallpapers.html"> <span class="pull-right">(32)</span>Livingroom</a></li>
                                <li><a href="web-pages/wallpapers.html"> <span class="pull-right">(9)</span>Others</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <label for="sl2"></label><input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                                            data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br/>
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <!-- <img src="../images/home/shipping.jpg" alt="" /> -->
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/home/texts/wall-sticker-livingroom-with-text-purple.jpg" class="size200"
                                         alt=""/>
                                    <h2>$56</h2>
                                    <p>Wall Stickers For Home</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Wall Stickers For Home</p>
                                        <a href="#" id="addToCartLoadButton" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>***Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#" id="viewDetailsButton"><i class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/home/kids/wall-sticker-baby-room-with-teddy-bear-holding-pink-umbrella.jpg" class="size200"
                                         alt=""/>
                                    <h2>$56</h2>
                                    <p>Wall Stickers For Baby Room</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Wall Stickers For Baby Room</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/home/livingroom/wall-sticker-3d-livingroom-with-flowers-colorful.jpg" class="size200"
                                         alt=""/>
                                    <h2>$56</h2>
                                    <p>3D Wall Stickers</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>3D Wall Stickers</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/home/wallpapers/wallpaper-bedroom-offwhite-orange-classic-min.jpg" class="size200"
                                         alt=""/>
                                    <h2>$56</h2>
                                    <p>Classic Bedroom Wallpaper</p>
                                    <a href="web-pages/wallpapers.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Classic Bedroom Wallpaper</p>
                                        <a href="web-pages/wallpapers.html" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="../images/home/new.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/home/wallpapers/wallpaper-livingroom-offwhite-orange-classic-min.jpg" class="size200"
                                         alt=""/>
                                    <h2>$56</h2>
                                    <p>Classic Livingroom Wallpaper</p>
                                    <a href="web-pages/wallpapers.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Classic Livingroom Wallpaper</p>
                                        <a href="web-pages/wallpapers.html" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="../images/home/sale.png" class="new" alt=""/>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="../images/home/wallpapers/kids/wallpaper-kids-room-colorful-dots.jpg" class="size200"
                                         alt=""/>
                                    <h2>$56</h2>
                                    <p>Classic Kids Room Wallpaper</p>
                                    <a href="web-pages/wallpapers.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>$56</h2>
                                        <p>Classic Kids Room Wallpaper</p>
                                        <a href="web-pages/wallpapers.html" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!--features_items-->


                <div class="category-tab"><!--category-tab 536-795-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#kids" data-toggle="tab">Kids</a></li>
                            <li><a href="#livingroom" data-toggle="tab">Livingroom</a></li>
                            <li><a href="#bedroom" data-toggle="tab">Bedroom</a></li>
                            <li><a href="#home" data-toggle="tab">Home</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="kids">
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/kids/wall-sticker-kids-room-with-mini-mouse-colorful3.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Mini Mouse Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/kids/wall-sticker-kids-room-with-hello-kitty-colorful2.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Hello Kitty Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/kids/wall-sticker-kids-room-with-pooh-on-tree-pink.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Winnie-the-Pooh Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/kids/wall-sticker-kids-room-with-ice-cream-pink.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Ice Cream Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end-kids -->

                        <div class="tab-pane fade" id="livingroom">
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/home/wall-sticker-tree-livingroom-colorful2.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Tree Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/wallpaper-like/wall-sticker-wallpaper-like-with-flowers-min.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Flowers Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/home/wall-sticker-butterflies-colorful.jpg" class="size150" alt=""/>
                                            <h2>$56</h2>
                                            <p>Butterflies Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/wallpapers/wallpaper-livingroom-blue-classic.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Classic Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end-livingroom -->

                        <div class="tab-pane fade" id="bedroom">
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/bedroom/glow-in-the-dark-star-min.jpg" class="size150" alt=""/>
                                            <h2>$56</h2>
                                            <p>Glowing In The Dark Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/texts/wall-sticker-livingroom-with-text-colorful-pillows-light-blue.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Text Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/home/wall-sticker-butterflies-colorful.jpg" class="size150" alt=""/>
                                            <h2>$56</h2>
                                            <p>Butterflies Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/stars/wall-sticker-kids-room-with-stars-blue.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Stars Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> <!-- end-bedroom -->

                        <div class="tab-pane fade" id="home">
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/kitchen&dining/wall-sticker-dining-room-with-text-orange.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Dining Room Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/livingroom/wall-sticker-3d-livingroom-with-flowers-colorful-purple.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>3D Flowers Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/kitchen&dining/wall-sticker-kitchen-with-small-pictures-colorful-green.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Kitchen Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="../images/home/stars/wall-sticker-livingroom-with-stars.jpg" class="size150"
                                                 alt=""/>
                                            <h2>$56</h2>
                                            <p>Stars Wall Sticker</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>  <!-- end-home -->
                    </div>
                </div><!--/category-tab-->


                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="../images/home/recommended/wallpaper-bedroom-pink-classic-min.jpg" class="size200"
                                                     alt=""/>
                                                <h2>$56</h2>
                                                <p>Modern Wallpaper With Textured Linear Stripes </p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="../images/home/recommended/wallpaper-livingroom-blue-classic.jpg" class="size200"
                                                     alt=""/>
                                                <h2>$56</h2>
                                                <p></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="../images/home/recommended/wallpaper-kids-room-pink-lines.jpg" class="size200"
                                                     alt=""/>
                                                <h2>$56</h2>
                                                <p></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
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
                                                <img src="../images/home/recommended/wall-sticker-kids-room-boys-teens-with-sports-basketball-orange.jpg" class="size200"
                                                     alt=""/>
                                                <h2>$56</h2>
                                                <p></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="../images/home/recommended/wall-sticker-bedroom-with-stars-colorful1.jpg" class="size200"
                                                     alt=""/>
                                                <h2>$56</h2>
                                                <p></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="../images/home/recommended/wall-sticker-3d-kids-with-minion-colorful.jpg" class="size200"
                                                     alt=""/>
                                                <h2>$56</h2>
                                                <p></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
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

            </div>
        </div>
    </div>
</section>
<?php
include "./layout/footer.php";
?>
