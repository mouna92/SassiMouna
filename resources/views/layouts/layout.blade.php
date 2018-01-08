<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Soft-Tect Free Landing Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    @yield('css-section')

</head>

<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<!-- Sections -->
<section id="social" class="social">
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="social-wrapper">
                <div class="col-md-6">
                    <div class="social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-contact">
                        <a href="#"><i class="fa fa-phone"></i>+011 54925849</a>
                        <a href="#"><i class="fa fa-envelope"></i>contact@softech.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
</section>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="Logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#features">PRODUCT</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#price">PRICE</a></li>
                <li><a href="#business">Business</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="login"><a href="#">Sign In</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<body>
@if(Auth::guest())
@else
    @include('layouts.navbar_auth')
@endif
<br><br><br><br><br><br>

@yield('content')


<section id="footer-menu" class="sections footer-menu">
    <div class="container">
        <div class="row">
            <div class="footer-menu-wrapper">

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">
                            <h5>Quick Links</h5>
                            <ul>
                                <li>POWER BI DESKTOP</li>
                                <li>MOBILE</li>
                                <li>SEE ALL DOWNLOADS</li>
                                <li>POWER BI DESKTOP</li>
                                <li>MOBILE</li>
                                <li>SEE ALL DOWNLOADS</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">
                            <h5>Legal</h5>
                            <ul>
                                <li>PRIVACY & COOKIES</li>
                                <li>TERMS OF USE</li>
                                <li>TRADEMARKS</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="menu-item">
                            <h5>Information</h5>
                            <ul>
                                <li>SUPPORT</li>
                                <li>DEVELOPERS</li>
                                <li>BLOG</li>
                                <li>NEWSLETTER</li>
                                <li>PYRAMID ANALYTICS</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="menu-item">
                        <h5>Newsletter</h5>
                        <p>Insights await in your company's data. Bring them into focus with BlueLance.</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <input type="submit" class="form-control" value="Use It Free">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!--Footer-->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-wrapper">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-brand">
                        <img src="assets/images/logo.png" alt="logo" />
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>


<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>


<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/main.js"></script>
@yield('scripts')
</body>
</html>
