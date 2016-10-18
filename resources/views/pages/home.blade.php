<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Delphinus - Creative Multi-Purpose eCommerce HTML5</title>

    <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7cRoboto+Slab:400,700%7cCrete+Round:400italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/Lineicons/style.css" />
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/settings.css" />
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/navigation.css" />
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Common space -->
    <link rel="stylesheet" href="assets/css/common-space.css">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="appear-animate">


<div class="page-loading-wrapper">
    <div class="progress-bar-loading">
        <div class="back-loading progress-bar-inner">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <path d="M3.7,12h10.6l15.1,54.6c0.4,1.6,1.9,2.7,3.6,2.7h46.4c1.5,0,2.8-0.9,3.4-2.2l16.9-38.8c0.5-1.2,0.4-2.5-0.3-3.5
                    c-0.7-1-1.8-1.7-3.1-1.7H45c-2,0-3.7,1.7-3.7,3.7s1.7,3.7,3.7,3.7h45.6L76.9,62H35.8L20.7,7.3c-0.4-1.6-1.9-2.7-3.6-2.7H3.7
                    C1.7,4.6,0,6.3,0,8.3S1.7,12,3.7,12z"/>
                <path d="M29.5,95.4c4.6,0,8.4-3.8,8.4-8.4s-3.8-8.4-8.4-8.4s-8.4,3.8-8.4,8.4C21.1,91.6,24.8,95.4,29.5,95.4z"/>
                <path d="M81.9,95.4c0.2,0,0.4,0,0.6,0c2.2-0.2,4.3-1.2,5.7-2.9c1.5-1.7,2.2-3.8,2-6.1c-0.3-4.6-4.3-8.1-8.9-7.8s-8.1,4.4-7.8,8.9
                    C73.9,91.9,77.5,95.4,81.9,95.4z"/>
            </svg>
        </div>
        <div class="front-loading progress-bar-inner">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                <path d="M3.7,12h10.6l15.1,54.6c0.4,1.6,1.9,2.7,3.6,2.7h46.4c1.5,0,2.8-0.9,3.4-2.2l16.9-38.8c0.5-1.2,0.4-2.5-0.3-3.5
                    c-0.7-1-1.8-1.7-3.1-1.7H45c-2,0-3.7,1.7-3.7,3.7s1.7,3.7,3.7,3.7h45.6L76.9,62H35.8L20.7,7.3c-0.4-1.6-1.9-2.7-3.6-2.7H3.7
                    C1.7,4.6,0,6.3,0,8.3S1.7,12,3.7,12z"/>
                <path d="M29.5,95.4c4.6,0,8.4-3.8,8.4-8.4s-3.8-8.4-8.4-8.4s-8.4,3.8-8.4,8.4C21.1,91.6,24.8,95.4,29.5,95.4z"/>
                <path d="M81.9,95.4c0.2,0,0.4,0,0.6,0c2.2-0.2,4.3-1.2,5.7-2.9c1.5-1.7,2.2-3.8,2-6.1c-0.3-4.6-4.3-8.1-8.9-7.8s-8.1,4.4-7.8,8.9
                    C73.9,91.9,77.5,95.4,81.9,95.4z"/>
            </svg>
        </div>
        <div class="progress-bar-number">0%</div>
    </div>
</div>

<div id="search-fullwidth" class="mfp-hide mfp-with-anim">
    <form method="get" class="searchform" action="#">
        <input type="text" placeholder="Search and hit enter" value="" name="s" />
        <button class="submit"><i class="fa fa-search"></i></button>
    </form>
</div><!-- #search-fullwidth -->

<div id="popup-wrap" class="mfp-hide mfp-with-anim" data-timeshow="3">
    <div class="wrapper-newletter-popup">
        <div class="bg-popup"></div>
        <h3>NEWSLETTER</h3>
        <p>Subscribe to the Universal mailing list to receive updates on new arrivals, offers and other discount information.</p>
        <form class="newsletters-form style2" method="get" action="#">
            <input type="email" placeholder="Enter your email address">
            <button class="submit"><i class="icon-Right-3"></i></button>
        </form>
    </div>
</div><!-- #search-fullwidth -->

