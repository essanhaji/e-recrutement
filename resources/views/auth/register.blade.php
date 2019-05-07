<!DOCTYPE html>

<html lang="fr">


<head>
    <meta charset="UTF-8">

    <!-- Mobile viewport optimized -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- Website Title -->
    <title>E RECRUTEMENT</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('../images/apple-touch-icon.html') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">

    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/responsive.css') }}">

</head>

<body>



<!-- =============== Start of Header 1 Navigation =============== -->
<header class="sticky">

    <nav class="navbar navbar-default navbar-static-top fluid_header centered">
        <div class="container">

            <!-- Logo -->
            <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                <a class="navbar-brand nomargin" href="{{url('/')}}"><img src="images/logo.svg" alt="logo"></a>
                <!-- INSERT YOUR LOGO HERE -->
            </div>

            <!-- ======== Start of Main Menu ======== -->
            <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Basculer la navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Start of Main Nav -->
                <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="main-nav">
                    <ul class="nav navbar-nav pull-right">

                        <!-- Mobile Menu Title -->
                        <li class="mobile-title">
                            <h4>menu principal</h4>
                        </li>

                        <!-- accueil Menu Item -->
                        <li class="simple-menu">
                            <a href="{{url('/')}}" role="button">accueil</a>
                        </li>

                        <!-- pour candidat Menu Item -->
                        <li class="simple-menu">
                            <a href="{{url('/search-jobs')}}" role="button">pour candidat</a>
                        </li>

                        <!-- pour recruteur Menu Item -->
                        <li class="simple-menu">
                            <a href="{{url('/find-candidate')}}" role="button">pour recruteur</a>
                        </li>

                        <!-- info Menu Item -->
                        <li class="dropdown simple-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">voir plus d infos<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/about-us')}}">à propos de nous</a></li>
                                <li><a href="{{url('/contact')}}">contactez nous</a></li>
                                <li><a href="{{url('/faq')}}">faqs</a></li>
                                <li><a href="{{url('/privacy-policy')}}">politique de confidentialité</a></li>
                            </ul>
                        </li>
                        &nbsp;&nbsp;

                        @if (Route::has('login'))
                            @if (Auth::check())
                            <li class="dropdown simple-menu">
                                    <a href="" class="dropdown-toggle action" data-toggle="dropdown" role="button" aria-expanded="false" style="; font-size:17px; color:black;"><h>
                                        {{ Auth::user()->name }} 
                                        <span class="caret"></span>
                                    </a>
    
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"  style="color:red;">
                                                Logout
                                            </a>
    
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                            <!-- Login Menu Item -->
                            <li class="menu-item login-btn">
                                <a id="modal_trigger" href="{{ url('/login') }}" role="button"><i class="fa fa-lock"></i> connecter</a>
                            </li>
                            <li class="menu-item login-btn">
                                <a id="modal_trigger" href="{{ url('/register') }}" role="button"><i class="fa fa-sign-in"></i> s{{"'"}}inscrire</a>
                            </li>
                            @endif
                        @endif


                    </ul>
                </div>
                <!-- End of Main Nav -->
            </div>
            <!-- ======== End of Main Menu ======== -->

        </div>
    </nav>
</header>
<!-- =============== End of Header 1 Navigation =============== -->




    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>register</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">accueil</a></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->




<div class="container">
    <br><br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <center>
                            <br>
                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="type1" value="recruteur">
                                        <label class="form-check-label" for="inlineRadio1">
                                        &nbsp; Recruteur</label>
          
                                        <label style="margin-right: 25px;"></label>
          
                                        <input class="form-check-input" type="radio" name="type" id="type2" value="candidat">
                                        <label class="form-check-label" for="inlineRadio2">&nbsp; Candidat</label>
                                </div>
                            </div>
                                      <br>
                                      <p class="fieldset">
                                      <input type="checkbox" id="accept-terms" name="agree" required>
                                      <label for="accept-terms">I agree to the <a href="{{ url('/privacy-policy') }}">Terms</a></label>
                                  </p><br>
                        </center>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-blue">
                                    Register
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>



