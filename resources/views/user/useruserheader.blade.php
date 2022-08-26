<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>e-turf user</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="/regform/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <header id="header" class="header header-hide">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="/indexpage" class="scrollto"><span>e</span>-turf</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="/indexpage">Home</a></li>
                    <li class="menu-has-children"><a href="/viewturfuser">turfs</a>
                    </li>
                    <li class="menu-has-children"><a href="/viewbookinguser">View Bookings</a>
                    </li>
                    <li><a href="/viewgalleryuser">gallery</a></li>
                    <li><a href="/indexpage">Log Out</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Hero Section
  ============================-->
    <section id="hero" class="wow fadeIn">
        <div class="hero-container">
            <h1>Welcome to eturf</h1>
            <h2>play with us everyday</h2>
            <img src="/img/turf7.jpg" alt="Hero Imgs" height="400px" width="800px">
            <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
            <div class="btns">
                <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
                <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
                <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
            </div>
        </div>
    </section><!-- #hero -->

    @yield('useruser')

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-4">
                    <div class="footer-logo">

                        <a class="navbar-brand" href="#">eturf</a>
                        <p>book your play</p>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="list-menu">

                        <h4>Support</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">faq</a></li>
                            <li><a href="#">Editor help</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="list-menu">

                        <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-12 col-lg-4">

                    <div class="row justify-content-center ">


                        <div class="info text-light">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p class="text-light">near stadium <br>palarivattom</p>
                            </div>

                            <div class="email">
                                <i class="fa fa-envelope"></i>
                                <p class="text-light">info@example.com</p>
                            </div>

                            <div>
                                <i class="fa fa-phone"></i>
                                <p class="text-light">+1 5589 55488 55s</p>
                            </div>

                            <div class="social-links">
                                <a href="#" class="twitter text-light text-light pr-2"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook text-light pr-2"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram text-light pr-2"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="google-plus text-light pr-2"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="linkedin text-light pr-2"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <p>&copy; Copyrights eturf. All rights reserved.</p>
                <div class="credits">
                    <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          -->
                </div>
            </div>
        </div>
    </footer>



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/superfish/hoverIntent.js"></script>
    <script src="/lib/superfish/superfish.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/modal-video/js/modal-video.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="/js/main.js"></script>

</body>

</html>