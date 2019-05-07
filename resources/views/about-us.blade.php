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
                                    <li><a style="color:#29b2fe" href="{{url('/about-us')}}">à propos de nous</a></li>
                                    <li><a href="{{url('/contact')}}">contactez nous</a></li>
                                    <li><a href="{{url('/faq')}}">faqs</a></li>
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
                    <h2>à propos de nous</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">accueil</a></li>
                        <li class="active">à propos de nous</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of About Us Section ===== -->
    <section class="about-us ptb80">
        <div class="container">
            <div class="row">

                <!-- Start of First Column -->
                <div class="col-md-6 col-xs-12">
                    <h3 class="text-blue">à propos de E RECRUTEMENT consulting</h3>
                    <p class="pt30">Nos coachs professionnels certifiés. Ils ont des expériences de plus de 8 ans de entrepreneuriat à l’enseignement. Ils se spécialisent dans la formation, l’animation d’équipes, la conduite de projets, le développement de partenariats, la maîtrise des entretiens, l’assimilation du management transversal… Leurs compétences diverses leur permettent de chercher en chacun les caractéristiques de sa singularité et de les mettre en relief pour l’aider à avancer, transversal… Leurs compétences diverses leur permettent de chercher en chacun les caractéristiques de sa singularité et de les mettre en relief pour l’aider à avancer, coachs professionnels certifiés. Ils ont des expériences de plus de 8 ans.</p>

                </div>
                <!-- End of First Column -->

                <!-- Start of Second Column -->
                <div class="col-md-6 col-xs-12 about-video">
                    <!-- Vimeo Video -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/176916362?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <!-- End of Second Column -->

            </div>
        </div>
    </section>
    <!-- ===== End of About Us Section ===== -->





    <!-- ===== Start of About Process Section ===== -->
    <section class="about-process ptb80">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Comment ça marche</h2>
                    </div>
                </div>

                <!-- Start of First Column -->
                <div class="col-md-4 col-xs-12 text-center">
                    <div class="process-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>

                    <h5 class="uppercase text-blue pt40">étape 1</h5>
                    <h3 class="pb20">Registre</h3>
                    <p>Commencez par créer un compte sur notre plate-forme génial</p>
                </div>
                <!-- End of First Column -->


                <!-- Start of Second Column -->
                <div class="col-md-4 col-xs-12 text-center">
                    <div class="process-icon">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                    </div>

                    <h5 class="uppercase text-blue pt40">étape 2</h5>
                    <h3 class="pb20">Soumettre CV</h3>
                    <p>Remplissez nos formulaires et soumettez votre CV tout de suite</p>
                </div>
                <!-- End of Second Column -->


                <!-- Start of Third Column -->
                <div class="col-md-4 col-xs-12 text-center">
                    <div class="process-icon">
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </div>

                    <h5 class="uppercase text-blue pt40">étape 3</h5>
                    <h3 class="pb20">Commencer à travailler</h3>
                    <p>Commencez votre nouvelle carrière en travaillant</p>
                </div>
                <!-- End of Third Column -->

            </div>
        </div>
    </section>
    <!-- ===== End of About Process Section ===== -->





    <!-- ===== Start of FAQ Section ===== -->
    <section class="ptb80" id="faq-page">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Questions fréquemment posées</h2>
                    </div>
                </div>

                <!-- Start of Topic 1 -->
                <div class="col-md-12 topic">
                    <!-- Question -->
                    <div class="open">
                        <h6 class="question" data-search-term="1. how does cloudify work?">1. Comment fonctionne E RECRUTEMENT consulting?</h6>
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
                        <h6 class="question" data-search-term="2. does it work on all devices?">2. Comment puis-je m{{"'"}}inscrire?</h6>
                        <i class="fa fa-angle-down hidden-xs"></i>
                    </div>

                    <!-- Answer -->
                    <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <!-- End of Topic 2 -->

                <!-- Start of Topic 3 -->
                <div class="col-md-12 topic">
                    <!-- Question -->
                    <div class="open">
                        <h6 class="question" data-search-term="3. where can i buy cloudify?">3. Comment puis-je soumettre mon CV?</h6>
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
                        <h6 class="question" data-search-term="4. how can i host my website on cloudify?">4. Comment puis-je publier un travail?</h6>
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
                        <h6 class="question" data-search-term="4. how can i host my website on cloudify?">5. Comment puis-je acheter Cariera?</h6>
                        <i class="fa fa-angle-down hidden-xs"></i>
                    </div>

                    <!-- Answer -->
                    <p class="answer" style="display: none;">Lorem ipsum dolor s{{"'"}}asseoir amet, consectetur adipiscing elit, sed faire eiusmod temporel incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercice ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate vlit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <!-- End of Topic 5 -->

            </div>
        </div>
    </section>
    <!-- ===== End of FAQ Section ===== -->




@endsection