<div id="page">
    <!-- header-full-center -->
    <header id="header" class="header-shadow header-full-center">
        <div class="topbar">
            <div class="row">
                <div class="topbar-left col-sm-6">
                    <ul class="top-navigation">
                        <li class="language-switcher">
                            <a href="#">EN</a>
                            <ul class="top-navigation-submenu">
                                <li><a href="#">FR</a></li>
                                <li class="active"><a href="#">EN</a></li>
                                <li><a href="#">DE</a></li>
                            </ul>
                        </li><!-- .language-switcher -->

                        <li class="currency-switcher">
                            <a href="#">USD</a>
                            <ul class="top-navigation-submenu">
                                <li><a href="#">EUR</a></li>
                                <li class="active"><a href="#">USD</a></li>
                            </ul>
                        </li><!-- .language-switcher -->

                    </ul><!-- .top-navigation -->
                </div><!-- .topbar-left -->

                <div class="topbar-right col-sm-6">
                    <ul class="top-navigation">
                        <li class="myaccount-item">
                            <a href="#">login</a>
                            <div class="top-navigation-submenu">
                                <h3 class="submenu-heading">Login</h3>
                                <form class="login" method="post">
                                    <div class="myaccount-form">
                                        <p>
                                            <label for="username">Username or email address</label>
                                            <input type="text" value="" id="username" name="username" class="input-text">
                                        </p>
                                        <p>
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="input-text">
                                        </p>
                                        <p>
                                            <input type="submit" value="Login" name="login" class="btn btn-dark-b">
                                            <label class="inline" for="rememberme">
                                                <input type="checkbox" value="forever" id="rememberme" name="rememberme">Remember me
                                            </label>
                                            <a href="#" class="forget-password">Lost your password?</a>
                                        </p>
                                    </div>
                                    <div class="myaccount-create">
                                        Not registered? No problem
                                        <input type="submit" value="create account" name="create" class="btn btn-gray pull-right">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="wishlist-item">
                            <a href="woocommerce-wishlist.html">
                                wishlist <span>3</span>
                            </a>
                            <div class="top-navigation-submenu">
                                <div class="shopping-bag">
                                    <div class="shopping-bag-content">
                                        <!--<p class="cart_block_no_products">Your wishlist is empty.</p>--><!-- .cart_block_no_products-->
                                        <div class="bag-products">
                                            <div class="bag-product">
                                                <figure>
                                                    <a href="#" class="bag-product-img">
                                                        <img src="/90x90" alt="" class="img-responsive">
                                                    </a>
                                                </figure>
                                                <div class="bag-product-details">
                                                    <h4 class="bag-product-title"><a href="#">Le grand cartable</a></h4>
                                                    <div class="bag-product-price">Price: <span class="amount">$1000.00</span></div>
                                                </div>
                                                <a title="Remove this item" class="remove" href="#"></a>
                                            </div><!-- .bag-product -->
                                        </div><!-- .bag-products -->

                                        <div class="bag-buttons">
                                            <a class="btn btn-block btn-gray" href="#">View Wishlist</a>
                                        </div><!-- .bag-buttons -->

                                    </div><!-- .shopping-bag-content -->
                                </div><!-- .shopping-bag -->
                            </div>
                        </li>
                        <li class="shopping-bag-item">
                            <a href="woocommerce-cart.html">my cart <span>4</span></a>

                            <div class="top-navigation-submenu">
                                <div class="shopping-bag">
                                    <!--<p class="cart_block_no_products">Your cart is currently empty.</p>--><!-- .cart_block_no_products-->
                                    <div class="bag-products">
                                        <div class="bag-product">
                                            <figure>
                                                <a href="#" class="bag-product-img">
                                                    <img src="/90x90" alt="" class="img-responsive">
                                                </a>
                                            </figure>
                                            <div class="bag-product-details">
                                                <h4 class="bag-product-title"><a href="#">Le grand cartable</a></h4>
                                                <div class="bag-product-price">Price: <span class="amount">$1000.00</span></div>
                                                <div class="bag-product-qty">Quantity: 1</div>
                                            </div>
                                            <a title="Remove this item" class="remove" href="#"></a>
                                        </div><!-- .bag-product -->

                                        <div class="bag-product">
                                            <figure>
                                                <a href="#" class="bag-product-img">
                                                    <img src="/90x90" alt="" class="img-responsive">
                                                </a>
                                            </figure>
                                            <div class="bag-product-details">
                                                <h4 class="bag-product-title"><a href="#">Le grand cartable</a></h4>
                                                <div class="bag-product-price">Price: <span class="amount">$1000.00</span></div>
                                                <div class="bag-product-qty">Quantity: 1</div>
                                            </div>
                                            <a title="Remove this item" class="remove" href="#"></a>
                                        </div><!-- .bag-product -->


                                    </div><!-- .bag-products -->

                                    <div class="bag-buttons">
                                        <a class="btn-block btn btn-gray" href="woocommerce-cart.html">View Cart</a>
                                        <a class="btn-block btn btn-dark-b" href="woocommerce-checkout.html">Checkout</a>
                                    </div><!-- .bag-buttons -->

                                </div><!-- .shopping-bag -->
                            </div>

                        </li>
                    </ul><!-- .top-navigation -->
                </div><!-- .topbar-right -->

            </div>
        </div><!-- .topbar -->    <div class="navbar-container sticky-header">
        <div class="navbar-container-inner clearfix">
            <div class="branding">
                <h1 class="logo">
                    <a href="index.html"><img src="assets/images/logo.png" title="Delphinus" alt="Delphinus"/></a>
                </h1>
            </div><!-- .branding -->
            <div class="mobile-tool">
                <a id="hamburger-icon" href="#" title="Menu">
                    <span class="hamburger-icon-inner">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </span>
                </a>
                <a href="woocommerce-cart.html" class="mobile-tool-cart">
                    <i class="icon-Shopping-Cart"></i>
                    <span>2</span>
                </a>
            </div>
            <nav class="main-nav" id="nav">
                <ul id="main-nav-tool">
                    <li class="search-action">
                        <a href="#search-fullwidth"><i class="fa fa-search"></i></a>
                    </li>
                </ul><!-- #main-nav-tool -->
                <div class="container">
                    <div class="main-navigation-outer">
                        <ul id="main-navigation">
                            <li class="active">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu-dropdown">
                                    <li><a href="homepage2.html">Homepage 2</a></li>
                                    <li><a href="homepage3.html">Homepage 3</a></li>
                                    <li><a href="homepage4.html">Homepage 4</a></li>
                                    <li><a href="homepage5.html">Homepage 5</a></li>
                                    <li><a href="homepage6.html">Homepage 6</a></li>
                                </ul>
                            </li>
                            <li class="kt-megamenu-item megamenu-width-80">
                                <a href="woocommerce-shop.html">shop styles</a>
                                <div class="kt-megamenu-wrapper megamenu-columns-3 megamenu-position-center">
                                    <ul class="kt-megamenu-ul clearfix">
                                        <li>
                                            <span>Shop Style</span>
                                            <ul class="sub-menu-megamenu">
                                                <li><a href="woocommerce-shop.html">2 Column with sidebar</a></li>
                                                <li><a href="woocommerce-3column-sidebar.html">3 Column with sidebar</a></li>
                                                <li><a href="woocommerce-3column.html">3 Column</a></li>
                                                <li><a href="woocommerce-4column.html">4 Column</a></li>
                                                <li><a href="woocommerce-masonry.html">Masonry Style</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Product Detail</span>
                                            <ul class="sub-menu-megamenu">
                                                <li><a href="woocommerce-product-detailed1.html">Product detail Style 1</a></li>
                                                <li><a href="woocommerce-product-detailed2.html">Product detail Style 2</a></li>
                                                <li><a href="woocommerce-product-detailed3.html">Product detail Style 3</a></li>
                                                <li><span>&nbsp;</span></li>
                                                <li><span>&nbsp;</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Name It</span>
                                            <ul class="sub-menu-megamenu">
                                                <li><a href="woocommerce-checkout.html">Checkout</a></li>
                                                <li><a href="woocommerce-compare.html">Compare</a></li>
                                                <li><a href="woocommerce-myaccount.html">My account</a></li>
                                                <li><a href="woocommerce-cart.html">My cart</a></li>
                                                <li><a href="woocommerce-wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">pages</a>
                                <ul class="sub-menu-dropdown">
                                    <li><a href="pages-about.html">About us</a></li>
                                    <li><a href="pages-contact.html">Contact us</a></li>
                                    <li><a href="blog-gird-3columns.html">Blog</a></li>
                                    <li><a href="blog-singlepost-standard.html">Blog detail</a></li>
                                </ul>
                            </li>
                            <li><a href="#">elements</a>
                                <ul class="sub-menu-dropdown">
                                    <li><a href="shortcode-tabs.html">Tabs</a></li>
                                    <li><a href="shortcode-banner.html">Banner</a></li>
                                    <li><a href="shortcode-messagebox.html">Message Box</a></li>
                                    <li><a href="shortcode-typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="#">features</a></li>


                        </ul><!-- #main-navigation -->        </div>
                </div>
            </nav><!-- .main-nav -->        </div>
    </div><!-- .navbar-container -->
        <nav class="main-nav-mobile" id="nav-mobile">
            <ul class="navigation-mobile">
                <li class="active">
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-dropdown">
                        <li><a href="homepage2.html">Homepage 2</a></li>
                        <li><a href="homepage3.html">Homepage 3</a></li>
                        <li><a href="homepage4.html">Homepage 4</a></li>
                        <li><a href="homepage5.html">Homepage 5</a></li>
                        <li><a href="homepage6.html">Homepage 6</a></li>
                    </ul>
                </li>
                <li class="kt-megamenu-item megamenu-width-80">
                    <a href="woocommerce-shop.html">shop styles</a>
                    <div class="kt-megamenu-wrapper megamenu-columns-3 megamenu-position-center">
                        <ul class="kt-megamenu-ul clearfix">
                            <li>
                                <span>Shop Style</span>
                                <ul class="sub-menu-megamenu">
                                    <li><a href="woocommerce-shop.html">2 Column with sidebar</a></li>
                                    <li><a href="woocommerce-3column-sidebar.html">3 Column with sidebar</a></li>
                                    <li><a href="woocommerce-3column.html">3 Column</a></li>
                                    <li><a href="woocommerce-4column.html">4 Column</a></li>
                                    <li><a href="woocommerce-masonry.html">Masonry Style</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>Product Detail</span>
                                <ul class="sub-menu-megamenu">
                                    <li><a href="woocommerce-product-detailed1.html">Product detail Style 1</a></li>
                                    <li><a href="woocommerce-product-detailed2.html">Product detail Style 2</a></li>
                                    <li><a href="woocommerce-product-detailed3.html">Product detail Style 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>Name It</span>
                                <ul class="sub-menu-megamenu">
                                    <li><a href="woocommerce-checkout.html">Checkout</a></li>
                                    <li><a href="woocommerce-compare.html">Compare</a></li>
                                    <li><a href="woocommerce-myaccount.html">My account</a></li>
                                    <li><a href="woocommerce-cart.html">My cart</a></li>
                                    <li><a href="woocommerce-wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">pages</a>
                    <ul class="sub-menu-dropdown">
                        <li><a href="pages-about.html">About us</a></li>
                        <li><a href="pages-contact.html">Contact us</a></li>
                        <li><a href="blog-gird-3columns.html">Blog</a></li>
                        <li><a href="blog-singlepost-standard.html">Blog detail</a></li>
                        <li><a href="#">Look book</a></li>
                    </ul>
                </li>
                <li><a href="#">elements</a>
                    <ul class="sub-menu-dropdown">
                        <li><a href="shortcode-tabs.html">Tabs</a></li>
                        <li><a href="shortcode-banner.html">Banner</a></li>
                        <li><a href="shortcode-messagebox.html">Message Box</a></li>
                        <li><a href="shortcode-typography.html">Typography</a></li>
                    </ul>
                </li>
                <li><a href="#">features</a></li>
                <li>
                    <a href="#">Language: EN</a>
                    <ul class="sub-menu-dropdown">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Frensh</a></li>
                        <li><a href="#">Viet Nam</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Currency: USD</a>
                    <ul class="sub-menu-dropdown">
                        <li><a href="#">EUR</a></li>
                        <li><a href="#">USD</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">login</a>
                </li>
                <li class="wishlist-item">
                    <a href="woocommerce-wishlist.html">wishlist (<span>3</span>)</a>
                </li>
                <li>
                    <form action="#" class="searchform" method="get">
                        <input type="text" name="s" value="" placeholder="Search and hit enter">
                        <button class="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>

            </ul><!-- #main-navigation -->
        </nav><!-- .main-nav-mobile --></header><!-- #header --><div class="page-section no-padding" >
    <div id="rev_slider_2_2" class="rev_slider_wrapper fullwidthbanner-container" data-alias="slide1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.0.6 fullwidth mode -->
        <div id="rev_slider_2" class="rev_slider fullwidthabanner" data-version="5.0.6">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-1" data-transition="notransition" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/slideshow/transparent.png" style='background-color:#f6f6f6' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption"
                         data-x="10"
                         data-y="center" data-voffset=""
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:left;s:500;e:Power2.easeInOut;"
                         data-transform_out="x:left;s:2500;s:2500;"
                         data-start="500"
                         data-responsive_offset="on"
                         style="z-index: 5;"><img src="assets/images/slideshow/chair1.png" alt="" data-ww="430px" data-hh="400px" data-no-retina>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption"
                         data-x="right" data-hoffset="10"
                         data-y="center" data-voffset=""
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:right;s:1000;e:Power2.easeInOut;"
                         data-transform_out="x:right;s:2000;s:2000;"
                         data-start="500"
                         data-responsive_offset="on"
                         style="z-index: 6;"><img src="assets/images/slideshow/chair2.png" alt="" data-ww="430px" data-hh="400px" data-no-retina>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-70"
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:top;s:1500;e:Power2.easeInOut;"
                         data-transform_out="y:top;s:1500;s:1500;"
                         data-start="500"
                         data-responsive_offset="on"
                         style="z-index: 7;"><img src="assets/images/slideshow/collection.png" alt="" data-ww="348px" data-hh="182px" data-no-retina>
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="70"
                         data-width="['355','245']"
                         data-height="['auto','auto']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:bottom;s:2000;e:Power2.easeInOut;"
                         data-transform_out="y:bottom;s:1000;s:1000;"
                         data-start="500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 8; min-width: 355px; max-width: 355px; white-space: normal; font-size: 16px; line-height: 30px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family:Karla;text-align:center;">Without retails shops and middleman, luxury
                        becomes affordable
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="150"
                         data-width="['auto']"
                         data-height="['auto']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"
                         data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);cursor:pointer;"
                         data-transform_in="y:bottom;s:2500;e:Power2.easeInOut;"
                         data-transform_out="y:bottom;s:500;s:500;"
                         data-start="500"
                         data-splitin="none"
                         data-splitout="none"
                         data-actions='[{"event":"click","action":"simplelink","target":"_blank","url":"#"}]'
                         data-responsive_offset="on"
                         data-end="5800"
                         style="z-index: 9; white-space: nowrap; font-size: 14px; letter-spacing: 0.2em; line-height: 17px; font-weight: 800; padding:12px 40px 12px 40px;border:2px solid #000000;outline:none;box-shadow:none;color: #000000;text-transform: uppercase">Shop now
                    </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-6" data-transition="fade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/slideshow/transparent.png" style='background-color:#dadbdd' alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption"
                         data-x="center" data-hoffset=""
                         data-y="bottom" data-voffset=""
                         data-width="['none','none','none','none']"
                         data-height="['none','none','none','none']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:bottom;s:500;e:Power2.easeInOut;"
                         data-transform_out="y:bottom;s:1500;s:1500;"
                         data-start="500"
                         data-responsive_offset="on"
                         data-end="4800"
                         style="z-index: 5;"><img src="assets/images/slideshow/furniture1.png" alt="" data-ww="1513px" data-hh="297px" data-no-retina>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-100"
                         data-width="['auto','auto']"
                         data-height="['auto','auto']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:left;s:1000;e:Power2.easeInOut;"
                         data-transform_out="x:left;s:1000;s:1000;"
                         data-start="500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-end="5300"
                         style="z-index: 6; white-space: nowrap; font-size: 36px; line-height: 36px; font-weight: 700; color: rgba(4, 4, 4, 1.00);font-family:Roboto Slab;letter-spacing:0.4em;">NEW WAY TO DESIGN
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption"
                         data-x="center" data-hoffset=""
                         data-y="center" data-voffset="-20"
                         data-width="['355','355']"
                         data-height="['auto','auto']"
                         data-transform_idle="o:1;"
                         data-transform_in="x:right;s:1500;e:Power2.easeInOut;"
                         data-transform_out="x:right;s:500;s:500;"
                         data-start="500"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-end="5800"
                         style="z-index: 7; min-width: 355px; max-width: 355px; white-space: normal; font-size: 16px; line-height: 30px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family:Karla;text-align:center;">Dephinus with a tool that makes design simple for everyone.
                    </div>
                </li>
            </ul>
        </div><!-- .rev_slider -->
    </div><!-- .rev_slider_wrapper -->