<h1><br></h1>

<!-- =============== Start of Footer =============== -->
<footer class="footer4">

    <!-- ===== Start of Footer Information & Links Section ===== -->
    <div class="footer-info ptb80">
        <div class="container">

            <!-- 1st Footer Column -->
            <div class="col-md-8 col-sm-6 col-xs-6 footer-about">

                <!-- Your Logo Here -->
                <a href="{{url('/')}}">
                        <img src="{{ asset('images/logo-white.svg') }}" alt="">
                    </a>

                <!-- Small Description -->
                <p class="pt40">Lorem ipsum dolor sont assis amet, consectetur adipiscing elit. Cras felis metus, porta UT facilisis sed, dicton id dolor. Entier sagittis lacus porttitor excepté commodo dignissim. Curabitur excepté nisi, varius sed venenatis et, vehicula lacinia risus. Fusce ullamcorper lobortis magna UT interdum. Sed id quam Leo auctor iaculis. Nam nec nunc hendrerit, blandit mauris non, posuere dolor.</p>
            </div>



            <!-- 2nd Footer Column -->
            <div class="col-md-4 col-sm-6 col-xs-6 footer-contact">
                <a href="{{url('/contact')}}"><h3>CONTACTEZ-NOUS</h3></a>

                <!-- Info -->
                <ul class="nopadding">
                    <li><i class="fa fa-map-marker"></i>ville Casablanca, maroc</li>
                    <li><i class="fa fa-phone"></i>(+212) 641 966 888</li>
                    <li><i class="fa fa-envelope-o"></i>e-recrutemrnt@gmail.com</li>
                </ul>

            </div>

        </div>
    </div>
    <!-- ===== End of Footer Information & Links Section ===== -->


    <!-- ===== Start of Footer Copyright Section ===== -->
    <div class="copyright ptb40" style="background: #000000">
        <div class="container">

            <div class="col-md-6 col-sm-6 col-xs-12">
                <span>Copyright &copy; <a href="{{url('/')}}">E RECRUTEMENT</a>. Tous les droits sont réservés</span>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start of Social Media Buttons -->
                <ul class="social-btns list-inline text-right">
                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll facebook">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                                <i class="social-btn-roll-icon fa fa-facebook"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll twitter">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                                <i class="social-btn-roll-icon fa fa-twitter"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll google-plus">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                <i class="social-btn-roll-icon fa fa-google-plus"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll instagram">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll linkedin">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                <i class="social-btn-roll-icon fa fa-linkedin"></i>
                            </div>
                        </a>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <a href="#" class="social-btn-roll rss">
                            <div class="social-btn-roll-icons">
                                <i class="social-btn-roll-icon fa fa-rss"></i>
                                <i class="social-btn-roll-icon fa fa-rss"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End of Social Media Buttons -->
            </div>

        </div>
    </div>
</footer>
<!-- ===== End of Footer ===== -->



    <!-- ===== Start of Back to Top Button ===== -->
    <a href="#" class="back-top"><i class="fa fa-chevron-up"></i></a>
    <!-- ===== End of Back to Top Button ===== -->


<!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
<script src="{{ asset('../js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('../js/bootstrap.min.js') }}"></script>
<script src="{{ asset('../js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('../js/swiper.min.js') }}"></script>
<script src="{{ asset('../js/jquery.ajaxchimp.js') }}"></script>
<script src="{{ asset('../js/jquery.countTo.js') }}"></script>
<script src="{{ asset('../js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('../js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('../js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('../js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('../js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('../js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('../js/countdown.js') }}"></script>
<script src="{{ asset('../js/isotope.min.js') }}"></script>
<script src="{{ asset('../js/custom.js') }}"></script>

</body>


</html>
