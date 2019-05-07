@extends('layouts.master')

@section('body')


    <!-- =============== Start of Header 1 Navigation =============== -->
    <header class="sticky">

        <nav class="navbar navbar-default navbar-static-top fluid_header centered">
            <div class="container">

                <!-- Logo -->
                <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                    <a class="navbar-brand nomargin" href="{{url('/')}}"><img src="{{ asset('images/logo.svg') }}" alt="logo"></a>
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
                            <li class="simple-menu active">
                                <a href="{{url('/search-jobs')}}" role="button">pour candidat</a>
                            </li>

                            <!-- pour recruteur Menu Item -->
                            <li class="simple-menu">
                                <a href="{{url('/find-candidate')}}" role="button">pour recruteur</a>
                            </li>

                            <!-- info Menu Item -->
                            <li class="dropdown simple-menu">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button">voir plus d infos<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/about-us')}}">à propos de nous</a></li>
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
                                        <a class="dropdown-toggle action" data-toggle="dropdown" role="button" aria-expanded="false" style="; font-size:17px; color:black;"><h>
                                            {{ Auth::user()->name }} 
                                            <span class="caret"></span>
                                        </a>
        
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{url('/login')}}">Mon accueil</a>
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




    <!-- ===== Start of Candidate Profile Header Section ===== -->
    <section class="profile-header profile-header2">
    </section>
    <!-- ===== End of Candidate Header Section ===== -->




    
        
    <!-- ===== Start of Main Wrapper Company Profile Section ===== -->
    <section class="pb80" id="company-profile">
        <div class="container">

            <!-- Start of Row -->
            <div class="row company-profile">

                <!-- Start of Profile Picture -->
                <div class="col-md-3 col-xs-12">
                    <div class="profile-photo">
                        <img src="{{ asset('storage/'.$var->logo )}}" class="img-responsive" alt="">
                    </div>

                    <!-- Start of Social Media Buttons -->
                    <ul class="social-btns list-inline text-center mt20">
                        <!-- Social Media -->
                        <li>
                            <a href="{{ $var->facebook }}" class="social-btn-roll facebook transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="{{ $var->twitter }}" class="social-btn-roll twitter transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="{{ $var->google_plus }}" class="social-btn-roll google-plus transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="{{ $var->insagram }}" class="social-btn-roll instagram transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="{{ $var->linkedin }}" class="social-btn-roll linkedin transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <!-- End of Social Media Buttons -->

                </div>
                <!-- End of Profile Picture -->

                <!-- Start of Profile Description -->
                <div class="col-md-9 col-xs-12">
                    <div class="profile-descr">

                        <!-- Profile Title -->
                        <div class="profile-title">
                            <h2 class="capitalize">{{ $var->name_entreprise }}</h2>
                            <h5 class="pt10">{{ $var->speciality }}</h5>
                        </div>

                        <!-- Profile Details -->
                        <div class="profile-details mt20">
                            <p>
                                {{ $var->description_entreprise }}
                            </p>
                        </div>

                        <ul class="profile-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>{{ $var->address }}</span>
                            </li>

                            <li>
                                <i class="fa fa-at"></i>
                                <span>{{ $var->email }}</span>
                            </li>

                        </ul>
                        <ul class="profile-info">
                            <li>
                                <i class="fa fa-globe"></i>
                                <a href="{{ $var->website }}">{{ $var->website }}</a>
                            </li>

                            <li>
                                <i class="fa fa-phone"></i>
                                <span>{{ $var->phone_number }}</span>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- End of Profile Description -->

            </div>
            <!-- End of Row -->

        </div>
    </section>
    <!-- ===== End of Company Profile Section ===== -->




    <!-- ===== Start of Related Company Jobs Section ===== -->
    <section class="company-jobs ptb80">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="pb60">Nos derniers emplois</h3>
                </div>
            </div>

            @foreach ($jobs as $job)

            <!-- ===== Start of Single Job Post 1 ===== -->
            <div class="single-job-post row shadow-hover">
                <!-- Job Company -->
                <div class="col-md-2 col-xs-3 nopadding">
                    <div class="job-company">
                        <a href="{{url('/company-page/'.$var->user_id)}}">
                            <img src="{{ asset('storage/'.$var->logo )}}" alt="Smiley face" height="45" width="45">
                        </a>
                    </div>
                </div>

                <!-- Job Title & Info -->
                <div class="col-md-8 col-xs-6 ptb20">
                    <div class="job-title">
                        <a href="{{url('/job-page/'.$job->id)}}">{{ $job->title }}</a>
                    </div>
                </div>

                <!-- Job Category -->
                <div class="col-md-2 col-xs-3 ptb30">
                    <a href="{{ url('/job-page/'.$job->id) }}" class="btn btn-blue btn-small btn-effect"><i class="fa fa-building-o"></i> &nbsp;voir plus</a>
                </div>
            </div>
            <!-- ===== End of Single Job Post 1 ===== -->
                            
            @endforeach

            


        </div>
    </section>
    <!-- ===== End of Related Company Jobs Section ===== -->



@endsection