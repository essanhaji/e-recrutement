@extends('layouts.master')

@section('body')


    <!-- =============== Start of Header 1 Navigation =============== -->
    <header class="sticky">

        <nav class="navbar navbar-default navbar-static-top fluid_header centered">
            <div class="container">

                <!-- Logo -->
                <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                    <a class="navbar-brand nomargin" href="{{url('/')}}"><img src="../images/logo.svg" alt="logo"></a>
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
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button">voir plus d infos<i class="fa fa-angle-down"></i></a>
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
                                        <a class="dropdown-toggle action" data-toggle="dropdown" role="button" aria-expanded="false" style="; font-size:17px; color:black;"><h>
                                            {{ Auth::user()->name }} 
                                            <span class="caret"></span>
                                        </a>
        
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/candidate/candidate-profile') }}">Mon profil</a></li>

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






    
    <!-- =============== Start of Header 1 Navigation =============== -->
    <header class="header1 centered">
        <nav class="navbar fluid_header nav-min" style="background-color:white;">
            <div class="container">
                <!-- ======== Start of Main Menu ======== -->
                <div class="row border border-secondary">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                        <ul class="nav navbar-nav centered">
                                <!-- accueil Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{url('/candidate/candidate-profile')}}" role="button">mon CV</a>
                                </li>
    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a style="color:#29b2fe" href="{{url('/candidate/candidate-favorites')}}" role="button">mon favorites</a>
                                </li>
                                    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{  url('/candidate/candidate-postulations')}}" role="button"> les postulations</a>
                                </li>
                                    
                        </ul>
                </div>
                <div class="col-md-2"></div>

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
                    <h2> Favorites annonces</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/candidate/candidate-profile') }}">accueil</a></li>
                        <li class="active">Mes favorites annonces</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





    <!-- ===== Start of Job Post Section ===== -->
    <section class="ptb80 titlePobPost" id="job-post">
        <div class="container">
            <!-- Start of Job Post Main -->
            <div class="section-title" style="margin-top: -5px;">
                <h2 class="capitalize" style="text-align: center"><i class="fa fa-bullhorn"></i>&nbsp;Mes favorites annonces</h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 job-post-main">
                <!-- Start of Job Post Wrapper -->
                <div class="job-post-wrapper mt60">
                    <div class="job-post-wrapper mt60">
                    
                        
                    
                    
                    @foreach ($recruiters as $recruiter)
                    @foreach ($jobs as $job)
                    @foreach ($favorites as $favorite)
                    @if ($job->user_id == $recruiter->user_id)
                    @if ($favorite->favorite == $job->id)

                    <!-- Start of Single Job Post 1 -->
                    <div class="single-job-post row nomargin">
                        



                            <div class="text-right">
                                <a href="{{ url('candidate/favorites/'.$favorite->id) }}" style="color:red;" ><i class="fa fa-times"></i></a>  
                            </div>


                        
                        <!-- Job Company -->
                        <div class="col-md-2 col-xs-3 nopadding">
                            <div class="job-company">
                                <a href="{{url('/company-page/'.$recruiter->user_id)}}">
                                    <img src="{{ asset('storage/'.$recruiter->logo) }}" alt="Smiley face" height="45" width="45">
                                </a>
                            </div>
                        </div>

                        <!-- Job Title & Info -->
                        <div class="col-md-8 col-xs-6 ptb20">
                            <div class="job-title">
                                <a href="{{url('/job-page/'.$job->id)}}">{{ $job->title }}</a>
                            </div>

                            <div class="job-info">
                                <span class="company"><i class="fa fa-building-o"></i>{{ $recruiter->name_entreprise }}</span>
                                <span class="location"><i class="fa fa-map-marker"></i>{{ $job->city }}</span>
                                <span class="experience">&nbsp;&nbsp;<i class="fa fa-level-up"></i>{{ $job->experience }}</span>
                            </div>
                        </div>

                        <!-- Job Category -->
                        <div class="col-md-2 col-xs-3 ptb30">
                            <div class="job-category">
                                <a href="{{url('/job-page/'.$job->user_id)}}" class="btn btn-blue btn-small btn-effect"><i class="fa fa-building-o"></i>  &nbsp;voir plus</a>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <!-- End of Single Job Post 1 -->   

                    @endif
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach






                </div>
                </div>
                <!-- End of Job Post Wrapper -->

            </div>
            <!-- End of Job Post Main -->
        </div>
    </section>
    <!-- ===== End of Job Post Section ===== -->




@endsection