</div><!-- .page-section -->
    <div id="main">

        <div class="page-section">
            <div class="kt-heading-wrapper remove-mar-bottom">
                <div class="kt-heading-divider">
                    <svg version="1.1" x="0px" y="0px"
                     viewBox="349 274.7 1310.8 245.3" style="enable-background:new 349 274.7 1310.8 245.3;" xml:space="preserve">
                <path d="M1222,438.9c-2.7,0-5.4,0-8.1-2.7l-210.8-129.7L792.3,436.2c-5.4,2.7-10.8,2.7-13.5,0L573.3,306.5L365.2,436.2L349,411.9
                    l216.2-132.4c5.4-2.7,10.8-2.7,13.5,0l208.1,127l210.8-129.7c5.4-2.7,10.8-2.7,13.5,0L1222,409.2l208.1-129.7
                    c5.4-2.7,10.8-2.7,13.5,0l216.2,135.1l-13.5,21.7l-208.1-129.7l-208.1,129.7C1227.4,436.2,1224.7,438.9,1222,438.9L1222,438.9z"/>
                    <path d="M1222,520c-2.7,0-5.4,0-8.1-2.7l-210.8-129.7L792.3,517.3c-5.4,2.7-10.8,2.7-13.5,0L573.3,387.6L362.5,517.3L349,493
                    l216.2-132.4c5.4-2.7,10.8-2.7,13.5,0l205.4,129.7L995,360.5c5.4-2.7,10.8-2.7,13.5,0l210.8,129.7l208.1-129.7
                    c5.4-2.7,10.8-2.7,13.5,0l216.2,135.1l-13.5,21.6l-205.4-129.7l-208.1,129.8C1227.4,517.3,1224.7,520,1222,520L1222,520z"/>
                </svg>
                </div>
                <h3 class="kt-heading-title">features Product</h3>
                <div class="kt-heading-subtitle" ><a href="#">see all</a></div>
            </div>

            <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="showcase-carousel">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_1" class="rev_slider fullwidthbanner" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="zoomout" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"   data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" >
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/slideshow/product-featured-1.jpg" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" />
                            <!-- LAYERS -->

                            <div class="tp-caption product-attr"
                                 data-x="center"
                                 data-y="bottom"
                                 data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"woocommerce-product-detailed1.html"}]'
                                 data-transform_in="opacity:0;s:10;s:10;e:Linear.easeNone;"
                                 data-transform_out="opacity:0;s:10;s:20;e:Linear.easeNone;">
                                <h4>Afteroom Chair 1</h4>
                                <div>$340.00</div>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="zoomout" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"   data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" >
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/slideshow/product-featured-3.jpg" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" />
                            <!-- LAYERS -->

                            <div class="tp-caption product-attr"
                                 data-x="center"
                                 data-y="bottom"
                                 data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"woocommerce-product-detailed1.html"}]'
                                 data-transform_in="opacity:0;s:10;s:10;e:Linear.easeNone;"
                                 data-transform_out="opacity:0;s:10;s:10;e:Linear.easeNone;" >
                                <h4>Afteroom Chair 3</h4>
                                <div>$540.00</div>
                            </div>

                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="zoomout" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  >
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/slideshow/product-featured-2.jpg" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" />
                            <!-- LAYERS -->

                            <div class="tp-caption product-attr"
                                 data-x="center"
                                 data-y="bottom"
                                 data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"woocommerce-product-detailed1.html"}]'
                                 data-transform_in="opacity:0;s:10;s:10;e:Linear.easeNone;"
                                 data-transform_out="opacity:10;s:10;s:10;e:Linear.easeNone;">
                                <h4>Afteroom Chair 2</h4>
                                <div>$440.00</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
        </div><!-- .page-section -->



        <div class="page-section no-padding">
            <div class="owl-carousel-kt no-gutters navigation-center-inner no-margin">
                <div class="owl-carousel kt-owl-carousel" data-options='{"pagination": false, "navigation": true, "desktop": 3, "desktopsmall": 2, "tablet" : 2, "mobile" : 1}'>
                    <div class="category-banner">
                        <img src="/640x640" alt="" />
                        <div class="category-banner-content">
                            <h1 class="white">Living room</h1>
                            <ul class="">
                                <li><a href="#">Bed</a> </li>
                                <li><a href="#">Pillow</a></li>
                                <li><a href="#">Lamp</a></li>
                                <li><a href="#">Mattress</a></li>
                                <li><a href="#">Blanket</a></li>
                            </ul>
                            <a href="#" class="btn btn-light-b">Shop now</a>
                        </div>
                    </div>
                    <div class="category-banner">
                        <img src="/640x640" alt="" />
                        <div class="category-banner-content">
                            <h1 class="white">Bed room</h1>
                            <ul class="">
                                <li><a href="#">Bed</a> </li>
                                <li><a href="#">Pillow</a></li>
                                <li><a href="#">Lamp</a></li>
                                <li><a href="#">Mattress</a></li>
                                <li><a href="#">Blanket</a></li>
                            </ul>
                            <a href="#" class="btn btn-light-b">Shop now</a>
                        </div>
                    </div>
                    <div class="category-banner">
                        <img src="/640x640" alt="" />
                        <div class="category-banner-content">
                            <h1 class="white">Living room</h1>
                            <ul class="">
                                <li><a href="#">Bed</a> </li>
                                <li><a href="#">Pillow</a></li>
                                <li><a href="#">Lamp</a></li>
                                <li><a href="#">Mattress</a></li>
                                <li><a href="#">Blanket</a></li>
                            </ul>
                            <a href="#" class="btn btn-light-b">Shop now</a>
                        </div>
                    </div>
                    <div class="category-banner">
                        <img src="/640x640" alt="" />
                        <div class="category-banner-content">
                            <h1 class="white">dining room</h1>
                            <ul class="">
                                <li><a href="#">Bed</a> </li>
                                <li><a href="#">Pillow</a></li>
                                <li><a href="#">Lamp</a></li>
                                <li><a href="#">Mattress</a></li>
                                <li><a href="#">Blanket</a></li>
                            </ul>
                            <a href="#" class="btn btn-light-b">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="page-section">
            <div class="container">

                <div class="kt-heading-wrapper">
                    <div class="kt-heading-divider">
                        <svg version="1.1" x="0px" y="0px"
                         viewBox="349 274.7 1310.8 245.3" style="enable-background:new 349 274.7 1310.8 245.3;" xml:space="preserve">
                <path d="M1222,438.9c-2.7,0-5.4,0-8.1-2.7l-210.8-129.7L792.3,436.2c-5.4,2.7-10.8,2.7-13.5,0L573.3,306.5L365.2,436.2L349,411.9
                    l216.2-132.4c5.4-2.7,10.8-2.7,13.5,0l208.1,127l210.8-129.7c5.4-2.7,10.8-2.7,13.5,0L1222,409.2l208.1-129.7
                    c5.4-2.7,10.8-2.7,13.5,0l216.2,135.1l-13.5,21.7l-208.1-129.7l-208.1,129.7C1227.4,436.2,1224.7,438.9,1222,438.9L1222,438.9z"/>
                        <path d="M1222,520c-2.7,0-5.4,0-8.1-2.7l-210.8-129.7L792.3,517.3c-5.4,2.7-10.8,2.7-13.5,0L573.3,387.6L362.5,517.3L349,493
                    l216.2-132.4c5.4-2.7,10.8-2.7,13.5,0l205.4,129.7L995,360.5c5.4-2.7,10.8-2.7,13.5,0l210.8,129.7l208.1-129.7
                    c5.4-2.7,10.8-2.7,13.5,0l216.2,135.1l-13.5,21.6l-205.4-129.7l-208.1,129.8C1227.4,517.3,1224.7,520,1222,520L1222,520z"/>
                </svg>
                    </div>
                    <h3 class="kt-heading-title">LASTEST PRODUCT</h3>
                    <div class="kt-heading-subtitle"><a href="#">see all</a></div>
                </div>

                <div class="products">

                    <div class="owl-carousel-kt remove-mar-bottom navigation-center">
                        <div class="owl-carousel kt-owl-carousel" data-options='{"pagination": false, "navigation": true, "desktop": 4, "desktopsmall" : 3, "tablet" : 2, "mobile" : 1}'>
                            <div class="product wow fadeInUp" data-wow-delay="100ms">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.html" class="product-thumbnail">
                                        <img class="first-img" src="/600x600" alt=""/>
                                        <img class="second-img" src="/600x600" alt=""/>
                                    </a>

                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.html">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                            <div class="product wow fadeInUp" data-wow-delay="200ms">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.html" class="product-thumbnail">
                                        <img class="first-img" src="/600x600" alt=""/>
                                        <img class="second-img" src="/600x600" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.html">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>

                            <div class="product wow fadeInUp" data-wow-delay="300ms">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.html" class="product-thumbnail">
                                        <img class="first-img" src="/600x600" alt=""/>
                                        <img class="second-img" src="/600x600" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.html">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                            <div class="product wow fadeInUp" data-wow-delay="400ms">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.html" class="product-thumbnail">
                                        <img class="first-img" src="/600x600" alt=""/>
                                        <img class="second-img" src="/600x600" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.html">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>

                            <div class="product wow fadeInUp" data-wow-delay="500ms">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.html" class="product-thumbnail">
                                        <img class="first-img" src="/600x600" alt=""/>
                                        <img class="second-img" src="/600x600" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.html">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                            <div class="product wow fadeInUp" data-wow-delay="600ms">
                                <div class="product-content">
                                    <a href="woocommerce-product-detailed1.html" class="product-thumbnail">
                                        <img class="first-img" src="/600x600" alt=""/>
                                        <img class="second-img" src="/600x600" alt=""/>
                                    </a>
                                    <div class="product-over-tool">
                                        <a href="#" class="add_to_wishlist" data-toggle="tooltip"  data-placement="top" title="Add to wishlist"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="add_to_compare" data-toggle="tooltip"  data-placement="top" title="Add to compare"><i class="fa fa-exchange"></i></a>
                                        <a href="#" class="quickview" data-toggle="tooltip"  data-placement="top" title="Quick view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-over-add">
                                        <a href="#" class="btn btn-addtocart">add to cart</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="woocommerce-product-detailed1.html">JWDA Concrete Lamp</a>
                                </h3>
                                <div class="product-price">$340.00</div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>



        <div class="page-section pad-xlg bg-dark-alfa-40 parallax-1" style="background-image: url('/2500x1600') ">
            <div class="page-section-inner">
                <div class="container">
                    <h2 class="text-center white no-margin">BY US, BY HANDS AT OUR Delphinus STUDIO.</h2>
                </div>
            </div>
        </div>



        <div class="page-section pad-bottom-35">
            <div class="container">
                <div class="kt-heading-wrapper">
                    <div class="kt-heading-divider">
                        <svg version="1.1" x="0px" y="0px"
                         viewBox="349 274.7 1310.8 245.3" style="enable-background:new 349 274.7 1310.8 245.3;" xml:space="preserve">
                <path d="M1222,438.9c-2.7,0-5.4,0-8.1-2.7l-210.8-129.7L792.3,436.2c-5.4,2.7-10.8,2.7-13.5,0L573.3,306.5L365.2,436.2L349,411.9
                    l216.2-132.4c5.4-2.7,10.8-2.7,13.5,0l208.1,127l210.8-129.7c5.4-2.7,10.8-2.7,13.5,0L1222,409.2l208.1-129.7
                    c5.4-2.7,10.8-2.7,13.5,0l216.2,135.1l-13.5,21.7l-208.1-129.7l-208.1,129.7C1227.4,436.2,1224.7,438.9,1222,438.9L1222,438.9z"/>
                        <path d="M1222,520c-2.7,0-5.4,0-8.1-2.7l-210.8-129.7L792.3,517.3c-5.4,2.7-10.8,2.7-13.5,0L573.3,387.6L362.5,517.3L349,493
                    l216.2-132.4c5.4-2.7,10.8-2.7,13.5,0l205.4,129.7L995,360.5c5.4-2.7,10.8-2.7,13.5,0l210.8,129.7l208.1-129.7
                    c5.4-2.7,10.8-2.7,13.5,0l216.2,135.1l-13.5,21.6l-205.4-129.7l-208.1,129.8C1227.4,517.3,1224.7,520,1222,520L1222,520z"/>
                </svg>
                    </div>
                    <h3 class="kt-heading-title">LASTEST from blog</h3>
                    <div class="kt-heading-subtitle"><a href="#">see all</a></div>
                </div>

                <div class="blog-posts">
                    <div class="row multi-columns-row">
                        <div class="blog-post col-lg-4 col-md-4 col-sm-6">
                            <a href="blog-singlepost-standard.html" class="blog-post-thumbnail">
                                <img src="/640x440" alt=""/>
                            </a>
                            <h4 class="blog-post-title">
                                <a href="blog-singlepost-standard.html"> The Best Way to Clean Your Pillows</a>
                            </h4>
                            <div class="blog-post-meta">
                                <span class="author vcard">By: <a href="#">Steven Bradley</a></span>
                                <span class="comments-link"><a href="#">3 Comments</a></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscinp ...</p>
                        </div>

                        <div class="blog-post col-lg-4 col-md-4 col-sm-6">
                            <a href="blog-singlepost-standard.html" class="blog-post-thumbnail">
                                <img src="/640x440" alt=""/>
                            </a>
                            <h4 class="blog-post-title">
                                <a href="blog-singlepost-standard.html">17 Small Space Decorating Tricks ...</a>
                            </h4>
                            <div class="blog-post-meta">
                                <span class="author vcard">By: <a href="#">Steven Bradley</a></span>
                                <span class="comments-link"><a href="#">3 Comments</a></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscinp ...</p>
                        </div>

                        <div class="blog-post col-lg-4 col-md-4 col-sm-6">
                            <a href="blog-singlepost-standard.html" class="blog-post-thumbnail">
                                <img src="/640x440" alt=""/>
                            </a>
                            <h4 class="blog-post-title">
                                <a href="blog-singlepost-standard.html">The Best Bathrooms of 2014</a>
                            </h4>
                            <div class="blog-post-meta">
                                <span class="author vcard">By: <a href="#">Steven Bradley</a></span>
                                <span class="comments-link"><a href="#">3 Comments</a></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscinp ...</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="page-section no-padding">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="banner banner-dark no-margin">
                        <img src="/960x572" alt=""/>
                        <div class="banner-content">
                            <h3 class="white">20% Sale on all Product</h3>
                        </div>
                        <a class="banner-link" href="#"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner banner-dark no-margin">
                        <img src="/960x572" alt="" />
                        <div class="banner-content">
                            <h3 class="white">new collection, new sale</h3>
                        </div>
                        <a class="banner-link" href="#"></a>
                    </div>
                </div>
            </div>
        </div>



    </div><!-- #main -->


    <div id="footer">

        <footer id="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="flip-box">
                            <div class="flip-box-before">free shipping</div>
                            <div class="flip-box-after">on all orders over $100</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="flip-box">
                            <div class="flip-box-before">free return</div>
                            <div class="flip-box-after">free 90 days return</div>
                        </div>
                    </div>
                </div>
            </div><!-- .container -->
        </footer>


        <footer id="footer-area" class="no-padding">
            <div class="row equal_height">
                <div class="col-lg-8 col-md-12">
                    <div class="footer-area-inner">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="widget-container widget_nav_menu">
                                    <h3 class="widget-title">infomation</h3>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Store</a></li>
                                        <li class="nav-copyright">&copy; 2015 Dephinus</li>
                                    </ul>
                                </div><!-- .widget-container -->
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="widget-container widget_nav_menu">
                                    <h3 class="widget-title">collections</h3>
                                    <ul>
                                        <li><a href="#">Living Room</a></li>
                                        <li><a href="#">Bathroom</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Bed Room</a></li>
                                        <li><a href="#">Garden</a></li>
                                    </ul>
                                </div><!-- .widget-container -->
                            </div>

                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="widget-container widget_nav_menu">
                                    <h3 class="widget-title">newletters</h3>
                                    <form action="#" method="get" class="newsletters-form style2">
                                        <input type="email" placeholder="Enter your email address"/>
                                        <button class="submit"><i class="icon-Right-3"></i></button>
                                    </form>
                                </div><!-- .widget-container -->
                                <div class="widget-container mar-top-60">
                                    <ul class="social-nav">
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a> </li>
                                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-area-right">
                    <div class="widget-container widget-hover-content no-margin">
                        <h3 class="widget-title">The Story</h3>
                        <div class="widget-hover-element">
                            <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lectus a lorem efficitur dapibus. Integer ac pretium ipsum. Quisque viverra, magna in convallis consequat, ante enim finibus dolor, vitae fermentum mi nisi non libero. In id leo ut purus laoreet venenatis nec maximus sapien.</p>
                        </div>
                    </div>
                </div><!-- .footer-area-right -->

            </div>
        </footer><!-- #footer-area -->
    </div><!-- #footer -->

