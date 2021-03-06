<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title></title>

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
<!-- #search-fullwidth -->

<div id="page">
    <!-- header-full-center -->
    <header id="header" class="header-shadow header-full-center">
      <div class="navbar-container sticky-header">
        <div class="navbar-container-inner clearfix">
            <div class="branding">
                <h1 class="logo">
                    <a href="index.html"><img src="assets/images/logo.png" title="D" alt="Delphinus"/></a>
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
                <!-- #main-nav-tool -->
                <div class="container">
                    <div class="main-navigation-outer">
                        <ul id="main-navigation">
                            <li class="active">
                                <a href="index.html">首页</a>                              
                            </li>
             
                            <li>
                                <a href="teachers.html">匠人传道</a>                                
                            </li>
                            <li>
                            	<a href="lessons.html">体验授业</a>                                
                            </li>


                        </ul><!-- #main-navigation -->        </div>
                </div>
            </nav><!-- .main-nav -->        </div>
    </div><!-- .navbar-container -->
        <nav class="main-nav-mobile" id="nav-mobile">
            <ul class="navigation-mobile">
                <li class="active">
                    <a href="index.html">首页</a>
                </li>                
                <li>
                    <a href="teachers.html">匠人传道</a>                                
                </li>
                <li>
                	<a href="lessons.html">体验授业</a>                                
                </li>

            </ul><!-- #main-navigation -->
        </nav><!-- .main-nav-mobile --></header><!-- #header -->
        <!-- .page-section -->
    <div id="main">

        <div class="page-section pad-xlg bg-dark-alfa-40 parallax-1" style="background-image: url('/assets/images/2500x1578.jpg') ">
            <div class="page-section-inner">
                <div class="container">
                    <h2 class="text-center white">这里放大图</h2>
                </div>
            </div>
        </div>



    </div><!-- #main -->


    <!-- #footer -->

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