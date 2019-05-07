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
                            <li class="simple-menu active">
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


    <header class="header3">
        <!-- ===== Start of Top Bar ===== -->
        <div class="top-bar">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-xs-12">
                        <span>Prenez contact avec nous!</span>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <!-- Start of Social Media Buttons -->
                        <ul class="social-btns list-inline text-right">
                            <!-- Social Media -->
                            <li>
                                <a href="#" class="social-btn-roll facebook transparent">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    </div>
                                </a>
                            </li>

                            <!-- Social Media -->
                            <li>
                                <a href="#" class="social-btn-roll twitter transparent">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    </div>
                                </a>
                            </li>

                            <!-- Social Media -->
                            <li>
                                <a href="#" class="social-btn-roll google-plus transparent">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    </div>
                                </a>
                            </li>

                            <!-- Social Media -->
                            <li>
                                <a href="#" class="social-btn-roll instagram transparent">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-instagram"></i>
                                        <i class="social-btn-roll-icon fa fa-instagram"></i>
                                    </div>
                                </a>
                            </li>

                            <li>
                                    <a href="#" class="social-btn-roll linkedin transparent">
                                        <div class="social-btn-roll-icons">
                                            <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                            <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                        </div>
                                    </a>
                                </li>
                        </ul>
                        <!-- End of Social Media Buttons -->
                    </div>

                </div>
            </div>
        </div>
        <!-- ===== End of Top Bar ===== -->
    </header>



    <!-- ===== Start of Main Search Section ===== -->
    <section class="main overlay-black">

        <!-- Start of Wrapper -->
        <div class="container wrapper">
            <h2 class="capitalize text-center text-white">Consulter <b>{{ count($jobs) }}</b> offres d{{"'"}}emploi</h2><br><br>

            <!-- Start of Form -->
            <form class="job-search-form row pt40" action="{{ url('search-jobs/searchHome') }}" method="post">
                {{ csrf_field() }}

                <!-- Start of keywords input -->
                <div class="col-md-3 col-sm-12 search-keywords">
                    <label for="search-keywords">Mot clée</label>
                    <input type="text" name="motClée" id="search-keywords" placeholder="Mot clée">
                </div>

                <!-- Start of category input -->
                <div class="col-md-3 col-sm-12 search-categories">
                    <label for="search-categories">Catégorie</label>
                    <select name="categories" class="selectpicker" id="search-categories" data-live-search="true" title="touts catégories" data-size="5" data-container="body">
                        <option value="" selected>Tous les categories</option>
                        <option value="Comptabilité">Comptabilité</option>
                        <option value="Bancaire">Bancaire</option>
                        <option value="Design & art">Design & Art</option>
                        <option value="Assurance">Assurance</option>
                        <option value="Développement">Développement</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Management">Management</option>
                    </select>
                </div>

                <!-- Start of location input -->
                <div class="col-md-4 col-sm-12 search-location">
                    <label for="search-location">Location</label>
                    <select name="city" id="search-location" placeholder="Location" class="selectpicker" data-live-search="true" title="touts les villes" data-size="5" data-container="body">
                        <option value="" selected>Tous les villes</option>
                        <option value="Agadir">Agadir</option>
                        <option value="Akka">Akka</option>
                        <option value="Al-Hoceima">Al-Hoceima</option>
                        <option value="Asilah">Asilah</option>
                        <option value="Asni">Asni</option>
                        <option value="Azrou">Azrou</option>
                        <option value="Beni Mellal">Beni Mellal</option>
                        <option value="Bouznika">Bouznika</option>
                        <option value="Casablanca">Casablanca</option>
                        <option value="Chefchaouen">Chefchaouen</option>
                        <option value="El Jadida">El Jadida</option>
                        <option value="Erfoud">Erfoud</option>
                        <option value="Errachidia">Errachidia</option>
                        <option value="Essaouira">Essaouira</option>
                        <option value="Fès">Fès</option>
                        <option value="Figuig">Figuig</option>
                        <option value="Guelmim">Guelmim</option>
                        <option value="Ifrane">Ifrane</option>
                        <option value="Imilchil">Imilchil</option>
                        <option value="Imlil">Imlil</option>
                        <option value="Larache">Larache</option>
                        <option value="Marrakech">Marrakech</option>
                        <option value="Meknès">Meknès</option>
                        <option value="Mohammedia">Mohammedia</option>
                        <option value="Nador">Nador</option>
                        <option value="Oualidia">Oualidia</option>
                        <option value="Ouarzazate">Ouarzazate</option>
                        <option value="Oujda">Oujda</option>
                        <option value="Oukaïmedene">Oukaïmedene</option>
                        <option value="Ouzoud">Ouzoud</option>
                        <option value="Rabat">Rabat</option>
                        <option value="Safi">Safi</option>
                        <option value="Sefrou">Sefrou</option>
                        <option value="Smara">Smara</option>
                        <option value="Tafraoute">Tafraoute</option>
                        <option value="Tan-Tan">Tan-Tan</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Taroudant">Taroudant</option>
                        <option value="Tata">Tata</option>
                        <option value="Taza">Taza</option>
                        <option value="Tetouan">Tetouan</option>
                        <option value="Tiznit">Tiznit</option>
                        <option value="Zagora">Zagora</option>
                    </select>
                </div>

                <!-- Start of submit input -->
                <div class="col-md-2 col-sm-12 search-submit">
                    <button type="submit" class="btn btn-blue btn-effect btn-large"><i class="fa fa-search"></i>Chercher</button>
                </div>

            </form>
            <!-- End of Form -->

            <div class="extra-info pt20">
                <span class="text-left text-white"><b>{{ count($jobs) }}</b> Offres d{{"'"}}emploi pour  <b>vous.</b></span>
            </div>

        </div>
        <!-- End of Wrapper -->

    </section>
    <!-- ===== End of Main Search Section ===== -->





    <!-- ===== Start of Popular Categories Section ===== -->
    <section class="ptb80" id="categories">
        <div class="container">

            <div class="section-title">
                <h2><i class="fa fa-align-left"></i> Catégories Populaires</h2>
            </div>

            <div class="row nomargin">
                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Comptabilité') }}">Comptabilité</a>
                            <p>(<b>{{ count($num_comptabilité) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-university"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Bancaire') }}">Bancaire</a>
                            <p>(<b>{{ count($num_bancaire) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-pencil"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Design & Art') }}">design & art</a>
                            <p>(<b>{{ count($num_designart) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-umbrella"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Assurance') }}">Assurance</a>
                            <p>(<b>{{ count($num_assurance) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->
            </div>

            <div class="row pt40 nomargin">
                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-desktop"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Développement') }}">Développement</a>
                            <p>(<b>{{ count($num_développement) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-heart"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Medicine') }}">Medicine</a>
                            <p>(<b>{{ count($num_medicine) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-line-chart"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Marketing') }}">Marketing</a>
                            <p>(<b>{{ count($num_marketing) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="{{ url('search-jobs/Management') }}">Management</a>
                            <p>(<b>{{ count($num_management) }}</b> Postes à pourvoir)</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>La comptabilité est un système d organisation dans lequel un individu appelé comptable se propose d observer.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->
            </div>

            <div class="col-md-12 mt60 text-center">
                <a href="{{url('/search-jobs')}}" class="btn btn-blue btn-effect nomargin">consulter tous</a>
            </div>

        </div>
    </section>
    <!-- ===== End of Popular Categories Section ===== -->






    <!-- ===== Start of Signup Section ===== -->
    <section id="signup-video">
        <div class="container-fluid">
            <div class="section-title">
                <h2><i class="fa fa-users"></i> enregistrement</h2>
            </div>
            <div class="row">
                <!-- Start of Signup candidat Column -->
                <div class="col-md-6 signup-sec ptb80 text-center">

                    <div class="col-md-8 col-md-offset-2">

                        <!-- Section Title -->
                        <div class="section-title">
                            <h2 class="text-white">Commencez Votre Carrière Aujourd hui En Inscrivant!</h2>
                        </div>

                        <p class="text-white mt20">Lorem Ipsum est simplement un faux texte de l industrie de l impression et de la composition. Lorem Ipsum est le texte factice standard de l industrie depuis les années 1500.</p>
                        <a href="{{url('/register')}}" class="btn btn-purple btn-effect mt80"><i class="fa fa-clipboard"></i>&nbsp; pour le candidat</a>

                        <!-- Arrow Icon -->
                        <img src="images/icons/arrow.svg" alt="" class="signup-arrow visible-lg-block">
                    </div>

                    <!-- Signup icon -->
                    <img src="images/icons/icon1.svg" alt="" class="signup-icon visible-lg-block">
                </div>
                <!-- End of Signup candidat Column -->

                <!-- Start of Signup recrteur Column -->
                <div class="col-md-6 signup-sec signup-sec-c ptb80 text-center" style="background: #f0f0f0; color: #000000;">

                    <div class="col-md-8 col-md-offset-2">

                        <!-- Section Title -->
                        <div class="section-title">
                            <h2 class="text-black">commencer la recherche sur les meilleurs candidats!</h2>
                        </div>

                        <p class="mt20">Lorem Ipsum est simplement un faux texte de l industrie de l impression et de la composition. Lorem Ipsum est le texte factice standard de l industrie depuis les années 1500.</p>
                        <a href="{{url('/register')}}" class="btn btn-purple btn-effect mt80"><i class="fa fa-briefcase"></i>&nbsp; pour le recruteur</a> &nbsp;&nbsp;&nbsp;
                        <!-- Arrow Icon -->
                        <img src="images/icons/arrow.svg" alt="" class="signup-arrow visible-lg-block">
                    </div>

                    <!-- Signup icon -->
                    <img src="images/icons/phone.png" alt="" class="signup-icon visible-lg-block">
                </div>
                <!-- End of Signup recrteur Column -->
            </div>
        </div>
    </section>
    <!-- ===== End of Signup & Video Section ===== -->


    <!-- ===== Start of Job Post Section ===== -->
    <section class="ptb80 titlePobPost" id="job-post">
        <div class="container">
            <!-- Start of Job Post Main -->
            <div class="section-title" style="margin-top: -5px;">
                <h2 class="capitalize" style="text-align: center"><i class="fa fa-bullhorn"></i>&nbsp;les derniers Offres</h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 job-post-main" style="margin-top: -50px;">
                <!-- Start of Job Post Wrapper -->
                <div class="job-post-wrapper mt60">
                    @foreach ($jobs as $job)
                        @foreach ($recruiters as $recruiter)
                            @if($recruiter->user_id == $job->user_id)
                                    <!-- Start of Single Job Post 1 -->
                                    <div class="single-job-post row nomargin">
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
                                                <span class="company"><i class="fa fa-building-o"></i>{{ $recruiter->name_entreprise }}</span>&nbsp;&nbsp;
                                                <span class="location"><i class="fa fa-map-marker"></i>{{ $job->city }}</span>&nbsp;&nbsp;
                                                <span class="experience"><i class="fa fa-level-up"></i>{{ $job->experience }}</span>
                                            </div>
                                        </div>

                                        <!-- Job Category -->
                                        <div class="col-md-2 col-xs-3 ptb30">
                                            <div class="job-category">
                                                <a href="{{url('/job-page/'.$job->id)}}" class="btn btn-blue btn-small btn-effect"><i class="fa fa-building-o"></i>  &nbsp;voir plus</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Single Job Post 1 -->
                            @endif
                        @endforeach
                    @endforeach


                    <!-- see all jobs-->
                    <div class="col-md-12 mt60 text-center">
                        <a href="{{url('/search-jobs')}}" class="btn btn-blue btn-effect nomargin"><i class="fa fa-plus-square"> </i> consulter tous</a>
                    </div>
                </div>
                <!-- End of Job Post Wrapper -->

            </div>
            <!-- End of Job Post Main -->
        </div>
    </section>
    <!-- ===== End of Job Post Section ===== -->





    <!-- ===== Start of CountUp Section ===== -->
    <section class="ptb40" id="countup">
        <div class="container">

            <!-- 1st Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="{{ count($recruiters)+count($candidates) }}"></span>
                <h4>members</h4>
            </div>

            <!-- 2nd Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="{{ count($jobs) }}"></span>
                <h4>offres</h4>
            </div>

            <!-- 3rd Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="{{ count($candidates) }}"></span>
                <h4>cvs</h4>
            </div>

            <!-- 4th Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="{{ count($recruiters) }}"></span>
                <h4>entreprise</h4>
            </div>

        </div>
    </section>
    <!-- ===== End of CountUp Section ===== -->





    <!-- ===== Start of cv Section ===== -->
    <section class="ptb80 titlePobPost" id="job-post">
        <div class="container">
            <!-- Start of cv Post Main -->
            <div class="section-title" style="margin-top: -5px;">
                <h2 class="capitalize" style="text-align: center"><i class="fa fa-clipboard"></i>&nbsp;les derniers  c v</h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 job-post-main" style="margin-top: -50px;">
                <!-- Start of cv Post Wrapper -->
                <div class="job-post-wrapper mt60">


                    @foreach ($cvs as $cv)
                        @foreach ($candidates as $candidate)
                                @if($cv->user_id == $candidate->user_id)
                    <!-- Start of Single cv 1 -->
                    <div class="single-job-post row nomargin">
                        <!-- cv Company -->
                        <div class="col-md-2 col-xs-3 nopadding">
                            <div>
                                <a href="{{url('/candidate-profile/'.$candidate->user_id)}}">
                                    <img src="{{ asset('storage/'.$candidate->picture) }}" class="" alt="Smiley face" height="165" width="165">
                                </a>
                            </div>
                        </div>

                        <!-- cv Title & Info -->
                        <div class="col-md-8 col-xs-6 ptb20">
                            <div class="job-title">
                                <a href="{{url('/candidate-profile/'.$candidate->user_id)}}">{{ $candidate->last_name }} &nbsp;{{ $candidate->first_name }}</a>
                                <p>
                                    {{ $cv->about_me }}
                                </p>
                            </div>

                            <div class="job-info">
                                <span class="company"><i class="fa fa-briefcase"></i>{{ $cv->title }}</span>&nbsp;&nbsp;
                                <span class="location"><i class="fa fa-phone"></i>{{ $cv->phone_number }}</span>&nbsp;&nbsp;
                                <span class="experience">&nbsp;&nbsp;<i class="fa fa-level-up"></i>{{ $cv->experience }}</span>
                            </div>
                        </div>

                        <!-- view cv -->
                        <div class="col-md-2 col-xs-3 ptb30">
                            <div class="job-category">
                                <a href="{{url('/candidate-profile/'.$candidate->user_id)}}" class="btn btn-blue btn-small btn-effect"><i class="fa fa-id-card"></i>  &nbsp;voir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single cv Post 1 -->

                            @endif
                        @endforeach
                    @endforeach




                    <!-- see all cv-->
                    <div class="col-md-12 mt60 text-center">
                        <a href="{{url('/find-candidate')}}" class="btn btn-blue btn-effect nomargin"><i class="fa fa-plus-square"> </i> consulter tous</a>
                    </div>
                </div>
                <!-- End of cv Post Wrapper -->

            </div>
            <!-- End of cv Post Main -->
        </div>
    </section>    
    <!-- ===== End of cv Section ===== -->


@endsection