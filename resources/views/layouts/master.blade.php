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


@yield('body')

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



        <!-- ===== Start of Login Pop Up div ===== -->
        <div class="cd-user-modal">
            <!-- this is the entire modal form, including the background -->
            <div class="cd-user-modal-container"  style="margin-top: -1px;">
                <!-- this is the container wrapper -->
                <ul class="cd-switcher">
                    <li><a href="#0"> se connecter</a></li>
                    <li><a href="#1"> s inscrire</a></li>
                </ul>
                
                <div id="cd-login">
                    <!-- log in form -->
                    <form class="cd-form"  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <p class="fieldset form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="image-replace cd-email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="email" type="email" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </p>
                        <p class="fieldset form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="image-replace cd-password" for="signin-password">Password</label>
                            <input class="full-width has-padding has-border" id="password" name="password" type="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </p>
                        <p class="fieldset">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember-me">Souvenez-vous de moi</label>
                        </p>
                        <p class="fieldset">
                            <button type="submit" class="btn btn-blue" style="background-color: #29b2fe">
                                S{{ "'" }}identifier
                        </button>
                        </p>
                    </form>
                </div>
                <!-- cd-login -->



                <div id="cd-signup">
                    <!-- sign up form -->
                    <form class="cd-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <p class="fieldset form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input class="full-width has-padding has-border" placeholder="Nom Complet" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding has-border form-group{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="E-mail" id="email " type="email" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </p>
                        <p class="fieldset form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="full-width has-padding has-border" placeholder="Mot de Passe" id="" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding has-border" placeholder="conferme Mot de Passe" input id="password-confirm" type="password" name="password_confirmation" required>
                        </p>
                       <p>
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
                                      
                                      <p class="fieldset">
                                      <input type="checkbox" id="accept-terms" name="agree" required>
                                      <label for="accept-terms">I agree to the <a href="{{ url('/privacy-policy') }}">Terms</a></label>
                                  </p>
                        </center>
                        </p>
                        <p class="fieldset">
                            <button class="btn btn-blue" style="background-color: #29b2fe" type="submit" value="Create account">Create Account</button>
                        </p>
                    </form>
                </div>
                <!-- cd-signup -->
            </div>
            <!-- cd-user-modal-container -->
        </div>
        <!-- cd-user-modal -->
        <!-- ===== End of Login Pop Up div ===== -->




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