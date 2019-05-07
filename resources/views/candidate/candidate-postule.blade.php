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
                                    <a href="{{url('/candidate/candidate-favorites')}}" role="button">mon favorites</a>
                                </li>
                                    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a style="color:#29b2fe" href="{{  url('/candidate/candidate-postulations')}}" role="button"> les postulations</a>
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
                    <h2> Mes postulations</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/candidate/candidate-profile') }}">accueil</a></li>
                        <li class="active">Mes postulations</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->





                    





    <!-- ===== Start of Testimonial Section ===== -->
    <section class="ptb80" id="testimonials">
        <div class="container">

            <!-- Section Title -->
            <div class="section-title">
                <h2 class="text-white" style="color:black;"><i class="fa fa-bullhorn"></i>&nbsp;les annonces postulée</h2>
            </div>


            <!-- Start of Owl Slider -->
            <div class="owl-carousel testimonial">

                    @foreach ($recruiters as $recruiter)
                    @foreach ($jobs as $job)
                    @foreach ($postules as $postule)
                    @if ($job->user_id == $recruiter->user_id)
                    @if ($postule->postule == $job->id)
                    <!-- Start of Single Job Post 1 -->


                <!-- Start of Slide item -->
                <div class="item">
                    <div class="review">
                            <div class="text-right">
                                <br>
                                <a><i class="fa fa-plus" data-toggle="modal" data-target="#myModalll{{ $postule->id }}" data-dismiss="modal">&nbsp;</i></a>
                                &nbsp;&nbsp;
                                <a href="{{ '/candidate/candidate-postulations/'.$postule->id }}" style="color:red;" ><i class="fa fa-times">&nbsp;</i></a>
                                &nbsp;&nbsp;
                            </div>
                        <blockquote>
                            <a href="{{url('/job-page/'.$job->id)}}">
                                <h4>{{ $job->title }}</h4>
                            </a>
                            <br>
                            {{ $postule->message }}
                            <br><br>
                            <small style="color:black;">{{ $postule->updated_at }}</small>
                            @foreach ($files as $file)
                                @if ($postule->type = "file")
                                    @if ($job->user_id == $postule->postule )
                                        @if ($file->id == $postule->attachment)
                                            <small><a href="{{ url('/candidate/candidate-postule/pdf/'.$file->id) }}" target="_blank">Attachment</a></small>
                                            @break
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        </blockquote>
                    </div>

                    <div class="customer">
                        <a href="{{url('/company-page/'.$recruiter->user_id)}}">
                            <img src="{{ asset('storage/'.$recruiter->logo) }}" alt="">
                        </a>
                        <br>
                        <a href="{{url('/company-page/'.$recruiter->user_id)}}">
                            <h6 class="uppercase pt20" style="color:black;">{{ $recruiter->name_entreprise }}</h6>
                        </a>
                    </div>
                </div>
                <!-- End Slide item -->
                    <!-- End of Single Job Post 1 -->
                    

            
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach


            </div>
            <!-- End of Owl Slider -->

        </div>
    </section>




                    @foreach ($recruiters as $recruiter)
                    @foreach ($jobs as $job)
                    @foreach ($postules as $postule)
                    @if ($job->user_id == $recruiter->user_id)
                    @if ($postule->postule == $job->id)
            <!-- ============================ start of model message history ============================ -->

                <div class="modal fade" id="myModalll{{ $postule->id }}" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button><br>
                            <h5 class="modal-title">
                                <p class="">
                                    Les réponse envoyer par <b>{{ $recruiter->name_entreprise }}</b> pour l{{ "'" }}annonce <b>{{ $job->title }}</b> 
                                </p>
                            </h5>
                        </div>
                        <div class="modal-body">
                        <?php $num = 0; ?>

                            @foreach ($messages as $message)
                                @if ($message->job_id == $job->id)
                                    @if ($message->postule_id == $postule->id)
                                        @if ($job->id == $postule->postule)
                                            <br><br>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <span>La date de cette réponse : <b>{{ $message->updated_at }}</b></span>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="{{ url('candidate/candidate-messages/'.$message->id) }}" class="btn btn-link pull-right"><i class="fa fa-times" style="color:red"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="form-control" style="background-color: lavender;">{{ $message->message }}</p>
                                            </div>
                                            <?php $num++; ?>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        @if ($num == 0)
                            <h4>aucun message trouvé</h4>
                        @endif
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermmer</button>
                        </div>
                    </div>
                    </div>
                </div>
      
            <!-- ============================ end of model message history ============================ -->
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach
    






@endsection