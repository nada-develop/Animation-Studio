<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <title>@yield('page-title') - Animation Studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desart Creative Web Design Studio" />
    <meta name="author" content="George_fx">
    <meta name="keywords" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/ico" href="{{ asset('front/img/favicon.ico') }}">
	<!-- Animation CSS File -->
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
	<link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <!-- Material Design Iconic -->
    <link rel="stylesheet" href="{{ asset('front/css/material-design-iconic-font.min.css') }}">
	<!-- Custom Style -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('front/css/responsive.css') }}" rel="stylesheet">

</head>

<body>

    <!-- PRELOADER -->

    <div id="preloader"></div>

	<!-- Header -->
	<header>
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">
                        <img class="logo" src="{{ asset('front/img/logo.png') }}" alt="Desart">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/portfolio" id="navbarPortfolio" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Portfolio
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarPortfolio">
                                <a class="dropdown-item" href="/portfolio/movies">Movies</a>
                                <a class="dropdown-item" href="/portfolio/series">Series</a>
                                <a class="dropdown-item" href="/portfolio/advertisments">Advertisments</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/award">Awards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contacts</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    @yield('page-content')

    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row justify-content-between align-items-center footer-bottom">
                    <div class="col-6">
                        &copy; Copyright 2019 George_Fx
                    </div>
                    <div class="col-6 ">
                      <ul class="list-footer">
                          <li class="list-footer-item">
                              <a href="" class="list-footer-link">Privacy Policy</a>
                          </li>
                          <li class="list-footer-item">
                            <a href="" class="list-footer-link">Terms and Conditions</a>
                        </li>
                      </ul>
                    </div>
                  </div>
            </div>
        </div>
    </footer>

    <!-- Social Networks Fixed -->
    <ul class="social-networks">
        <li class="social-networks-item">
            <a href="" class="social-networks-link" target="_blank"><i class="zmdi zmdi-facebook"></i> facebook</a>
        </li>
        <li class="social-networks-item">
            <a href="" class="social-networks-link" target="_blank"><i class="zmdi zmdi-linkedin"></i> linkedin</a>
        </li>
        <li class="social-networks-item">
            <a href="" class="social-networks-link" target="_blank"><i class="zmdi zmdi-twitter"></i> twitter</a>
        </li>
    </ul>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">We are the Creative Digital Team</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lM02vNMRRB0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>
    </div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ asset('front/js/jquery.min.js') }}"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset('front/js/popper.min.js') }}"></script>
	<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	<!-- Owl Carousel -->
	<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
	<!-- Plugins -->
    <script src="{{ asset('front/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
	<script src="{{ asset('front/js/plugins.js') }}"></script>
</body>

</html>
