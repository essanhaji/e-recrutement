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
                            <li class="simple-menu">
                                <a href="{{url('/search-jobs')}}" role="button">pour candidat</a>
                            </li>

                            <!-- pour recruteur Menu Item -->
                            <li class="simple-menu active">
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
                                            <li>
                                                <a href="{{ url('/login') }}">mon profile</a>
                                            </li>
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





    <!-- ===== Start of Candidate Profile Header Section ===== -->
    <section class="profile-header">
    </section>
    <!-- ===== End of Candidate Header Section ===== -->





    <!-- ===== Start of Main Wrapper Candidate Profile Section ===== -->
    <section class="pb80" id="candidate-profile2">
        <div class="container">

            <!-- Start of Row -->
            <div class="row candidate-profile">

                <!-- Start of Profile Picture -->
                <div class="col-md-12">
                    <div class="profile-photo">
                        <img src="{{ asset('storage/'.$candidate->picture) }}" class="img-responsive" alt="">
                    </div>

                </div>
                <!-- End of Profile Picture -->


                <!-- Start of Profile Description -->
                <div class="col-md-5 col-xs-12 mt80">
                    <div class="profile-descr">

                    <!-- Profile Title -->
                    <div class="profile-title">
                        <h2 class="capitalize">{{ $candidate->last_name ."  ". $candidate->first_name }}</h2>
                        <h5 class="pt10">{{ $cv->title }}</h5>
                        <br>

                    </div>

                        <!-- Start of Social Media Buttons -->
                    <ul class="social-btns list-inline mt20">
                        <!-- Social Media -->
                        <li>
                            <a href="{{ $cv->facebook }}" class="social-btn-roll facebook transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                </div>
                            </a>
                        </li>
                        <!-- Social Media -->
                        <li>
                            <a href="{{ $cv->twitter }}" class="social-btn-roll twitter transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                </div>
                            </a>
                        </li>
                        <!-- Social Media -->
                        <li>
                            <a href="{{ $cv->google_plus }}" class="social-btn-roll google-plus transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                </div>
                            </a>
                        </li>
                        <!-- Social Media -->
                        <li>
                            <a href="{{ $cv->insagram }}" class="social-btn-roll instagram transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                </div>
                            </a>
                        </li>
                        <!-- Social Media -->
                        <li>
                            <a href="{{ $cv->linkedin }}" class="social-btn-roll linkedin transparent">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                </div>
                            </a>
                        </li>

                    </ul>
                        <!-- End of Social Media Buttons -->

                        <!-- Profile Details -->
                        <div class="profile-details mt40">
                            <p>
                                {{ $cv->about_me }}
                            </p>
                        </div>
                    </div>

                </div>
                <!-- End of Profile Description -->


                <!-- Start of Profile Info -->
                <center class="col-md-5">
                    @if (Route::has('login'))
                        @if (Auth::check())
                            @if (Auth::user()->type == 'recruteur' and $favorite->favorite == $cv->user_id)
                                <h1><a href="{{ url('favorites/cv/'.$cv->user_id) }}" class="btn-effect pull-right "><i class="fa fa-star" style="color:yellow"></i></a></h1>
                            @elseif (Auth::user()->type == 'recruteur')
                            <h1><a href="{{ url('favorites/cv/'.$cv->user_id) }}" class="btn-effect pull-right "><i class="fa fa-star"></i></a></h1>
                            @endif
                        @else
                        <h1><a class="btn-effect pull-right" title="il faut identifier !!!!!"><i class="fa fa-star"></i></a></h1>
                        <br><br><br><br>
                        <div class="col-md-5 alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            il faut identifier !!!!!
                        </div>
                        @endif
                    @endif
                </center>

                <div class="col-md-5 col-md-offset-2 col-xs-12 mt80">
                <ul class="profile-info">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <span>{{ $cv->address }}</span>
                    </li>
                    <li>
                        <i class="fa fa-money"></i>
                        <span>{{ $cv->salary }} DH / mois</span>
                    </li>
                    <li>
                        <i class="fa fa-birthday-cake"></i>
                        <span>( {{ $candidate->birthdate }} )&nbsp;{{ "    ".$cv->age }} ans</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>{{ $cv->phone_number }}</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a>{{ $cv->email }}</a>
                    </li>
                    <li>
                        <i class="fa fa-venus-mars"></i>
                        <span>{{ $candidate->civility }}</span>
                    </li>
                    <li>
                        <i class="fa fa-level-up"></i>
                        <span>{{ $cv->experience }}</span>
                    </li>
                    <li>
                        <i class="fa fa-graduation-cap"></i>
                        <span>{{ $cv->etude }}</span>
                    </li>
                </ul>
                </div>
                <!-- End of Profile Info -->

            </div>
            <!-- End of Row -->


            <!-- Start of Row -->
            <div>
                    <div class="row skills pb80 mt80">
                            <br> <br> <br>
                            <div class="col-md-12 text-center section-title">
                                <h2 class="pb40">COMPÉTENCES</h2>
                            </div>
            
                            <!-- Start of Skill Charts Wrapper -->
                            <div class="col-md-12 mt20">
                                <div class="row">
            
                                    <center>
                                        @foreach ($skills as $skill)
                                            <!-- Chart -->
                                            <div class="col-md-2 col-sm-6 col-xs-6 chart mb40" data-percent="{{ $skill->level }}"><span>{{ $skill->name }}</span>
                                            </div>
                                        @endforeach
                                    </center>
            
                                </div>
                            </div>
                            <!-- End of Skill Charts Wrapper -->
            
                        </div>
            </div>
            <!-- End of Row -->

    <!-- ===== End of Candidate Profile Section ===== -->










    <!-- ===== Start of Education Section ===== -->
    <section class="education ">
        <div class="container">

            <div class="col-md-12 text-center section-title">
                <h2 class="pb60">FORMATIONS</h2>
            </div>

            @foreach ($etudes as $etude)
                
            
            <!-- Start of Education Column -->
            <div class="col-md-12">
                <div class="item-block shadow-hover">

                    <!-- Start of Education Header -->
                    <div class="education-header clearfix">
                        <i class="fa fa-graduation-cap fa-5x"></i> &nbsp;&nbsp;
                        <div>
                            <h4>{{ $etude->diploma }} <small>- {{ $etude->department }}</small></h4>
                            <h5>{{ $etude->university }}</h5>
                        </div>
                        <h6 class="time">{{ $etude->start_date }} || {{ $etude->end_date }}</h6>
                    </div>
                    <!-- End of Education Header -->

                    <!-- Start of Education Body -->
                    <div class="education-body">
                        <p>
                            {{ $etude->description }}
                        </p>
                    </div>
                    <!-- End of Education Body -->

                </div>
                <br>
            </div>
            <!-- End of Education Column -->

            @endforeach

        </div>
    </section>
    <!-- ===== End of Education Section ===== -->





    <!-- ===== Start of Work Experience Section ===== -->
    <div>
            <section class="work-experience ptb80"  style="background-color:white;">
                    <div>
                        <div class="col-md-12 text-center section-title">
                            <h2 class="pb60">EXPÉRIENCES</h2>
                        </div>
            
                        <!-- Start of Work Experience Column -->
                        @foreach ($experiences as $experience)
                            
                        
                        <div class="col-md-12">
                            <div class="item-block shadow-hover">
            
                                <!-- Start of Work Experience Header -->
                                <div class="experience-header clearfix">
                                    <i class="fa fa-cogs fa-5x"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div>
                                        <h4>{{ $experience->title }}</h4>
                                        <h5><small>{{ $experience->speciality }}</small></h5>
                                    </div>
                                    <h6 class="time">{{ $experience->start_date }} || {{ $experience->end_date }}</h6>
                                </div>
                                <!-- End of Work Experience Header -->
            
                                <!-- Start of Work Experience Body -->
                                <div class="experience-body">
                                    <p>
                                        {{ $experience->description }}
                                    </p>
                                </div>
                                <!-- End of Work Experience Body -->
            
                            </div>
                            <br>
                        </div>
                        <!-- End of Work Experience Column -->
                        
                        @endforeach


                    </div>
                </section>
    </div>
    <!-- ===== End of Work Experience Section ===== -->


        </div>


        <!-- ===== Start of languge Section ===== -->
        <section class="ptb40" id="countup" style="background-color:white;">

            <div class="container">
                <div class="col-md-12 text-center section-title">
                    <h2 class=""><br>LANGUES</h2>
                </div>
                <!-- 1st Count up item -->
                @foreach ($languages as $language)
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <span class="langue">{{ $language->language_name }}</span>
                    <h4>{{ $language->level }}</h4>
                </div>
                @endforeach

            </div>
        </section>
        <!-- ===== End of languge Section ===== -->   
