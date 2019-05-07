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
                            <a class="dropdown-toggle action" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size:17px; color:black;">
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
                            <a href="{{url('/candidate/candidate-profile')}}" role="button" style="color:#29b2fe">mon CV</a>
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

<!-- ===== Start of Candidate Profile Header Section ===== -->
<section class="profile-header">
</section>
<!-- ===== End of Candidate Header Section ===== -->

<!-- ===== Start of Main Wrapper Candidate Profile Section ===== -->
<section class="pb80" id="candidate-profile2">
    <div class="container">
        <!-- Start of Row -->
        <div class="row candidate-profile" id="activee">
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
                        <div class="job-post-footer row">
                            <div class="col-md-4 col-sm-2 col-xs-12">
                                <span class="experience"><i class="fa fa-level-up"></i>&nbsp;&nbsp;  {{ $cv->experience }}</span>
                            </div>
                            <div class="col-md-4 col-sm-2 col-xs-12">
                                <span class="experience"><i class="fa fa-graduation-cap"></i>&nbsp;&nbsp;{{ $cv->etude }}</span>
                            </div>
                        </div>
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
            <div class="col-md-1"></div>
            <!-- Start of Profile Info -->
            <div class="col-md-5 col-md-offset-2 col-xs-12 mt80">
                <center>
                    <a href="{{ url('/candidate/candidate-profile-edit') }}" class="text-center"><i class="fa fa-edit"></i>&nbsp; Edit profil</a>
                </center>
                <br>
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
                        <div >
                            <p v-if="action" class="form-control" style="background-color:powderblue">
                                votre CV est visualiser par touds les recruteurs
                            </p>
                            <p v-else class="form-control"  style="background-color:peachpuff">
                                votre CV n{{ "'" }}est pas visualiser par les recruteurs
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-3 text-center"> 
                            <label class="switch">
                                <input v-if="action" class="form-control" name="action" type="checkbox" value="true" v-model="action" @change="updateActive(action)" checked>
                                <input v-else class="form-control" name="action" type="checkbox" value="false" v-model="action" @change="updateActive(action)">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <label for="active" class="col-md-9 control-label" style="color:black">activer/désactiver votre CV</label>
                    </li>
                </ul>
            </div>
            <!-- End of Profile Info -->
        </div>
        <!-- End of Row -->










        <!-- Start of Row -->
        <div id="skills">
            <div class="row skills pb80 mt80">
                <br> <br> <br>
                <div class="col-md-12 text-center section-title">
                    <h2 class="pb40">
                        COMPÉTENCES 
                        <button class="btn btn-link" @click="preperAddSkills" data-toggle="modal" data-target="#exampleModalSkill" data-whatever="@getbootstrap">
                            <h3 style="color:#29b2fe;"><i class="fa fa-plus"></i></h3>
                        </button>
                    </h2>
                </div>
                <!-- Start of Skill Charts Wrapper -->
                <div class="col-md-12 mt20">
                    <div class="row">
                        <center>
                            <div v-for="skill in skills">
                                <!-- Chart -->
                                <div class="col-md-2 col-sm-6 col-xs-6 chart mb40" :data-percent="skill.level">
                                    <span>@{{ skill.name }}</span>
                                    <span>
                                        <br><br>
                                        <center>
                                            <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalSkill" data-whatever="@getbootstrap"  @click="editSkills(skill)"><small ><i class="fa fa-pencil" style="color:green" ></i></small></button>
                                            <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalSkillDelete" data-whatever="@getbootstrap" @click="preperSkills(skill)"><small ><i class="fa fa-times" style="color:red" ></i></small></button>
                                        </center>
                                    </span>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <!-- End of Skill Charts Wrapper -->
            </div>
            <!-- End of Row -->

            <!-- ===== start of model delete ===== -->
            <div class="modal fade bd-example-modal-sm" id="exampleModalSkillDelete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:red">&times;</span>
                        </button>
                        <h6 class="modal-title" id="exampleModalCenterTitle">supprimer une compétence</h6>
                    </div>
                    <div class="modal-body">
                        <p>es-tu sûr que tu veux supprimer cette compétence</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-orange btn-small" @click="deleteSkills"data-dismiss="modal">Supprimer</button>
                    </div>
                    </div>
            </div>
            </div>
            <!-- ===== end of model delete ===== -->

            <!-- ===== Start of model skills ===== -->
            <form action="{{ url('/candidate/candidate-profile') }}" method="POST">
                {{ csrf_field() }}
            <div class="modal fade" id="exampleModalSkill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h5 v-if="action" class="modal-title" id="exampleModalLabel">Ajouter une Compétences</h5>
                            <h5 v-else= class="modal-title" id="exampleModalLabel">Edite une Compétences</h5>
                        </div>
                        <br>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="id" v-model="skill.id">
                                <label for="recipient-name" class="col-form-label">Compétence :</label>
                                <input type="text" name="name" class="form-control" v-model="skill.name" required>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="message-text" class="col-form-label">Niveau :</label>
                                    <br><br>
                                    <input type="range" name="level" class="custom-range" min="1" max="100" v-model="skill.level">
                                    <br>
                                    <p>Niveau : <span>@{{ skill.level }}</span> %</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                    <button v-if="action" class="btn btn-blue" @click="AddSkills" type="submit">Ajouter</button>
                                    <button v-else class="btn btn-purple" @click="updateSkills" type="submit">Editer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <!-- ===== end of model skills ===== -->
        </div>
        <!-- ===== End of Candidate Profile Section ===== -->












        
        <!-- ================================================================ Start of Education Section ==================================================== -->
        <div id="etude">
        <section class="education">
            <div class="container">
                <div class="col-md-12 text-center section-title">
                    <h2 class="">
                        FORMATIONS 
                        <button class="btn btn-link" @click="preperAddEtude" data-toggle="modal" data-target="#exampleModalEtude" data-whatever="@getbootstrap">
                            <h3 style="color:#29b2fe;"><i class="fa fa-plus"></i></h3>
                        </button>
                    </h2>
                </div>
                <!-- Start of Education Column -->
                <div v-for="etude in etudes">
                    
                <div class="col-md-12">
                    
                    <div class="item-block shadow-hover">
                        <!-- Start of Education Header -->
                        <div class="education-header clearfix">
                            <i class="fa fa-graduation-cap fa-5x"></i> &nbsp;&nbsp;
                            <div>
                                <h4>@{{ etude.diploma }} <small>- @{{ etude.department }}</small></h4>
                                <h5>@{{ etude.university }} &nbsp; <small>- @{{ etude.start_date }} || @{{ etude.end_date }}</small></h5>
                            </div>
                            <h6 class="time">
                                <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalEtude" data-whatever="@getbootstrap"  @click="editEtudes(etude)"><small ><i class="fa fa-pencil" style="color:green" ></i></small></button>
                                <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalEtudeDelete" data-whatever="@getbootstrap" @click="preperEtudes(etude)"><small ><i class="fa fa-times" style="color:red" ></i></small></button>
                            </h6>

                        </div>
                        <!-- End of Education Header -->
                        <!-- Start of Education Body -->
                        <div class="education-body">
                            <p>@{{ etude.description }}</p>
                        </div>
                        <!-- End of Education Body -->
                        
                    </div>
                    <br>
                </div>
                </div>
                <!-- End of Education Column -->
            </div>
        </section>
    
            <!-- ===== Start of model etude ===== -->
            <div class="modal fade" id="exampleModalEtude" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h5 v-if="action" class="modal-title" id="exampleModalLabel">Ajouter une Formation</h5>
                            <h5 v-else= class="modal-title" id="exampleModalLabel">Edite une Formation</h5>
                        </div>
                        
                        <div class="modal-body">
                            <input type="hidden" name="id" v-model="etude.id">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Diploma :</label>
                                <input type="text" name="diploma" class="form-control" v-model="etude.diploma" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Département :</label>
                                <input type="text" name="department" class="form-control" v-model="etude.department" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Université :</label>
                                <input type="text" name="university" class="form-control" v-model="etude.university" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Une petite Description :</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="une petite description ..." v-model="etude.description" required></textarea>
                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="recipient-name" class="col-form-label">Date de début :</label>
                                        <input type="date" name="start_date" class="form-control" v-model="etude.start_date" required>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <label for="recipient-name" class="col-form-label">Date de fin :</label>
                                        <input type="date" name="end_date" class="form-control" v-model="etude.end_date" required>
                                        
                                    </div>
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                    <button v-if="action" class="btn btn-blue" @click="addEtude" data-dismiss="modal">Ajouter</button>
                                    <button v-else class="btn btn-purple" @click="updateEtudes" data-dismiss="modal">Editer</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== end of model etudes ===== -->


            <!-- ===== start of model delete ===== -->
            <div class="modal fade bd-example-modal-sm" id="exampleModalEtudeDelete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h6 class="modal-title" >supprimer une formation</h6>
                        </div>
                        <div class="modal-body">
                            <p>es-tu sûr que tu veux supprimer cette formation</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-orange btn-small" @click="deleteEtudes"data-dismiss="modal">Supprimer</button>
                        </div>
                        </div>
                </div>
            </div>
            <!-- ===== end of model delete ===== -->
        </div>

        <!-- =========================================================== End of Education Section ========================================================= -->

















        <!-- ===== Start of Work Experience Section ===== -->
        <div id="experience">
            <section class="work-experience ptb80"  style="background-color:white;">
                <div>
                    <div class="col-md-12 text-center section-title">
                        <h2>
                            EXPÉRIENCES 
                            <button class="btn btn-link" @click="preperaddExperience" data-toggle="modal" data-target="#exampleModalExperience" data-whatever="@getbootstrap">
                                <h3 style="color:#29b2fe;"><i class="fa fa-plus"></i></h3>
                            </button>
                        </h2>
                    </div>
                    <!-- Start of Work Experience Column -->
                    <div v-for="experience in experiences">
                        
                    <div class="col-md-12">
                        <div class="item-block shadow-hover">
                            <!-- Start of Work Experience Header -->
                            <div class="experience-header clearfix">
                                <i class="fa fa-cogs fa-5x"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                <div>
                                    <h4>@{{ experience.title }} </h4>
                                    <h6>@{{ experience.speciality }} &nbsp; <small> @{{ experience.start_date }} - @{{ experience.end_date }}</small></h6>
                                </div>
                                <h6 class="time">
                                    <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalExperience" data-whatever="@getbootstrap"  @click="editExperience(experience)"><small ><i class="fa fa-pencil" style="color:green" ></i></small></button>
                                    <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalExperienceDelete" data-whatever="@getbootstrap" @click="preperExperience(experience)"><small ><i class="fa fa-times" style="color:red" ></i></small></button>
                                </h6>
                            </div>
                            <!-- End of Work Experience Header -->
                            <!-- Start of Work Experience Body -->
                            <div class="experience-body">
                                <p>
                                    <p>@{{ experience.description }}</p>
                                </p>
                            </div>
                            <!-- End of Work Experience Body -->
                        </div>
                        <br>
                    </div>
                    </div>
                    <!-- End of Work Experience Column -->
                </div>
            </section>

            <!-- ===== Start of model experience ===== -->
            <div class="modal fade" id="exampleModalExperience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h5 v-if="action" class="modal-title">Ajouter une Experience</h5>
                            <h5 v-else= class="modal-title">Edite une Experience</h5>
                        </div>
                        
                        <div class="modal-body">
                            <input type="hidden" name="id" v-model="experience.id">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre :</label>
                                <input type="text" name="title" class="form-control" v-model="experience.title" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Spécialité :</label>
                                <input type="text" name="speciality" class="form-control" v-model="experience.speciality" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Une petite Description :</label>
                                <textarea class="form-control" name="description" rows="5" placeholder="une petite description ..." v-model="experience.description" required></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="recipient-name" class="col-form-label">Date de début :</label>
                                        <input type="date" name="start_date" class="form-control" v-model="experience.start_date" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="recipient-name" class="col-form-label">Date de fin :</label>
                                        <input type="date" name="end_date" class="form-control" v-model="experience.end_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                <button v-if="action" class="btn btn-blue" @click="addExperience" data-dismiss="modal">Ajouter</button>
                                <button v-else class="btn btn-purple" @click="updateExperience" data-dismiss="modal">Editer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== end of model experience ===== -->

            <!-- ===== start of model delete ===== -->
            <div class="modal fade bd-example-modal-sm" id="exampleModalExperienceDelete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h6 class="modal-title" >supprimer une Experience</h6>
                        </div>
                        <div class="modal-body">
                            <p>es-tu sûr que tu veux supprimer cette Experience</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-orange btn-small" @click="deleteExperience"data-dismiss="modal">Supprimer</button>
                        </div>
                        </div>
                </div>
            </div>
            <!-- ===== end of model delete ===== -->
        </div>
       <!-- ===== End of Work Experience Section ===== -->

    <br>
     </div>










    <!-- ===== Start of language Section ===== -->
    <div id="language">
        <section class="ptb40" id="countup" style="background-color:white;">
            <div class="container">
                <div class="col-md-12 text-center section-title">
                    <h2 class="">
                        <br>
                        LANGUES 
                        <button class="btn btn-link" @click="preperaddLanguage" data-toggle="modal" data-target="#exampleModalLanguage" data-whatever="@getbootstrap">
                            <h3 style="color:#29b2fe;"><i class="fa fa-plus"></i></h3>
                        </button>
                    </h2>
                </div>
                <!-- 1st Count up item -->
                <div v-for="language in languages">
                    <div class="text-center">
                        <div class="col-md-3  col-sm-3 col-xs-12">
                            <span class="langue">@{{ language.language_name }}</span>
                            <h4>@{{ language.level }}</h4>
                            <p>
                                <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalLanguage" data-whatever="@getbootstrap"  @click="editLanguage(language)"><small ><i class="fa fa-pencil" style="color:green" ></i></small></button>
                                <button class="btn btn-link" data-toggle="modal" data-target="#exampleModalLanguageDelete" data-whatever="@getbootstrap" @click="preperLanguage(language)"><small ><i class="fa fa-times" style="color:red" ></i></small></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            <!-- ===== Start of model language ===== -->
            <div class="modal fade" id="exampleModalLanguage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h5 v-if="action" class="modal-title" id="exampleModalLabel">Ajouter une Langue</h5>
                            <h5 v-else= class="modal-title" id="exampleModalLabel">Edite une Langue</h5>
                        </div>
                        <br>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" name="id" v-model="language.id">
                                <label for="recipient-name" class="col-form-label">Langue :</label>
                                <input type="text" name="language_name" class="form-control" v-model="language.language_name" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Niveau :</label>
                                <input type="text" name="level" class="form-control" v-model="language.level">
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                    <button v-if="action" class="btn btn-blue" @click="AddLanguage" data-dismiss="modal">Ajouter</button>
                                    <button v-else class="btn btn-purple" @click="updateLanguage" data-dismiss="modal">Editer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- ===== end of model language ===== -->

            <!-- ===== start of model delete ===== -->
            <div class="modal fade bd-example-modal-sm" id="exampleModalLanguageDelete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h6 class="modal-title">supprimer une Langue</h6>
                        </div>
                        <div class="modal-body">
                            <p>es-tu sûr que tu veux supprimer cette Langue</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-orange btn-small" @click="deleteLanguage" data-dismiss="modal">Supprimer</button>
                        </div>
                        </div>
                </div>
            </div>
            <!-- ===== end of model delete ===== -->

    </div>
    <!-- ===== End of language Section ===== -->   

