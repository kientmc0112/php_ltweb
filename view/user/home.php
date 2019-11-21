<?php
    session_start();
?>
<!DOCTYPE html>
<html xml:lang="en" lang="en">

<!-- Mirrored from demo.7uptheme.com/html/mello/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:49:29 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/css/style-main.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
    <title>MELLO</title>
    <style>
        .itemabc {
            width: 20% !important;
        }
        .image img {
            width: 100%;
        }
    </style>
</head>

<body class="home">
    <!--begin header-->
    <div id="box-header">
        <div class="header-container">
            <div class="header">
                <div class="box-header-01">
                    <div class="container">
                        <div class="row">
                            <div class="logo">
                                <a href="home-01.html"><img src="images/logodefault.png" alt="" /></a>
                            </div>
                            <div class="menu">
                                <div class="box-main-menu">
                                    <div class="main-menu">
                                        <ul>
                                            <li class="item1"><a href="?controller=user&item=home">Home</a></li>
                                            <li class="item2"><a href="?controller=user&item=grid">Máy tính bảng</a>
                                            </li>
                                            <li class="item3"><a href="?controller=user&item=grid">Điện thoại</a>
                                            </li>
                                            <li class="item4"><a href="?controller=user&item=grid">Laptop</a></li>
                                            <li class="item5"><a href="?controller=user&item=grid">Máy bàn</a></li>
                                            <li class="item5"><a href="?controller=user&item=grid">Phụ kiện</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="account-and-cart">
                                <div class="my-account">
                                    <div class="content">
                                        <?php
                                            if( isset($_SESSION['username']) ) {
                                                if($_SESSION['level'] == 1) {
                                                    echo
                                                    "<ul class='right'>
                                                        <li><a class='top-link-myaccount' href='?controller=account&action=login'>" . $_SESSION['username'] . "</a></li><hr>
                                                        <li><a class='top-link-login' href='?controller=account&action=login'>Trang admin</a></li><hr>
                                                        <li><a class='top-link-login' href='?controller=account&action=logout'>Đăng xuất</a></li>
                                                    </ul>";
                                                } else {
                                                    echo
                                                    "<ul class='right'>
                                                        <li><a class='top-link-myaccount' href='?controller=account&action=login'>" . $_SESSION['username'] . "</a></li><hr>
                                                        <li><a class='top-link-login' href='?controller=account&action=logout'>Đăng xuất</a></li>
                                                    </ul>";
                                                }
                                            }
                                            else {
                                                echo
                                                "<ul class='right'>
                                                    <li><a class='top-link-myaccount' href='?controller=account&action=login'>Đăng nhập</a></li><hr>
                                                    <li><a class='top-link-login' href='?controller=account&action=register'>Đăng kí</a></li>
                                                </ul>";
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="box-cart">
                                    <div class="cart-mini">
                                        <div class="title">
                                            <span class="item">0</span>
                                        </div>
                                        <div class="block-content">
                                            <div class="inner">
                                                <p class="block-subtitle">Recently added item(s)</p>
                                                <ol id="cart-sidebar" class="mini-products-list">
                                                    <li class="item">
                                                        <a href="#" title="Fashion Product 09" class="product-image">
                                                            <img src="images/product/small/image-demo-1.jpg" alt="Fashion Product 09" />
                                                        </a>
                                                        <a href="#" class="btn-remove">Remove This Item</a>
                                                        <a href="#" title="Edit item" class="btn-edit">Edit item</a>
                                                        <div class="product-details">
                                                            <p class="product-name"><a title="Fashion Product 09" href="#">Fashion Product 09</a></p>
                                                            <span class="price">$200.00</span>
                                                            <div class="qty-abc">
                                                                <a title="Decrement" class="qty-change-left" href="#">down</a>
                                                                <input class="input-text qty" type="text" value="1" />
                                                                <a title="Increment" class="qty-change-right" href="#">up</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                                <div class="summary">
                                                    <p class="subtotal">
                                                        <span class="label">Subtotal:</span> <span class="price">$200.00</span>
                                                    </p>
                                                </div>
                                                <div class="actions">
                                                    <div class="a-inner">
                                                        <a class="btn-mycart" href="#" title="View my cart">view my cart</a>
                                                        <a href="#" title="Checkout" class="btn-checkout">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bgr-menu">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end header-->
    <!--begin content-->
    <div id="box-content">
        <div class="container">
            <div class="row">
                <div class="slide-show">
                    <div class="vt-slideshow">
                        <ul>
                            <li class="slide1" data-transition="random"><img src="images/slide/bg-s2.png" alt="" /></li>
                            <li class="slide2" data-transition="random"><img src="images/slide/bg-s1.png" alt="" /></li>
                            <li class="slide3" data-transition="random"><img src="images/slide/bg-s3.png" alt="" /></li>
                            <li class="slide3" data-transition="random"><img src="images/slide/bg-s4.png" alt="" /></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="position-02">
            <div class="container">
                <div class="row">
                    <div class="title-sp">
                        Điện thoại
                        <div class="std">
                            Xịn xò nhất
                        </div>
                    </div>
                    <div class="block vt-slider vt-slider3">
                        <div class="slider-inner">
                            <div class="container-slider">
                                <div class="products-grid">
                                    <?php
                                        foreach($data1 as $result1) {
                                    ?>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/<?php echo $result1['url'] ?>" alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										    <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html"><?php echo $result1['name'] ?></a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
												 <span class="price"><?php echo '$'.$result1['cost'] ?></span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--
										   <div class="ratings">
											  <div class="rating-box">
												 <div class="rating" style="width:80%"></div>
											  </div>
											  <span class="amount"><a href="#">1(s)</a></span>
										   </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <!-- <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo2.jpg" alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										    <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
												 <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo3.jpg" alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										   <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
												 <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo4.jpg" alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										    <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
												 <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo5.jpg" alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										    <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
												 <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="navslider">
                                <a class="prev" href="#">Prev</a>
                                <a class="next" href="#">Next</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="position-04">
            <div class="container">
                <div class="row">
                    <div class="title-sp">
                        Máy tính bảng
                        <div class="std">
                            Hiện đại nhất
                        </div>
                    </div>
                    <div class="block vt-slider vt-slider4">
                        <div class="slider-inner">
                            <div class="container-slider">
                                <div class="products-grid">
                                    <div class="item">
                                        <?php
                                            foreach($data2 as $result2) {
                                        ?>
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/<?php echo $result2['url'] ?>" alt="Product demo" />
                                                </a>
                                            </div>
                                            <div class="product-shop">
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html"><?php echo $result2['name'] ?></a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price"><?php echo '$'.$result2['cost'] ?></span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                        <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <!--end item wrap -->
                                        <!-- <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo1.jpg" alt="Product demo" />
                                                </a>
                                            </div>
                                            <div class="product-shop">
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                        <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!--end item wrap -->
                                        <!-- <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo3.jpg" alt="Product demo" />
                                                </a>
                                            </div>
                                            <div class="product-shop">
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
										<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                        <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!--end item wrap -->
                                        <!-- <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo1.jpg" alt="Product demo" />
                                                </a>
                                            </div>
                                            <div class="product-shop">
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
											<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                        <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!--end item wrap -->
                                    </div>
                                    <!-- <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image" src="images/product/larg/demo1.jpg" alt="Product demo" />
                                                </a>
                                            </div>
                                            <div class="product-shop">
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                        <span class="qview">
											<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                        </span>
                                                        <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="navslider">
                            <a class="prev" href="#">Prev</a>
                            <a class="next" href="#">Next</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="position-08">
            <div class="container">
                <div class="title-sp">
                    <h2>Phụ kiện</h2>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab1">Chính hãng</a></li>
                       <!--  <li><a data-toggle="tab" href="#tab2">POPULAR PRODUCTS</a></li>
                       <li><a data-toggle="tab" href="#tab3">Specail products</a></li> -->
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <div class="block vt-slider vt-slider7">
                            <div class="slider-inner">
                                <div class="container-slider">
                                    <div class="products-grid">
                                        <?php
                                            foreach($data3 as $result3) {
                                        ?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/<?php echo $result3['url'] ?>" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html"><?php echo $result3['name'] ?></a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price"><?php echo '$'.$result3['cost'] ?></span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end item wrap -->
                                        </div>
                                        <?php
                                            }
                                        ?>
                                        <!-- <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo2.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo3.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
											   <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo4.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo5.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
												<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
													 <span class="price">$800.00</span></span>
                                                                    <p class="special-price">
                                                                        <span class="price">$1.459.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="navslider">
                                    <a class="prev" href="#">Prev</a>
                                    <a class="next" href="#">Next</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <div id="tab2" class="tab-pane fade">
                        <div class="block vt-slider vt-slider5">
                            <div class="slider-inner">
                                <div class="container-slider">
                                    <div class="products-grid">
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo6.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo7.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo8.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
												   <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo9.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo10.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navslider">
                                    <a class="prev" href="#">Prev</a>
                                    <a class="next" href="#">Next</a>
                                </div>

                            </div>

                        </div>
                    </div> -->
                    <!-- <div id="tab3" class="tab-pane fade">
                        <div class="block vt-slider vt-slider6">
                            <div class="slider-inner">
                                <div class="container-slider">
                                    <div class="products-grid">
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo11.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo12.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo8.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
												   <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo1.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="item-image">
                                                    <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                        <img class="first_image" src="images/product/larg/demo2.jpg" alt="Product demo" />
                                                    </a>
                                                    <div class="item-btn">
                                                        <div class="box-inner">
                                                            <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                            <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                            <span class="qview">
													<a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                                <div class="pro-info">
                                                    <div class="pro-inner">
                                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a></div>
                                                        <div class="pro-content">
                                                            <div class="wrap-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
														 <span class="price">$800.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <span class="amount"><a href="#">1(s)</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navslider">
                                    <a class="prev" href="#">Prev</a>
                                    <a class="next" href="#">Next</a>
                                </div>

                            </div>

                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="position-09">
            <div class="container">
                <div class="row">
                    <div class="popular-cate">
                        <div class="title-cate">
                            Loại hàng
                        </div>
                        <div class="content">
                            <div class="item first itemabc">
                                <div class="title">
                                    <a href="#">Điện thoại</a>
                                </div>
                                <div class="image">
                                    <a href="#"><img src="images/catalog/cate1.png" alt="" /></a>
                                </div>
                                <div class="tag">
                                    <a href="#">Apple</a>,
                                    <a href="#">Samsung</a>,
                                    <a href="#">Nokia</a>
                                </div>
                            </div>
                            <div class="item itemabc">
                                <div class="title">
                                    <a href="#">Máy tính bảng</a>
                                </div>
                                <div class="image">
                                    <a href="#"><img src="images/catalog/cate2.png" alt="" /></a>
                                </div>
                                <div class="tag">
                                    <a href="#">Apple</a>,
                                    <a href="#">Samsung</a>,
                                    <a href="#">Nokia</a>
                                </div>
                            </div>
                            <div class="item itemabc">
                                <div class="title">
                                    <a href="#">Laptop</a>
                                </div>
                                <div class="image">
                                    <a href="#"><img src="images/catalog/cate3.png" alt="" /></a>
                                </div>
                                <div class="tag">
                                    <a href="#">Apple</a>,
                                    <a href="#">Samsung</a>,
                                    <a href="#">Nokia</a>
                                </div>
                            </div>
                            <div class="item itemabc">
                                <div class="title">
                                    <a href="#">Máy bàn</a>
                                </div>
                                <div class="image">
                                    <a href="#"><img src="images/catalog/cate4.png" alt="" /></a>
                                </div>
                                <div class="tag">
                                    <a href="#">Apple</a>,
                                    <a href="#">Samsung</a>,
                                    <a href="#">Nokia</a>
                                </div>
                            </div>
                            <div class="item last itemabc">
                                <div class="title">
                                    <a href="#">Phụ kiện</a>
                                </div>
                                <div class="image">
                                    <a href="#"><img src="images/catalog/cate5.png" alt="" /></a>
                                </div>
                                <div class="tag">
                                    <a href="#">Apple</a>,
                                    <a href="#">Samsung</a>,
                                    <a href="#">Nokia</a>
                                </div>
                            </div>
                            <!-- <div class="item last">
                                <div class="title">
                                    <a href="#">Cameras & Photo</a>
                                </div>
                                <div class="image">
                                    <a href="#"><img src="images/catalog/cate6.png" alt="" /></a>
                                </div>
                                <div class="tag">
                                    <a href="#">Kodak</a>,
                                    <a href="#">Kodak</a>,
                                    <a href="#">Panasonic</a>,
                                    <a href="#">Nikon</a>
                                </div>
                                <a class="view-all" href="#">View all</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end content-->
    <!--begin footer-->
    <div id="box-footer">
        <div class="box-footer-top">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="box-connect col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="block-title"><span>Connect with</span></div>
                            <a href="#" class="face-book">face book</a>
                            <a href="#" class="tweeter">tweeter</a>
                            <a href="#" class="no-name">no-name</a>
                            <a href="#" class="pinseter">pinseter</a>
                            <a href="#" class="google">google+</a>
                            <a href="#" class="init">init</a>
                        </div>
                        <div class="box-tweeter col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="block-title"><span>tweeter</span></div>
                            <div class="content">
                                Yêu Tổ quốc, yêu đồng bào<br>
                                Học tập tốt, lao động tốt<br>
                                Đoàn kết tốt, kỷ luật tốt<br>
                                Giữ gìn vệ sinh thật tốt<br>
                                Khiêm tốn, thật thà, dũng cảm.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="box-left">
                        <ul>
                            <li class="home"><a>MELLO</a></li>
                            <li><a href="#">About Us   </a><span>|</span></li>
                            <li><a href="#">Delivery & Returns</a><span>|</span></li>
                            <li><a href="#">Terms & Conditions</a><span>|</span></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <h6>Mello &copy; 2015 Magento Demo Store. All Rights Reserved. Designed by <a title="Visit VnThemePro.Com!" href="7uptheme.html">7-Up</a></h6>
                    </div>
                    <div class="box-right">
                        <ul>
                            <li><img src="images/p1.png" alt="" /></li>
                            <li><img src="images/p2.png" alt="" /></li>
                            <li><img src="images/p3.png" alt="" /></li>
                            <li><img src="images/p4.png" alt="" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a id="gototop">Top</a>
        <!--js-->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="style/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/galary-image/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/galary-image/js/bootstrap-image-gallery.js"></script>
        <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="js/slideshow/jquery.themepunch.revolution.js"></script>
        <script type="text/javascript" src="js/slideshow/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="js/theme.js"></script>

    </div>
    <!--end footer-->
</body>

<!-- Mirrored from demo.7uptheme.com/html/mello/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:51:47 GMT -->

</html>