</section>
    @if (Route::has('login'))
        @if (Auth::check())
            @if (Auth::user()->type == 'recruteur')
                <center class="cont">
                    <a class="btn btn-blue btn-effect" data-toggle="modal" data-target="#exampleModalCV" data-whatever="@getbootstrap"> Contactez moi</a>
                </center>
            @endif
        @else
            <center class="cont">
                    <a class="btn btn-blue btn-effect" data-toggle="modal" data-target="#exampleModalCV" data-whatever="@getbootstrap"> Contactez moi</a>
            </center>
        @endif
    @endif

                        <!--======================== start of Modal messge ===================================================-->
                        <form method="POST" action="{{ url('recruiter/company-postule/message/stor') }}">
                            {{ csrf_field() }}
                        <div class="modal fade" id="exampleModalCV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <br>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:red">&times;</span>
                                </button>
                                <input type="hidden" name="job_id" value="">
                                <h5 class="modal-title" id="exampleModalLongTitle">Envoyer un message a  <b>{{ $candidate->last_name }}  {{ $candidate->first_name }}</b> </h5>
                                <br>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <br>
                                <label for="comment">Réponse :</label>
                                <br><br>
                                <textarea class="form-control" rows="7" name="message" placeholder="votre Réponse ..." required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <br>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermmer</button>
                    @if (Route::has('login'))
                        @if (Auth::check())
                            @if (Auth::user()->type == 'recruteur')
                                <button type="submite" class="btn btn-blue">Envoyer</button>
                            @endif
                        @else
                            <button type="submite" class="btn btn-blue" disabled>Envoyer</button>
                            <br><br>
                            <center>
                            <div class="alert alert-danger" role="alert">
                                il faut identifier !!!!!
                            </div></center>

                        @endif
                    @endif
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    <!--======================== end of Modal messge ===================================================-->

@endsection