</section>




<script src="{{ asset('js/vue.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>



<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'url'       => url('/'),
        'id'        => $cv->id
    ]) !!}
</script>


<!-- ====================================== start of skill ==================================== -->
<script>
    var app0 = new Vue({
        el:'#skills',
        data:{
            skills:[],
            action: true,
            skill: {
                id:0,
                user_id:{{ Auth::user()->id }},
                level:1,
                name:""
            }
        },
        methods:{
            getSkills:function(){
                axios.get(window.Laravel.url+'/candidate/candidate-profile/getSkills')
                .then(response => {
                    this.skills = response.data;
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            preperAddSkills:function(){
                this.action = true;
                this.skill = {
                    id:0,
                    user_id:{{ Auth::user()->id }},
                    level:1,
                    name:""
                }
            },
            AddSkills:function(){
                axios.post(window.Laravel.url+'/candidate/candidate-profile/addSkills', this.skill)
                .then(response => {
                    if(response.data.etat){
                        this.skills.unshift(this.skill);
                        this.skill = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            level:1,
                            name:""
                        }
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            editSkills:function(skill){
                this.action = false;
                this.skill = skill;
            },
            updateSkills:function(){
                axios.put(window.Laravel.url+'/candidate/candidate-profile/updateSkills', this.skill)
                .then(response => {
                    if(response.data.etat){
                        this.action = true; 
                        this.skill = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            level:1,
                            name:""
                        }
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            preperSkills:function(skill){
                this.skill = skill;
            },
            deleteSkills:function(){
                axios.delete(window.Laravel.url+'/candidate/candidate-profile/deleteSkills/'+this.skill.id)
                .then(response => {
                    if(response.data.etat){
                        this.skills.splice(this.skills.indexOf(this.skill), 1);
                        this.skill = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            level:1,
                            name:""
                        }
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            }
        },
    
        mounted: function(){
            this.getSkills();
        }
    });
</script>
<!-- ====================================== end of skill ==================================== -->



<!-- ====================================== start of etude ==================================== -->
<script>
    var app1 = new Vue({
        el:'#etude',
        data:{
            etudes:[],
            action: true,
            etude: {
                id:0,
                user_id:{{ Auth::user()->id }},
                start_date:"",
                end_date:"",
                diploma:"",
                department:"",
                university:"",
                description:""
            }
        },
        methods:{
            getEtude:function(){
                axios.get(window.Laravel.url+'/candidate/candidate-profile/getEtude')
                .then(response => {
                    this.etudes = response.data;
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            preperAddEtude:function(){
                this.action = true;
                this.etude = {
                    id:0,
                    user_id:{{ Auth::user()->id }},
                    start_date:"",
                    end_date:"",
                    diploma:"",
                    department:"",
                    university:"",
                    description:""
                }
            },
            addEtude:function(){
                axios.post(window.Laravel.url+'/candidate/candidate-profile/addEtude', this.etude)
                .then(response => {
                    if(response.data.etat){
                        this.etudes.unshift(this.etude);
                        this.etude = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            start_date:"",
                            end_date:"",
                            diploma:"",
                            department:"",
                            university:"",
                            description:""
                        }
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            editEtudes:function(etude){
                this.action = false;
                this.etude = etude;
            },
            updateEtudes:function(){
            axios.put(window.Laravel.url+'/candidate/candidate-profile/updateEtudes', this.etude)
            .then(response => {
                if(response.data.etat){
                    this.action = true; 
                    this.etude = {
                        id:0,
                        user_id:{{ Auth::user()->id }},
                        start_date:"",
                        end_date:"",
                        diploma:"",
                        department:"",
                        university:"",
                        description:""
                    }
                }
            })
            .catch(error => {
                console.log('errors : ', error)
            })
        },
        preperEtudes:function(etude){
            this.etude = etude;
        },
        deleteEtudes:function(){
            axios.delete(window.Laravel.url+'/candidate/candidate-profile/deleteEtudes/'+this.etude.id)
            .then(response => {
                if(response.data.etat){
                    this.etudes.splice(this.etudes.indexOf(this.etude), 1);
                    this.etude = {
                        id:0,
                        user_id:{{ Auth::user()->id }},
                        start_date:"",
                        end_date:"",
                        diploma:"",
                        department:"",
                        university:"",
                        description:""
                    }
                }
            })
            .catch(error => {
                console.log('errors : ', error)
            })
        }
    },
    mounted: function(){
        this.getEtude();
    }
    });
</script>
<!-- ====================================== end of etude ==================================== -->



<!-- ====================================== start of experience ==================================== -->
<script>
    var app2 = new Vue({
        el:'#experience',
        data:{
            experiences:[],
            action: true,
            experience: {
                id:0,
                user_id:{{ Auth::user()->id }},
                start_date:"",
                end_date:"",
                title:"",
                speciality:"",
                description:""
            }
        },
        methods:{
            getExperience:function(){
                axios.get(window.Laravel.url+'/candidate/candidate-profile/getExperience')
                .then(response => {
                    this.experiences = response.data;
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            preperaddExperience:function(){
                this.action = true;
                this.experience = {
                    id:0,
                    user_id:{{ Auth::user()->id }},
                    start_date:"",
                    end_date:"",
                    title:"",
                    speciality:"",
                    description:""
                }
            },
            addExperience:function(){
                axios.post(window.Laravel.url+'/candidate/candidate-profile/addExperience', this.experience)
                .then(response => {
                    if(response.data.etat){
                        this.experiences.unshift(this.experience);
                        this.experience = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            start_date:"",
                            end_date:"",
                            title:"",
                            speciality:"",
                            description:""
                        }
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            editExperience:function(experience){
                this.action = false;
                this.experience = experience;
            },
            updateExperience:function(){
            axios.put(window.Laravel.url+'/candidate/candidate-profile/updateExperience', this.experience)
            .then(response => {
                if(response.data.etat){
                    this.action = true; 
                    this.experience = {
                        id:0,
                        user_id:{{ Auth::user()->id }},
                        start_date:"",
                        end_date:"",
                        title:"",
                        speciality:"",
                        description:""
                    }
                }
            })
            .catch(error => {
                console.log('errors : ', error)
            })
        },
        preperExperience:function(experience){
            this.experience = experience;
        },
        deleteExperience:function(){
            axios.delete(window.Laravel.url+'/candidate/candidate-profile/deleteExperience/'+this.experience.id)
            .then(response => {
                if(response.data.etat){
                    this.experiences.splice(this.experiences.indexOf(this.experience), 1);
                    this.experience = {
                        id:0,
                        user_id:{{ Auth::user()->id }},
                        start_date:"",
                        end_date:"",
                        title:"",
                        speciality:"",
                        description:""
                    }
                }
            })
            .catch(error => {
                console.log('errors : ', error)
            })
        }
        },
        mounted: function(){
            this.getExperience();
        }
    });
</script>
<!-- ====================================== end of experience ==================================== -->



<!-- ====================================== start of language ==================================== -->
<script>
    var app3 = new Vue({
        el:'#language',
        data:{
            languages:[],
            action: true,
            language: {
                id:0,
                user_id:{{ Auth::user()->id }},
                level:"",
                language_name:""
            }
        },
        methods:{
            getLanguages:function(){
                axios.get(window.Laravel.url+'/candidate/candidate-profile/getLanguages')
                .then(response => {
                    this.languages = response.data;
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            preperaddLanguage:function(){
                this.action = true;
                this.language = {
                    id:0,
                    user_id:{{ Auth::user()->id }},
                    level:"",
                    language_name:""
                }
            },
            AddLanguage:function(){
                axios.post(window.Laravel.url+'/candidate/candidate-profile/AddLanguage', this.language)
                .then(response => {
                    if(response.data.etat){
                        this.languages.unshift(this.language);
                        this.language = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            level:"",
                            language_name:""
                        }
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            editLanguage:function(language){
                this.action = false;
                this.language = language;
            },
            updateLanguage:function(){
                axios.put(window.Laravel.url+'/candidate/candidate-profile/updateLanguage', this.language)
                .then(response => {
                    if(response.data.etat){
                        this.action = true; 
                        this.language = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            level:"",
                            language_name:""
                        }               
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            preperLanguage:function(language){
                this.language = language;
            },
            deleteLanguage:function(){
                axios.delete(window.Laravel.url+'/candidate/candidate-profile/deleteLanguage/'+this.language.id)
                .then(response => {
                    if(response.data.etat){
                        this.languages.splice(this.languages.indexOf(this.language), 1);
                        this.language = {
                            id:0,
                            user_id:{{ Auth::user()->id }},
                            level:"",
                            language_name:""
                        }
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            }
        },
    
        mounted: function(){
            this.getLanguages();
        }
    });
</script>
<!-- ====================================== end of skill ==================================== -->



<!-- ====================================== start of active ==================================== -->
<script>
    var CP0 = new Vue({
        el:'#activee',
        data:{
            action: ''
        },
        methods:{
            getActive:function(){
                axios.get(window.Laravel.url+'/candidate/candidate-profile-active/'+window.Laravel.id)
                .then(response => {
                    this.action = response.data;
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            updateActive:function(action){
                this.action = action;
                axios.post(window.Laravel.url+'/candidate/candidate-profile-desactive/'+window.Laravel.id+'/'+this.action)
                .then(response => {
                    if(response.data.etat){
                        this.action = action;
                    }
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            }
        },
        mounted: function(){
            this.getActive();
        }
    });
</script>
<!-- ====================================== end of active ==================================== -->

@endsection