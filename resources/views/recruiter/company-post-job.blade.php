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
                                        <li><a href="{{ url('/recruiter/company-home') }}">Mon Accueil</a></li>
                                        <li><a href="{{ url('/recruiter/company-postule') }}">Les postulations</a></li>
                                        <li><a href="{{ url('/recruiter/company-favorites') }}">Mes favorites</a></li>
                                        
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



<!-- =============== start of mini navbar =============== -->
<header class="header1 centered" style="margin-top: 90px;">

        <nav class="navbar fluid_header nav-min" style="background-color:white;">
            <div class="container">
                <!-- ======== Start of Main Menu ======== -->
                <div class="row">
                <div class="col-md-3"></div>
                <div style="text-align: center ">
                        <ul class="nav navbar-nav centered">

                                <!-- accueil Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{ url('/recruiter/company-home') }}" role="button">mon annonces</a>
                                </li>
    
                                <!-- pour candidat Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{ url('/recruiter/company-profile-edit') }}" role="button">modifier mon profil</a>
                                </li>
    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a style="color:#29b2fe" href="{{ url('/recruiter/company-post-job') }}" role="button">créer une annonce</a>
                                </li>
                                    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{ url('/recruiter/company-page') }}" role="button">mon profil</a>
                                </li>
                                    
                        </ul>
                </div>
                <div class="col-md-2"></div>

            </div>
                <!-- ======== End of Main Menu ======== -->

            </div>
        </nav>
    </header>
    <!-- =============== end of mini navbar =============== -->




    <!-- =============== Start of Page Header 1 Section =============== -->
    <section class="page-header">
        <div class="container">

            <!-- Start of Page Title -->
            <div class="row">
                <div class="col-md-12">
                    <h2>publiée une annonces</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/recruiter/company-home') }}">accueil</a></li>
                        <li class="active">crée une annonces</li>
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
                    <h2 class="capitalize" style="text-align: center"><i class="fa fa-id-card"></i>&nbsp;créer une annonces</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 job-post-main">


                        <form class="form-horizontal" method="POST" action="{{ url('recruiter/company-save-job') }}">
                                {{ csrf_field() }}
                                <br>

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-3 control-label">Titre de l{{ "'" }}annonce</label>
        
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="le tite de l'annonce" required autofocus>
        
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('number_post') ? ' has-error' : '' }}">
                                    <label for="number_post" class="col-md-3 control-label">Le nombre des posts</label>
        
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="number_post" value="{{ old('number_post') }}" placeholder="0000" min="1" max="9999" required>
        
                                        @if ($errors->has('number_post'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('number_post') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


        
                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label for="city" class="col-md-3 control-label">La ville</label>
                                    <div class="col-md-8">
                                        <select name="city" class=" form-control" data-live-search="true" title="touts les villes" data-size="5" data-container="body" required>
                                            <option style="color:black" value="" selected disabled hidden>Choose here</option>
                                            <option style="color:black" value="Agadir">Agadir</option>
                                            <option style="color:black" value="Akka">Akka</option>
                                            <option style="color:black" value="Al-Hoceima">Al-Hoceima</option>
                                            <option style="color:black" value="Asilah">Asilah</option>
                                            <option style="color:black" value="Asni">Asni</option>
                                            <option style="color:black" value="Azrou">Azrou</option>
                                            <option style="color:black" value="Beni Mellal">Beni Mellal</option>
                                            <option style="color:black" value="Bouznika">Bouznika</option>
                                            <option style="color:black" value="Casablanca">Casablanca</option>
                                            <option style="color:black" value="Chefchaouen">Chefchaouen</option>
                                            <option style="color:black" value="El Jadida">El Jadida</option>
                                            <option style="color:black" value="Erfoud">Erfoud</option>
                                            <option style="color:black" value="Errachidia">Errachidia</option>
                                            <option style="color:black" value="Essaouira">Essaouira</option>
                                            <option style="color:black" value="Fès">Fès</option>
                                            <option style="color:black" value="Figuig">Figuig</option>
                                            <option style="color:black" value="Guelmim">Guelmim</option>
                                            <option style="color:black" value="Ifrane">Ifrane</option>
                                            <option style="color:black" value="Imilchil">Imilchil</option>
                                            <option style="color:black" value="Imlil">Imlil</option>
                                            <option style="color:black" value="Larache">Larache</option>
                                            <option style="color:black" value="Marrakech">Marrakech</option>
                                            <option style="color:black" value="Meknès">Meknès</option>
                                            <option style="color:black" value="Mohammedia">Mohammedia</option>
                                            <option style="color:black" value="Nador">Nador</option>
                                            <option style="color:black" value="Oualidia">Oualidia</option>
                                            <option style="color:black" value="Ouarzazate">Ouarzazate</option>
                                            <option style="color:black" value="Oujda">Oujda</option>
                                            <option style="color:black" value="Oukaïmedene">Oukaïmedene</option>
                                            <option style="color:black" value="Ouzoud">Ouzoud</option>
                                            <option style="color:black" value="Rabat">Rabat</option>
                                            <option style="color:black" value="Safi">Safi</option>
                                            <option style="color:black" value="Sefrou">Sefrou</option>
                                            <option style="color:black" value="Smara">Smara</option>
                                            <option style="color:black" value="Tafraoute">Tafraoute</option>
                                            <option style="color:black" value="Tan-Tan">Tan-Tan</option>
                                            <option style="color:black" value="Tanger">Tanger</option>
                                            <option style="color:black" value="Taroudant">Taroudant</option>
                                            <option style="color:black" value="Tata">Tata</option>
                                            <option style="color:black" value="Taza">Taza</option>
                                            <option style="color:black" value="Tetouan">Tetouan</option>
                                            <option style="color:black" value="Tiznit">Tiznit</option>
                                            <option style="color:black" value="Zagora">Zagora</option>
                                        </select>
                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('type_contract') ? ' has-error' : '' }}">
                                        <label for="type_contract" class="col-md-3 control-label">Le type de contrat</label>

                                        <div class="col-md-8">
                                        <select name="type_contract" class=" form-control" data-live-search="true" title="touts le stype de contrat" data-size="5" data-container="body" required>
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option style="color:black" value="CDI">CDI</option>
                                            <option style="color:black" value="CDD">CDD</option>
                                            <option style="color:black" value="CTT">CTT</option>
                                            <option style="color:black" value="CUI">CUI</option>
                                            <option style="color:black" value="CAE">CAE</option>
                                            <option style="color:black" value="CIE">CIE</option>
                                        </select>
                                            @if ($errors->has('type_contract'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('type_contract') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>
        

                                <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                                    <label for="experience" class="col-md-3 control-label">Niveau d{{ "'" }}experience</label>
                                    <div class="col-md-8">
                                        <select name="experience" class=" form-control" data-live-search="true" title="niveau d'experience" data-size="5" data-container="body" required>
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option style="color:black" value="Débutant">Débutant</option>
                                            <option style="color:black" value="Moins de 1 an">Moins de 1 an</option>
                                            <option style="color:black" value="De 1 à 3 ans">De 1 à 3 ans</option>
                                            <option style="color:black" value="De 3 à 5 ans">De 3 à 5 ans</option>
                                            <option style="color:black" value="De 5 à 10 ans">De 5 à 10 ans</option>
                                            <option style="color:black" value="De 10 à 20 ans">De 10 à 20 ans</option>
                                            <option style="color:black" value="Plus de 20 ans">Plus de 20 ans</option>
                                        </select>
                                            @if ($errors->has('type_contract'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('type_contract') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>


                                <!-- Start of category input -->
                                <div class="form-group{{ $errors->has('categorie') ? ' has-error' : '' }}">
                                    <label for="categorie" class="col-md-3 control-label">Domaine de l{{ "'" }}annonces</label>
                                    <div class="col-md-8">
                                        <select name="categorie" class=" form-control" data-live-search="true" title="touts categorie" data-size="5" data-container="body" required>
                                            <option style="color:black" value="Comptabilité">Comptabilité</option>
                                            <option style="color:black" value="Bancaire">Bancaire</option>
                                            <option style="color:black" value="Design & Art">Design & Art</option>
                                            <option style="color:black" value="Assurance">Assurance</option>
                                            <option style="color:black" value="Développement">Développement</option>
                                            <option style="color:black" value="Medicine">Medicine</option>
                                            <option style="color:black" value="Marketing">Marketing</option>
                                            <option style="color:black" value="Management">Management</option>
                                        </select>
                                            @if ($errors->has('type_contract'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('type_contract') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('salary_min') ? ' has-error' : '' }}">
                                            <label for="salary_min" class="col-md-6 control-label">Le salaire minimale</label>
                
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="salary_min" value="{{ old('salary_min') }}" placeholder="0 DH" min="1" max="9999999" required>
                
                                                @if ($errors->has('salary_min'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('salary_min') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('salary_max') ? ' has-error' : '' }}">
                                            <label for="salary_max" class="col-md-4 control-label">Le salaire maximale</label>
                
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="salary_max" value="{{ old('salary_max') }}" placeholder="0 DH" min="1" max="99999999" required>
                
                                                @if ($errors->has('salary_max'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('salary_max') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div> 
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('description_post') ? ' has-error' : '' }}">
                                        <label for="description_post" class="col-md-3 control-label">Une description sur le poste</label>
            
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="description_post" value="{{ old('description_post') }}" rows="4" placeholder="une description sur le poste" required></textarea>
            
                                            @if ($errors->has('description_post'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description_post') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('key_requirement') ? ' has-error' : '' }}">
                                        <label for="key_requirement" class="col-md-3 control-label">Exigences principales</label>
            
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="key_requirement" value="{{ old('key_requirement') }}" rows="4" placeholder="les exigences principales por ce poste" required></textarea>
            
                                            @if ($errors->has('key_requirement'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('key_requirement') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('our_offer') ? ' has-error' : '' }}">
                                        <label for="our_offer" class="col-md-3 control-label">Nous offrons</label>
            
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="our_offer" value="{{ old('our_offer') }}" rows="4" placeholder="nous offrons" required></textarea>
            
                                            @if ($errors->has('our_offer'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('our_offer') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>                               


                                <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                                    <label for="end_date" class="col-md-3 control-label">Date d{{ "'" }}experation</label>

                                    <div class="col-md-8">                                              
                                        <input class="form-control" name="end_date" type="date" value="{{ old('our_offer') }}"  min="<?php=date('m/d/Y'); ?>" required>
                                        @if ($errors->has('our_offer'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('end_date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div><br>


                                <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                                    <label for="active" class="col-md-7 control-label">Votre annonce est visible par les candidats</label>

                                    <div class="col-md-5"> 
                                        <label class="switch">
                                            <input class="form-control" name="active" type="checkbox" value="true" checked>
                                            <span class="slider round"></span>
                                        </label>
                                        @if ($errors->has('active'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('active') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                
                                <br>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-5">
                                        <button type="submit" class="btn btn-blue">
                                            Enregistré
                                        </button>
                                    </div>
                                </div>
                                
                            </form>



                </div>
                <!-- End of Job Post Main -->
            </div>
        </section>
        <!-- ===== End of Job Post Section ===== -->


@endsection