</div><!-- #page -->

<!-- JS -->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<!-- Javascript Page Loader-->
<script type="text/javascript" src="assets/js/pace.min.js" data-pace-options='{ "ajax": false }'></script>
<script type="text/javascript" src="assets/js/page-loading.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/plugins.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/libs/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">
    var tpj = jQuery;

    var revapi30;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1");
        } else {
            tpj("#rev_slider_1").show().revolution({
                sliderType:"carousel",
                jsFileLocation:"assets/libs/revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:1000,
                carousel: {
                    maxRotation: 0,
                    minScale: 65,
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: -50,
                    vary_fade: "on",
                    stretch: "off"
                },
                gridwidth:450,
                gridheight: 540,
                stopAfterLoops:0,
                stopAtSlide:1,
                disableProgressBar:"on"
            });
        }

        if (tpj("#rev_slider_2").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_2");
        } else {
            $("#rev_slider_2").show().revolution({
                sliderType: "standard",
                jsFileLocation: "assets/libs/revolution/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 6000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "metis",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    }
                    ,
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "ares",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 10,
                        tmp: '<span class="tp-bullet-inner"></span>'
                    }
                },
                gridwidth: 1290,
                gridheight: 745,
                lazyType: "none",
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false
                }
            });
        }


    }); /*ready*/

</script>
<!-- Javascript Main File -->
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>