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
                            <!-- Login Menu Item -->

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
                                    <a href="{{ url('/recruiter/company-post-job') }}" role="button">créer une annonce</a>
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


    <!-- ===== Start of Job Header Section ===== -->
    <div id="activee">
    <section class="job-header ptb60">
        <div class="container">

            <!-- Start of Row -->
            <div class="row">

                <div class="col-md-9 col-xs-12">
                    <h3>{{ $job->title }}</h3>
                </div>
                <div class="col-md-3 col-xs-12 clearfix">


                    <div class="form-group">
                        <label for="active" class="col-md-7 control-label">activer/désactiver votre annonce</label>

                        <div class="col-md-5"> 
                            <label class="switch">
                                <input v-if="action" class="form-control" name="action" type="checkbox" value="true" v-model="action" @change="updateActive(action)" checked>
                                <input v-else class="form-control" name="action" type="checkbox" value="false" v-model="action" @change="updateActive(action)">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>







                </div>

            </div>
            <!-- End of Row -->

        </div>
    </section>
    <!-- ===== End of Job Header Section ===== -->





    <!-- ===== Start of Main Wrapper Job Section ===== -->
    <section class="ptb80" id="job-page">
        <div class="container">

            <!-- Start of Row -->
            <div class="row">

                <!-- ===== Start of Job Details ===== -->
                <div class="col-md-8 col-xs-12">

                    <!-- Start of Company Info -->
                    <div class="row company-info">

                        <!-- Job Company Image -->
                        <div class="col-md-3">
                            <div>
                                <a href="{{ url('/recruiter/company-page') }}">
                                    <img src="{{ asset('storage/'.$recruiter->logo) }}" alt="Smiley face" height="100" width="100">
                                </a>
                            </div>
                        </div>

                        <!-- Job Company Info -->
                        <div class="col-md-9">
                            <div class="job-company-info mt30">
                                <a href="{{ url('/recruiter/company-page') }}">
                                    <h3 class="capitalize" style="color:#666;">{{ $recruiter->name_entreprise }}</h3>
                                </a>
                                <ul class="list-inline mt10">
                                    <li><a href="{{ $recruiter->website }}"><i class="fa fa-link" aria-hidden="true"></i>Website </a>&nbsp;</li>
                                    <li><a><i class="fa fa-phone" aria-hidden="true"></i>{{ $recruiter->phone_number }}</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- End of Company Info -->


                    <!-- Start of Job Details -->
                    <div class="row job-details mt40">
                        <div class="col-md-12">


                            <!-- Div wrapper -->
                            <div class="pt40">
                                <h5>Aperçu de l{{ "'" }}emploi</h5>

                                <p class = "mt20">
                                    {{ $job->description_post }}
                                </p>

                            </div>

                            <!-- Div wrapper -->
                            <div class="pt40">
                                <h5 class="mt40">exigences principales</h5>

                                    <p class = "mt20">
                                        {{ $job->key_requirement }}
                                    </p>

                            </div>

                            <!-- Div wrapper -->
                            <div class="pt40">
                                <h5 class="mt40">Nous offrons</h5>

                                    <p class = "mt20">
                                        {{ $job->our_offer }}
                                    </p>

                            </div>

                        </div>
                    </div>
                    <!-- End of Job Details -->

                </div>
                <!-- ===== End of Job Details ===== -->





                <!-- ===== Start of Job Sidebar ===== -->
                <div class="col-md-4 col-xs-12">

                    <!-- Start of Job Sidebar -->
                    <div class="job-sidebar">

                        <h4 class="uppercase">nos contact</h4>

                        <!-- Start of Social Media ul -->
                        <ul class="social-btns list-inline mt20">
                            <!-- Social Media -->
                            <li>
                                <a href="{{ $recruiter->facebook }}" class="social-btn-roll facebook transparent">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                        <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    </div>
                                </a>
                            </li>

                            <!-- Social Media -->
                            <li>
                                <a href="{{ $recruiter->twitter }}" class="social-btn-roll twitter transparent">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                        <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    </div>
                                </a>
                            </li>

                            <!-- Social Media -->
                            <li>
                                <a href="{{ $recruiter->google_plus }}" class="social-btn-roll google-plus transparent">
                                    <div class="social-btn-roll-icons">
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                        <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    </div>
                                </a>
                            </li>

                                <li>
                                        <a href="{{ $recruiter->linkedin }}" class="social-btn-roll linkedin transparent">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                                <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ $recruiter->insagram }}" class="social-btn-roll instagram transparent">
                                            <div class="social-btn-roll-icons">
                                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                                <i class="social-btn-roll-icon fa fa-instagram"></i>
                                            </div>
                                        </a>
                                    </li>
                        </ul>
                        <!-- End of Social Media ul -->



                        <ul class="job-overview nopadding mt40">
                            <li>
                                <h5><i class="fa fa-calendar"></i> Date postée:
                                </h5>
                                <span>{{ $job->updated_at }}</span>
                            </li>

                            <li>
                                <h5><i class="fa fa-map-marker"></i> Location:</h5>
                                <span>{{ $job->city }}</span>
                            </li>

                            <li>
                                <h5><i class="fa fa-users"></i> Nombres des Poste:</h5>
                                <span>{{ $job->number_post }} postes</span>
                            </li>

                            <li>
                                <h5><i class="fa fa-level-up"></i> Niveau d{{ "'" }}Expériences:</h5>
                                <span>{{ $job->experience }}</span>
                            </li>

                            <li>
                                <h5><i class="fa fa-cube"></i> Domaine:</h5>
                                <span>{{ $job->categorie }}</span>
                            </li>

                            <li>
                                <h5><i class="fa fa-file"></i> Type de Contrat:</h5>
                                <span>{{ $job->type_contract }}</span>
                            </li>

                            <li>
                                <h5><i class="fa fa-money"></i> Salaire par mois:</h5>
                                <span>{{ $job->salary_min }}DH - {{ $job->salary_max }}DH</span>
                            </li>

                            <li>
                                <h5><i class="fa fa-hourglass"></i> date d{{ "'" }}expiration:</h5>
                                <span>{{ $job->end_date }}</span>
                            </li>
                            <li>                                    
                                <div >
                                    <p v-if="action" class="form-control" style="background-color: lavender">
                                        votre annonce n{{ "'" }}est pas visualiser par les candidats
                                    </p>
                                    <p v-else class="form-control"  style="background-color:peachpuff">
                                        votre annonce est visualiser par touds les candidats 
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- Start of Job Sidebar -->


                    <!-- Start of Google Map -->
                    {{-- <div class="col-md-12 gmaps mt60">
                        <div id="map"></div>
                    </div> --}}
                    <!-- End of Google Map -->


                </div>
                <!-- ===== End of Job Sidebar ===== -->

            </div>
            <!-- End of Row -->

            <div class="row">
                    <div class="col-md-3"></div>
                    <div class="mt20 col-md-1">
                        <a class="btn btn-purple mt30" href="{{url('/recruiter/company-job-edit/'.$job->id)}}" >modifier</a>                    
                    </div>                      
                    <div class="mt20 col-md-2">
                            &nbsp;&nbsp;
                            <button class="btn btn-orange mt30" data-toggle="modal" data-target="#exampleModalJobDelete" data-whatever="@getbootstrap">supprimer</button>                   
                   </div>
            </div>



            <!-- ===== start of model delete ===== -->
            <form method="post" action="{{ url('recruiter/company-job-delete/'.$job->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="hidden" name="id" value="{{ $job->id }}">
            <div class="modal fade bd-example-modal-sm" id="exampleModalJobDelete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h6 class="modal-title">supprimer une Annonce</h6>
                        </div>
                        <div class="modal-body">
                            <p>es-tu sûr que tu veux supprimer cette Annonce</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-orange btn-small" name="submit">Supprimer</button>
                        </div>
                        </div>
                </div>
            </div>
            </form>
            <!-- ===== end of model delete ===== -->



            <!-- Start of Row -->
            <div class="row mt80">
                <div class="col-md-12">
                    <h3 class="capitalize pb40">autre annonces de Oneplus</h3>

                    <!-- Start of Owl Slider -->
                    <div class="owl-carousel related-jobs">

                        <!-- Start of Slide item -->
                        @foreach ($all_jobs as $job)
                            <div class="item">
                                <a href="{{url('/recruiter/company-job-page/'.$job->id)}}">
                                    <h5>{{ $job->title }}</h5>
                                </a>
                                <br>
                                <a href="{{url('/recruiter/company-job-page/'.$job->id)}}" class="btn btn-blue btn-small btn-effect"><i class="fa fa-plus"></i>  &nbsp;voir plus</a>

                                <h5 class="pt40 pb10"><i class="fa fa-money"></i> SalaIre / mois:</h5>
                                <h5>{{ $job->salary_min }}DH - {{ $job->salary_max }}DH</h5>
                            </div>
                        @endforeach
                        <!-- End of Slide item -->
                        
                    </div>
                    <!-- End of Owl Slider -->
                    
                </div>
            </div>
            <!-- End of Row -->

        </div>
    </section>
    <!-- ===== End of Main Wrapper Job Section ===== -->
</div>
<script src="{{ asset('js/vue.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>



<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'url'       => url('/'),
        'id'        => $job->id
    ]) !!}
</script>


<!-- ====================================== start of active ==================================== -->
<script>
    var CP0 = new Vue({
        el:'#activee',
        data:{
            action: ''
        },
        methods:{
            getActive:function(){
                axios.get(window.Laravel.url+'/recruiter/company-job-page-active/'+window.Laravel.id)
                .then(response => {
                    this.action = response.data;
                })
                .catch(error => {
                    console.log('errors : ', error)
                })
            },
            updateActive:function(action){
                this.action = action;
                axios.post(window.Laravel.url+'/recruiter/company-job-page-desactive/'+window.Laravel.id+'/'+this.action)
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