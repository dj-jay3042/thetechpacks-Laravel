<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>The Tech Packs</title>

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Console Meta Tag -->
    <meta name="google-site-verification" content="tljHlsLs9AToac-ZD01EKZYGziTOfnmTCZy_WyjgzBQ" />

    <!-- Bootstrap-->
    <link rel="stylesheet" href="stylesheet/bootstrap.css">

    <!-- Template Style-->
    <link rel="stylesheet" href="stylesheet/font-awesome.css">
    <link rel="stylesheet" href="stylesheet/owl.theme.default.min.css">
    <link rel="stylesheet" href="stylesheet/owl.carousel.min.css">
    <link rel="stylesheet" href="stylesheet/animate.css">
    <link rel="stylesheet" href="stylesheet/icomoon.css">
    <link rel="stylesheet" href="stylesheet/jquery-fancybox.css">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/shortcodes.css">
    <link rel="stylesheet" href="stylesheet/responsive.css">
    <link rel="stylesheet" href="stylesheet/flexslider.css">
    <link rel="stylesheet" href="rev-slider/css/layers.css">
    <link rel="stylesheet" href="rev-slider/css/navigation.css">
    <link rel="stylesheet" href="rev-slider/css/settings.css">

    <link href="icon/favicon.ico" rel="shortcut icon">
</head>

<body class="counter-scroll">
    <div id="loading-overlay">
        <div class="loader"></div>
    </div><!-- loading -->
    <div class="top-bar top-bar-type1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 d-lg-flex align-items-center">
                    <ul class="flat-information flat-information-type1">
                        <li class="phone"><a href="tel:+919664788574" title="Phone">+91 96647 88574</a></li>
                        <li class="email"><a href="https://mail.google.com/mail/u/0/?fs=1&to=info@thetechpacks.com&tf=cm" title="Email">info@thetechpacks.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-12 d-flex justify-content-md-end justify-content-center">
                    <div id="quik-search-btn" class="show-search">
                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                    <div class="dlab-quik-search">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control"
                                placeholder="Type to search">
                            <span id="quik-search-remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- top-bar -->
    <header id="header" class="header header-type1 bg-header-s1 bg-color">
        <div class="container">
            <div class="flex-header d-flex">
                <div id="logo" class="logo d-flex align-items-center justify-content-start">
                    <a href="/" title="Logo"><img src="images/logo/01.png" data-width="168" data-height="38"
                            alt="images" data-retina="images/logo/01@2x.png"></a>
                </div>
                <div class="content-menu d-flex align-items-center justify-content-end">
                    <div class="nav-wrap">
                        <div class="btn-menu"><span></span></div>
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li>
                                    <a href="/" class="@yield('home')">Home</a>
                                </li>
                                <li>
                                    <a href="/services" class="@yield('services')">IT Services</a>
                                </li>
                                <li>
                                    <a href="/case-study" class="@yield('case-study')">Case study</a>
                                </li>
                                <li>
                                    <a href="/blogs" class="@yield('blog')">Blog</a>
                                </li>
                                <li>
                                    <a href="/about" class="@yield('about')">About</a>
                                </li>
                                <li>
                                    <a href="/connect" class="@yield('contact')">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- header -->

    @yield('main')

    <footer id="footer" class="footer footer-bg-3">
        <div class="overlay"></div>
        <div id="footer-widget" class="footer-widget-type2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-text">
                            <div class="logo"><img src="images/logo/02.png" alt="images"></div>
                            <p>
                                Ut enim ad minim veniam, quis nostrud commodo consequat. Duis aute irure proident, sunt
                                in culpa.
                            </p>
                            <div class="socials-list">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="mg-widget-mobi kcl-widget2">
                            <h3 class="widget widget-title">All IT Services</h3>
                            <div class="widget-services d-sm-flex">
                                <ul class="one-half first">
                                    <li><a href="#">Managed IT</a></li>
                                    <li><a href="#">IT Support</a></li>
                                    <li><a href="#">IT Consultancy</a></li>
                                    <li><a href="#">Cloud Computing</a></li>
                                    <li><a href="#">Cyber Security</a></li>
                                    <li><a href="#">Custom Software</a></li>
                                </ul>
                                <ul class="one-half second">
                                    <li><a href="#">Banking</a></li>
                                    <li><a href="#">Capital Markets</a></li>
                                    <li><a href="#">Enter Technology</a></li>
                                    <li><a href="#">Manufacturing</a></li>
                                    <li><a href="#">Healthcare</a></li>
                                    <li><a href="#">Higher Education</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="mg-widget-mobi kcl-widget">
                            <h3 class="widget widget-title">Lastest News</h3>
                            <div class="widget-latest-news">
                                <ul>
                                    <li>
                                        <div class="thumb-image">
                                            <img src="images/footer/01.jpg" alt="images">
                                        </div>
                                        <div class="thumb-content">
                                            <h4 class="thumb-title"><a href="#">Improving lives technology
                                                    lighthouse project</a></h4>
                                            <p class="thumb-day">May 25, 2020</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb-image">
                                            <img src="images/footer/02.jpg" alt="images">
                                        </div>
                                        <div class="thumb-content">
                                            <h4 class="thumb-title"><a href="#">Improving lives technology
                                                    lighthouse project</a></h4>
                                            <p class="thumb-day">May 25, 2020</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb-image">
                                            <img src="images/footer/03.jpg" alt="images">
                                        </div>
                                        <div class="thumb-content">
                                            <h4 class="thumb-title"><a href="#">Improving lives technology
                                                    lighthouse project</a></h4>
                                            <p class="thumb-day">May 25, 2020</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom" class="bottom-type3 position-relative">
            <div class="container">
                <div class="bottom-wrap text-center">
                    <div id="copyright">
                        <a href="/">Copyright © {{ date("Y") }} The Tech Packs.</a><span class="license"> All Rights Reserved</span><br>
                        <span class="license">Designed & Developed By</span><a href="https://www.dj-jay.in"> Jay Chauhan</a>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class="show"></a>
    </footer><!-- footer -->

    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/parallax.js"></script>
    <script src="javascript/plugins.js"></script>
    <script src="javascript/jquery-ui.js"></script>
    <script src="javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvgMzMavm0loFdwqNrzzVh42X_-lDZ3w"></script>
    <script src="javascript/jquery-isotope.js"></script>
    <script src="javascript/owl.carousel.min.js"></script>
    <script src="javascript/equalize.min.js"></script>
    <script src="javascript/jquery-fancybox.js"></script>
    <script src="javascript/jquery-countTo.js"></script>
    <script src="javascript/flex-slider.min.js"></script>
    <script src="javascript/wow.min.js"></script>
    <script src="javascript/jquery-validate.js"></script>
    <script src="javascript/main.js"></script>

    <!-- slider -->
    <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="javascript/rev-slider.js"></script>

    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.actions.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.carousel.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.kenburn.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.layeranimation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.migration.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.navigation.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.parallax.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.slideanims.min.js"></script>
    <script src="rev-slider/js/extensions/extensionsrevolution.extension.video.min.js"></script>
</body>

</html>
