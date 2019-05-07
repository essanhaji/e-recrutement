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
                                            <li>
                                                <a href="{{ url('/candidate/candidate-profile') }}">mon profile</a>
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
                                    <a href="{{url('/candidate/candidate-favorites')}}" role="button">mon favorites</a>
                                </li>
                                    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{url('/candidate/candidate-postulations')}}" role="button"> les postulations</a>
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
                    <h2>mon profil</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/candidate/candidate-profile') }}">accueil</a></li>
                        <li class="active">créer mon profil</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->







        <!-- ===== Start of Profil Section ===== -->
        <section class="ptb80 titlePobPost" id="job-post">
            <div class="container">
                <!-- Start of Job Post Main -->
                <div class="section-title" style="margin-top: -5px;">
                    <h2 class="capitalize" style="text-align: center"><i class="fa fa-id-card"></i>&nbsp;créer mon profil</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 job-post-main">

                            <form class="form-horizontal" method="POST" action="{{ url('candidate/candidate-profile-save') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <br>


                                <div class="row">
                                    <div class="">
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                                <label for="first_name" class="col-md-6 control-label">Le nom</label>
                
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="votre nom" required autofocus>
                
                                                    @if ($errors->has('first_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                                <label for="last_name" class="col-md-4 control-label">Le prenom</label>
                    
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="votre prenom" required>
                    
                                                    @if ($errors->has('last_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label for="address" class="col-md-3 control-label">Votre adresse</label>
        
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="ville, cartier, N°" required>
        
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-3 control-label">Adresse e-mail</label>
        
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="exemple@exemple.com" required>
        
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                        <label for="phone_number" class="col-md-3 control-label">Numéro de téléphone</label>
            
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required size="10" minlength="10" maxlength="10" placeholder="06 xx xx xx xx">
            
                                            @if ($errors->has('phone_number'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>
                                

                                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                        <label for="picture" class="col-md-3 control-label">La photo</label>
            
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" name="picture" accept=".jpg,.png,.gif,.bmp,.tiff,.jpeg" required>
            
                                            @if ($errors->has('picture'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('picture') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                    <label for="facebook" class="col-md-3 control-label">La Page Facebook <span style="color:grey"> (optionnel)</span></label>
        
                                    <div class="col-md-8">
                                        <input id="facebook" type="url" class="form-control" value="{{ old('facebook') }}" name="facebook" placeholder="http://your-facebook-page.com/">
        
                                        @if ($errors->has('facebook'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('facebook') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        

                                <div class="form-group{{ $errors->has('insagram') ? ' has-error' : '' }}">
                                        <label for="insagram" class="col-md-3 control-label">Instagram <span style="color:grey"> (optionnel)</span></label>
            
                                        <div class="col-md-8">
                                            <input id="insagram" type="url" class="form-control" name="insagram" placeholder="http://your-instagram.com/" value="{{ old('insagram') }}">
            
                                            @if ($errors->has('insagram'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('insagram') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                
                                </div>

        
                                <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                                        <label for="twitter" class="col-md-3 control-label">Twitter <span style="color:grey"> (optionnel)</span></label>
            
                                        <div class="col-md-8">
                                            <input id="twitter" type="url" class="form-control" name="twitter" placeholder="http://your-twitter.com/" value="{{ old('twitter') }}">
            
                                            @if ($errors->has('twitter'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('twitter') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('google_plus') ? ' has-error' : '' }}">
                                        <label for="google_plus" class="col-md-3 control-label">Google Plus <span style="color:grey"> (optionnel)</span></label>
            
                                        <div class="col-md-8">
                                            <input id="google_plus" type="url" class="form-control" name="google_plus" placeholder="http://your-google-plus.com/" value="{{ old('google_plus') }}">
            
                                            @if ($errors->has('google_plus'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('google_plus') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                                        <label for="linkedin" class="col-md-3 control-label">Linkedin <span style="color:grey"> (optionnel)</span></label>
            
                                        <div class="col-md-8">
                                            <input id="linkedin" type="url" class="form-control" name="linkedin" placeholder="http://your-linkedin.com/" value="{{ old('linkedin') }}">
            
                                            @if ($errors->has('linkedin'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('linkedin') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-3 control-label">Le titre de CV</label>
        
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="développeur" required>
        
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('title') }}</strong>
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
                                            @if ($errors->has('experience'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('experience') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>

                                
                                <div class="form-group{{ $errors->has('etude') ? ' has-error' : '' }}">
                                    <label for="etude" class="col-md-3 control-label">Niveau d{{ "'" }}études</label>
                                    <div class="col-md-8">
                                        <select name="etude" class=" form-control" data-live-search="true" title="niveau d'etudes" data-size="5" data-container="body" required>
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option style="color:black" value="Bac">Bac</option>
                                            <option style="color:black" value="Bac+1">Bac+1</option>
                                            <option style="color:black" value="Bac+2">Bac+2</option>
                                            <option style="color:black" value="Bac+3">Bac+3</option>
                                            <option style="color:black" value="Bac+4">Bac+4</option>
                                            <option style="color:black" value="Bac+5">Bac+5</option>
                                            <option style="color:black" value="Bac+6 et plus">Bac+6 et plus</option>
                                        </select>
                                            @if ($errors->has('etude'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('etude') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                
                                

                                <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                                    <label for="salary" class="col-md-3 control-label">Le salaire souhaité</label>
        
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="salary" value="{{ old('salary') }}" placeholder="0 DH" min="0" max="99999999" required>
        
                                        @if ($errors->has('salary'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('salary') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 
                                

                                <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                    <label for="age" class="col-md-3 control-label">Votre age</label>
        
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="age" value="{{ old('age') }}" placeholder="20  Annes" min="15" max="100" required>
        
                                        @if ($errors->has('age'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('age') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> 

                                <div class="form-group{{ $errors->has('civility') ? ' has-error' : '' }}">
                                    <label for="civility" class="col-md-3 control-label">Civilité</label>
                                    <div class="col-md-8">
                                        <select name="civility" class=" form-control" data-live-search="true" title="touts civility" data-size="5" data-container="body" required>
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option style="color:black" value="Femme">Femme</option>
                                            <option style="color:black" value="Homme">Homme</option>
                                        </select>
                                            @if ($errors->has('civility'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('civility') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('about_me') ? ' has-error' : '' }}">
                                        <label for="about_me" class="col-md-3 control-label">A propo de moi</label>
            
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="about_me" value="{{ old('about_me') }}" rows="5" placeholder="a propo de moi" required></textarea>
            
                                            @if ($errors->has('about_me'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('about_me') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                    <label for="birthdate" class="col-md-3 control-label">Date de naissance </label>
                                    <div class="col-md-8">
                                            <input class="form-control" name="birthdate" type="date" value="{{ old('birthdate') }}"  max="<?php=date('m/d/Y'); ?>" required>
                                            @if ($errors->has('our_offer'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('birthdate') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                                    <br><br>
                                    <label for="active" class="col-md-7 control-label">Votre CV est visible par les recruteurs</label>

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


                                <div class="form-group">
                                    <br><br>
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
        <!-- ===== End of Profil Section ===== -->



@endsection