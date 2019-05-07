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
                            <li><a href="{{ url('/recruiter/company-home') }}">accueil</a></li>
                            <li class="active">créer mon profile</li>
                        </ul>
                    </div>
                </div>
                <!-- End of Breadcrumb -->
    
            </div>
        </section>



        <!-- ===== Start of Profil Section ===== -->
        <section class="ptb80 titlePobPost" id="job-post">
            <div class="container">
                <!-- Start of Job Post Main -->
                <div class="section-title" style="margin-top: -5px;">
                    <h2 class="capitalize" style="text-align: center"><i class="fa fa-id-card"></i>&nbsp;créer mon profil</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 job-post-main" style="margin-top: -50px;">


                        <form class="form-horizontal" method="POST" action="{{ url('recruiter/company-profile-insert') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <br>

                                <div class="form-group{{ $errors->has('name_entreprise') ? ' has-error' : '' }}">
                                    <label for="name_entreprise" class="col-md-3 control-label">Nom de l{{"'"}}entreprise</label>
        
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name_entreprise" value="{{ old('name_entreprise') }}" placeholder="le nom de l'entreprise" required autofocus>
        
                                        @if ($errors->has('name_entreprise'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name_entreprise') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label for="address" class="col-md-3 control-label">L{{"'"}}adresse de l{{"'"}}entreprise</label>
        
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
                                        <label for="phone_number" class="col-md-3 control-label">numéro de téléphone</label>
            
                                        <div class="col-md-8">
                                            <input type="tel" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required size="10" minlength="10" maxlength="10" placeholder="06 xx xx xx xx">
            
                                            @if ($errors->has('phone_number'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>
                                
                                
                                
                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                        <label for="website" class="col-md-3 control-label">Site web</label>
            
                                        <div class="col-md-8">
                                            <input id="website" type="url" placeholder="http://your-company-website.com/" class="form-control" name="website" required>
            
                                            @if ($errors->has('website'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('website') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>

        

                                <!-- Start of category input -->
                                <div class="form-group{{ $errors->has('speciality') ? ' has-error' : '' }}">
                                    <label for="speciality" class="col-md-3 control-label">speciality</label>
                                    <div class="col-md-8">
                                        <select name="speciality" class=" form-control" data-live-search="true" title="touts speciality" data-size="5" data-container="body" required>
                                            <option value="" selected disabled hidden>Choose here</option>
                                            <option style="color:black" value="Comptabilité">Comptabilité</option>
                                            <option style="color:black" value="Bancaire">Bancaire</option>
                                            <option style="color:black" value="Design & art">Design & Art</option>
                                            <option style="color:black" value="Assurance">Assurance</option>
                                            <option style="color:black" value="Développement">Développement</option>
                                            <option style="color:black" value="Dedicine">Medicine</option>
                                            <option style="color:black" value="Marketing">Marketing</option>
                                            <option style="color:black" value="Management">Management</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                        <label for="logo" class="col-md-3 control-label">Logo de l{{ "'" }}entreprise</label>
            
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" name="logo" accept=".jpg,.png,.gif,.bmp,.tiff,.jpeg" required>
            
                                            @if ($errors->has('logo'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('logo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                                    <label for="facebook" class="col-md-3 control-label">La Page Facebook <span style="color:grey"> (optionnel)</span></label>
        
                                    <div class="col-md-8">
                                        <input id="facebook" type="url" class="form-control" name="facebook" placeholder="http://your-facebook-page.com/">
        
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
                                            <input id="insagram" type="url" class="form-control" name="insagram" placeholder="http://your-instagram.com/">
            
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
                                            <input id="twitter" type="url" class="form-control" name="twitter" placeholder="http://your-twitter.com/">
            
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
                                            <input id="google_plus" type="url" class="form-control" name="google_plus" placeholder="http://your-google-plus.com/">
            
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
                                            <input id="linkedin" type="url" class="form-control" name="linkedin" placeholder="http://your-linkedin.com/">
            
                                            @if ($errors->has('linkedin'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('linkedin') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>



                                <div class="form-group{{ $errors->has('description_entreprise') ? ' has-error' : '' }}">
                                        <label for="description_entreprise" class="col-md-3 control-label">Une description sur l{{"'"}}entreprise</label>
            
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="description_entreprise" value="{{ old('description_entreprise') }}" rows="4" placeholder="une description sur l'entreprise" required></textarea>
            
                                            @if ($errors->has('description_entreprise'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description_entreprise') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                </div>


                                <center>
                                    <br><br>
                                    <p class="fieldset">
                                        <input type="checkbox" id="accept-terms" name="agree" required>
                                        <label for="accept-terms">I agree to the <a href="{{ url('/privacy-policy') }}">Terms</a></label>
                                    </p>
                                    <br>
                                </center>
        
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
        <!-- ===== End of Profil Section ===== -->




@endsection