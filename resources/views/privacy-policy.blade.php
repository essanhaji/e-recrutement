@extends('layouts.master')

@section('body')


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
                            <li class="dropdown simple-menu active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">voir plus d{{"'"}}infos<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/about-us')}}">à propos de nous</a></li>
                                    <li><a href="{{url('/contact')}}">contactez nous</a></li>
                                    <li><a href="{{url('/faq')}}">faqs</a></li>
                                    <li><a style="color:#29b2fe" href="{{url('/privacy-policy')}}">politique de confidentialité</a></li>
                                </ul>
                            </li>
                            &nbsp;&nbsp;
                            <!-- Login Menu Item -->

                            @if (Route::has('login'))
                                @if (Auth::check())
                                <li class="dropdown simple-menu">
                                        <a href="" class="dropdown-toggle action" data-toggle="dropdown" role="button" aria-expanded="false" style="; font-size:17px; color:black;"><h>
                                            {{ Auth::user()->name }} 
                                            <span class="caret"></span>
                                        </a>
        
                                        <ul class="dropdown-menu" role="menu">
                                            <il><a href="{{ url('/login') }}">Monaccueil</a></il>
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
                                    <a id="modal_trigger" href="javascript:void(0)" role="button"><i class="fa fa-lock"></i> connecter</a>
                                </li>
                                <li class="menu-item login-btn">
                                    <a id="modal_trigger" href="javascript:void(1)" role="button"><i class="fa fa-sign-in"></i> s{{"'"}}inscrire</a>
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
                    <h2>politique de confidentialité</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">accueil</a></li>
                        <li class="active">politique de confidentialité</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of Main Wrapper Section ===== -->
    <section class="ptb80">
        <div class="container">
            <div class="col-md-12">
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre spécimen de type. </p>
                <h4 class="ptb20">Informations d{{"'"}}identification personnelle</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique. </p>
                <h4 class="ptb20">Non-personal identification information</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique. </p>
                <h4 class="ptb20">Cookies du navigateur Web</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique, demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, y compris des versions de Lorem Ipsum. </p>
                <h4 class="ptb20">Comment nous utilisons les informations collectées</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique. </p>
                <h4 class="ptb20">Sharing your personal information</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique, demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, y compris des versions de Lorem Ipsum. </p>
                <h4 class="ptb20">Sites Web de tiers</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique. </p>
                <h4 class="ptb20">Modifications de cette politique de confidentialité</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre spécimen de type. </p>
                <h4 class="ptb20">Acceptation de nos termes</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles, mais aussi le saut dans la composition électronique, demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la sortie de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, y compris des versions de Lorem Ipsum. </p>
                <h4 class="ptb20">Contactez nous</h4>
                <p> Lorem Ipsum est simplement un faux texte de l{{"'"}}industrie de l{{"'"}}imprimerie et de la composition. Lorem Ipsum a été le texte factice standard de l{{"'"}}industrie depuis les années 1500, quand une imprimante inconnue a pris une galère de type et l{{"'"}}a brouillée pour faire un livre de spécimen de type. Il a survécu non seulement cinq siècles. </p>
                <ul class="nopadding mt20">
                    <li><i class="fa fa-map-marker"></i>   Ville Casablanca, MAROC </li>
                    <li class="pt10"><i class="fa fa-phone"></i>   (+212) 641966888</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ===== End of Main Wrapper Section ===== -->



@endsection