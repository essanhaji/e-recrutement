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
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button">voir plus d{{"'"}}infos<i class="fa fa-angle-down"></i></a>
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
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2><b>{{ count($jobs) }}</b> offres d{{"'"}}emploi</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">accueil</a></li>
                        <li class="active">pour canditat</li>
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
            <form class="job-search-form row " action="{{ url('search-jobs/searchHome') }}" method="post">
                {{ csrf_field() }}
                <!-- Start of keywords input -->
                <div class="col-md-3 col-sm-12 search-keywords">
                    <label {{'for'}}="search-keywords">Mot clée</label>
                    <input type="text" mane="motClée" id="myInput" value="{{ $motClée }}" class="form-control" placeholder="Mot clée">
                </div>
                <!-- Start of category input -->
                <div class="col-md-3 col-sm-12 search-categories">
                    <label {{'for'}}="search-categories">Catégorie</label>
                    <select name="categories" class="selectpicker" id="search-categories" data-live-search="true" title="touts catégories" data-size="5" data-container="body">
                        <option value="" @if ($categorie == '') selected @endif>Tous les categories</option>
                        <option value="Comptabilité" @if ($categorie == 'Comptabilité') selected @endif>Comptabilité</option>
                        <option value="Bancaire" @if ($categorie == 'Bancaire') selected @endif>Bancaire</option>
                        <option value="Design & Art" @if ($categorie == 'Design & Art') selected @endif>Design & Art</option>
                        <option value="Assurance" @if ($categorie == 'Assurance') selected @endif>Assurance</option>
                        <option value="Développement" @if ($categorie == 'Développement') selected @endif>Développement</option>
                        <option value="Medicine" @if ($categorie == 'Medicine') selected @endif>Medicine</option>
                        <option value="Marketing" @if ($categorie == 'Marketing') selected @endif>Marketing</option>
                        <option value="Management" @if ($categorie == 'Management') selected @endif>Management</option>
                    </select>
                </div>

                <!-- Start of location input -->
                <div class="col-md-3 col-sm-12 search-categories">
                        <label {{'for'}}="search-location">Location</label>
                        <select name="city" id="city" placeholder="Location" class="selectpicker" data-live-search="true" title="Touts Les Villes" data-size="5" data-container="body">
                            <option value=""  @if ($city == '') selected @endif>Tous les villes</option>
                            <option value="Agadir"  @if ($city == 'Agadir') selected @endif>Agadir</option>
                            <option value="Akka"  @if ($city == 'Akka') selected @endif>Akka</option>
                            <option value="Al-Hoceima"  @if ($city == 'Al-Hoceima') selected @endif>Al-Hoceima</option>
                            <option value="Asilah"  @if ($city == 'Asilah') selected @endif>Asilah</option>
                            <option value="Asni"  @if ($city == 'Asni') selected @endif>Asni</option>
                            <option value="Azrou"  @if ($city == 'Azrou') selected @endif>Azrou</option>
                            <option value="Beni Mellal"  @if ($city == 'Beni Mellal') selected @endif>Beni Mellal</option>
                            <option value="Bouznika"  @if ($city == 'Bouznika') selected @endif>Bouznika</option>
                            <option value="Casablanca"  @if ($city == 'Casablanca') selected @endif>Casablanca</option>
                            <option value="Chefchaouen"  @if ($city == 'Chefchaouen') selected @endif>Chefchaouen</option>
                            <option value="El Jadida"  @if ($city == 'El Jadida') selected @endif>El Jadida</option>
                            <option value="Erfoud"  @if ($city == 'Erfoud') selected @endif>Erfoud</option>
                            <option value="Errachidia"  @if ($city == 'Errachidia') selected @endif>Errachidia</option>
                            <option value="Essaouira"  @if ($city == 'Essaouira') selected @endif>Essaouira</option>
                            <option value="Fès"  @if ($city == 'Fès') selected @endif>Fès</option>
                            <option value="Figuig"  @if ($city == 'Figuig') selected @endif>Figuig</option>
                            <option value="Guelmim"  @if ($city == 'Guelmim') selected @endif>Guelmim</option>
                            <option value="Ifrane"  @if ($city == 'Ifrane') selected @endif>Ifrane</option>
                            <option value="Imilchil"  @if ($city == 'Imilchil') selected @endif>Imilchil</option>
                            <option value="Imlil"  @if ($city == 'Imlil') selected @endif>Imlil</option>
                            <option value="Larache"  @if ($city == 'Larache') selected @endif>Larache</option>
                            <option value="Marrakech"  @if ($city == 'Marrakech') selected @endif>Marrakech</option>
                            <option value="Meknès"  @if ($city == 'Meknès') selected @endif>Meknès</option>
                            <option value="Mohammedia"  @if ($city == 'Mohammedia') selected @endif>Mohammedia</option>
                            <option value="Nador"  @if ($city == 'Nador') selected @endif>Nador</option>
                            <option value="Oualidia"  @if ($city == 'Oualidia') selected @endif>Oualidia</option>
                            <option value="Ouarzazate"  @if ($city == 'Ouarzazate') selected @endif>Ouarzazate</option>
                            <option value="Oujda"  @if ($city == 'Oujda') selected @endif>Oujda</option>
                            <option value="Oukaïmedene"  @if ($city == 'Oukaïmedene') selected @endif>Oukaïmedene</option>
                            <option value="Ouzoud"  @if ($city == 'Ouzoud') selected @endif>Ouzoud</option>
                            <option value="Rabat"  @if ($city == 'Rabat') selected @endif>Rabat</option>
                            <option value="Safi"  @if ($city == 'Safi') selected @endif>Safi</option>
                            <option value="Sefrou"  @if ($city == 'Sefrou') selected @endif>Sefrou</option>
                            <option value="Smara"  @if ($city == 'Smara') selected @endif>Smara</option>
                            <option value="Tafraoute"  @if ($city == 'Tafraoute') selected @endif>Tafraoute</option>
                            <option value="Tan-Tan"  @if ($city == 'Tan-Tan') selected @endif>Tan-Tan</option>
                            <option value="Tanger"  @if ($city == 'Tanger') selected @endif>Tanger</option>
                            <option value="Taroudant"  @if ($city == 'Taroudant') selected @endif>Taroudant</option>
                            <option value="Tata"  @if ($city == 'Tata') selected @endif>Tata</option>
                            <option value="Taza"  @if ($city == 'Taza') selected @endif>Taza</option>
                            <option value="Tetouan"  @if ($city == 'Tetouan') selected @endif>Tetouan</option>
                            <option value="Tiznit"  @if ($city == 'Tiznit') selected @endif>Tiznit</option>
                            <option value="Zagora"  @if ($city == 'Zagora') selected @endif>Zagora</option>
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
                    <h4><b>{{ count($jobs) }}</b> Offres d{{"'"}}emploi pour  <b>vous.</b></h4><br>
                </div>

                <!-- ===== Start of Job Post Column 1 ===== -->
                <div  class="col-md-12 mt20">
                    @foreach ($jobs as $job)
                        @foreach ($recruiters as $recruiter)
                            @if($recruiter->user_id == $job->user_id)

                    <div class="item-block shadow-hover">
                        <!-- Start of Job Post Header -->
                        <div class="job-post-header clearfix">
                            <a href="{{url('/company-page/'.$recruiter->user_id)}}"><img src="{{ asset('storage/'.$recruiter->logo) }}" alt=""></a>
                            <div>
                                <a href="{{url('/job-page/'.$job->id)}}"><h4 id="a">{{ $job->title }}</h4></a>
                                <h5><small>{{ $job->categorie }}</small></h5>
                            </div>

                            <ul class="pull-right">
                                <li>
                                    <h6 class="time">{{ $job->updated_at }}</h6></li>
                                <li>
                                    <a href="{{url('/job-page/'.$job->id)}}" class="btn btn-blue btn-small btn-effect"><i class="fa fa-building-o"></i>  &nbsp;voir plus</a>
                                </li>
                            </ul>

                        </div>
                        <!-- End of Job Post Header -->

                        <!-- Start of Job Post Body -->
                        <div class="job-post-body">
                            <p>
                                {{ $job->description_post }}
                            </p>
                        </div>
                        <!-- End of Job Post Body -->

                        <!-- Start of Job Post Footer -->
                        <div class="job-post-footer row">

                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <span class="company"><i class="fa fa-building-o"></i>{{ $recruiter->name_entreprise }}</span>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <span class="location"><i class="fa fa-map-marker"></i>{{ $job->city }}</span>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <span class="company"><i class="fa fa-user"></i>{{ $job->number_post }} Post</span>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <span class="experience"><i class="fa fa-level-up">&nbsp;&nbsp;{{ $job->experience }}</i></span>
                            </div>
                        </div>
                        <!-- End of Job Post Footer -->

                    </div>
                    <br><br>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <!-- ===== End of Job Post Column 1 ===== -->

            </div>
            <!-- End of Row -->

        </div>
    </section>
    <!-- ===== End of Main Wrapper Section ===== -->




@endsection