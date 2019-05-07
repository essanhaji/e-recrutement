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





    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header" id="find-candidate">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>trouver candidat</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">accueil</a></li>
                        <li class="active">pour recruteur</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->







    <!-- ===== Start of Main Wrapper Section ===== -->
    <section class="search-jobs ptb80" id="version4">
            <div class="container">
    
                <!-- Start of Form -->
                <form class="job-search-form row " action="{{ url('find-candidate/searchCvs') }}" method="post">
                {{ csrf_field() }}
                    <!-- Start of keywords input -->
                    <div class="col-md-3 col-sm-12 search-keywords">
                        <label for="search-keywords">Mot clée</label>
                        <input type="text" value="{{ $motClée }}" name="motClée" class="form-control" id="search-keywords" placeholder="Mot clée">
                    </div>
    
                    <!-- Start of category input -->
                    <div class="col-md-3 col-sm-12 search-categories">
                        <label for="search-categories">Catégorie</label>
                        <select name="etude" class="selectpicker" id="search-categories" data-live-search="true" title="touts les niveaux" data-size="5" data-container="body">
                            <option @if($etude == '') selected @endif value="">Tous les niveaux d{{ "'" }}etude</option>
                            <option @if($etude == 'Bac') selected @endif value="Bac">Bac</option>
                            <option @if($etude == 'Bac+1') selected @endif value="Bac+1">Bac+1</option>
                            <option @if($etude == 'Bac+2') selected @endif value="Bac+2">Bac+2</option>
                            <option @if($etude == 'Bac+3') selected @endif value="Bac+3">Bac+3</option>
                            <option @if($etude == 'Bac+4') selected @endif value="Bac+4">Bac+4</option>
                            <option @if($etude == 'Bac+5') selected @endif value="Bac+5">Bac+5</option>
                            <option @if($etude == 'Bac+6 et plus') selected @endif value="Bac+6 et plus">Bac+6 et plus</option>
                        </select>
                    </div>
    
                    <!-- Start of experionce input -->
                    <div class="col-md-3 col-sm-12 search-categories">
                        <label for="search-location">Expérience</label>
                        <select name="experience" id="search-location" placeholder="Expérience" class="selectpicker" data-live-search="true" title="Expérience" data-size="5" data-container="body">
                            <option @if($experience == "") selected @endif value="" selected>Tous les niveaux d{{ "'" }}experience</option>
                            <option @if($experience == "Débutant") selected @endif value="Débutant">Débutant</option>
                            <option @if($experience == "Moins de 1 an") selected @endif value="Moins de 1 an">Moins de 1 an</option>
                            <option @if($experience == "De 1 à 3 ans") selected @endif value="De 1 à 3 ans">De 1 à 3 ans</option>
                            <option @if($experience == "De 3 à 5 ans") selected @endif value="De 3 à 5 ans">De 3 à 5 ans</option>
                            <option @if($experience == "De 5 à 10 ans") selected @endif value="De 5 à 10 ans">De 5 à 10 ans</option>
                            <option @if($experience == "De 10 à 20 ans") selected @endif value="De 10 à 20 ans">De 10 à 20 ans</option>
                            <option @if($experience == "Plus de 20 ans") selected @endif value="Plus de 20 ans">Plus de 20 ans</option>
                        </select>
                    </div>
    
                    <!-- Start of submit input -->
                    <div class="col-md-3 col-sm-12 search-submit">
                        <button type="submit" class="btn btn-blue btn-effect"><i class="fa fa-search"></i>Chercher</button>
                    </div>
    
                </form>
                <!-- End of Form -->
    
    
                <!-- Start of Row -->
                <div class="row mt60">
    
                    <div class="col-md-12">
                        <h4><b>{{ count($cvs) }}</b> profils sur la cvthèque pour <b>vous.</b></h4><br>
                    </div>
    
                    <!-- ===== Start of profil Post Column 1 ===== -->
                    <div class="col-md-12 mt20">
                    @foreach ($cvs as $cv)
                        @foreach ($candidates as $candidate)
                                @if($cv->user_id == $candidate->user_id)
                        <div class="item-block shadow-hover">
    
                            <!-- Start of profil Post Header -->
                            <div class="job-post-header clearfix">
                                <a href="{{url('/candidate-profile/'.$cv->user_id)}}"><img src="{{ asset('storage/'.$candidate->picture) }}" alt=""></a>
                                <div>
                                    <a href="{{url('/candidate-profile/'.$cv->user_id)}}"><h4>{{ $candidate->last_name }} &nbsp;{{ $candidate->first_name }}</h4></a>
                                    <h5><small>{{ $cv->title }}</small></h5>
                                </div>
    
                                <ul class="pull-right">
                                    <li>
                                        <h6 class="time">{{ $cv->updated_at }}</h6></li>
                                    <li>
                                        <a href="{{url('/candidate-profile/'.$cv->user_id)}}" class="btn btn-blue btn-small btn-effect"><i class="fa fa-id-card"></i>  &nbsp;voir plus</a>
                                    </li>
                                </ul>
    
                            </div>
                            <!-- End of profil Post Header -->
    
                            <!-- Start of profil Post Body -->
                            <div class="job-post-body">
                                <p>
                                    {{ $cv->about_me }}
                                </p>
                            </div>
                            <!-- End of profil Post Body -->
    
                            <!-- Start of profil Post Footer -->
                            <div class="job-post-footer row">
    
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                    <span class="company"><i class="fa fa-envelope"></i>{{ $cv->email }}</span>
                                </div>
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                    <span class="location"><i class="fa fa-leaf"></i>{{ $cv->age }} Ans</span>
                                </div>
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                    <span class="experience">&nbsp;&nbsp;<i class="fa fa-level-up"></i>{{ $cv->experience }}</span>
                                </div>
                                <div class="col-md-3 col-sm-2 col-xs-12">
                                    <span class="experience">&nbsp;&nbsp;<i class="fa fa-graduation-cap"></i>{{ $cv->etude }}</span>
                                </div>
                            </div>
                            <!-- End of profil Post Footer -->
    
                        </div>
                        <br><br>
                            @endif
                        @endforeach
                    @endforeach
                    </div>
                    <!-- ===== End of profil Post Column 1 ===== -->
    
                </div>
                <!-- End of Row -->
    
            </div>
        </section>
        <!-- ===== End of Main Wrapper Section ===== -->
    


@endsection