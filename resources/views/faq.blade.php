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
                                    <li><a style="color:#29b2fe" href="{{url('/faq')}}">faqs</a></li>
                                    <li><a href="{{url('/privacy-policy')}}">politique de confidentialité</a></li>
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
                                            <li><a href="{{ url('/login') }}">Mon Accueil</a></li>
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
                    <h2>faq</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">accueil</a></li>
                        <li class="active">faqs</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of FAQ Section ===== -->
    <section class="ptb80" id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- Start of First Row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="uppercase">Questions fréquemment posées</h3>
                            <input type="text" class="live-search-box form-control mt20" placeholder="Recherchez vos questions ici.">
                        </div>
                    </div>
                    <!-- End of First Row -->



                    <!-- Start of Second Row -->
                    <div class="row mt40">

                        <!-- Start of Topic 1 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="1. comment fonctionne le cloudify?">. Comment fonctionne E RECRUTEMENT?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 1 -->

                        <!-- Start of Topic 2 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="2. fonctionne-t-il sur tous les appareils?">2. Comment puis-je m'inscrire?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s'asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 2 -->

                        <!-- Start of Topic 3 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="3. Où puis-je acheter cloudify?">3. Comment puis-je soumettre mon CV?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 3 -->

                        <!-- Start of Topic 4 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="4. Comment puis-je héberger mon site Web sur cloudify?">4. Comment puis-je publier un travail?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 4 -->

                        <!-- Start of Topic 5 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="5. pouvez-vous concevoir mon site web?">5. Does it work on all devices?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 5 -->

                        <!-- Start of Topic 6 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="6. Puis-je acheter un domaine sur cloudify?">5. Est-ce que cela fonctionne sur tous les appareils?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 6 -->

                        <!-- Start of Topic 7 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="7. comment puis-je transférer mon site sur cloudify?">7. Avez-vous une application E RECRUTEMRNT?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 7 -->

                        <!-- Start of Topic 8 -->
                        <div class="col-md-12 topic">
                            <!-- Question -->
                            <div class="open">
                                <h6 class="question" data-search-term="8. comment sauvegarder mon site web?">8. Puis-je travailler à la maison?</h6>
                                <i class="fa fa-angle-down hidden-xs"></i>
                            </div>

                            <!-- Answer -->
                            <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- End of Topic 8 -->

                    </div>
                    <!-- End of Second Row -->

                </div>
            </div>
        </div>
    </section>
    <!-- ===== End of FAQ Section ===== -->


@endsection