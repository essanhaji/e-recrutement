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
                                            <li><a href="{{ url('/recruiter/company-messages') }}">Mes messages</a></li>

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
                                    <a href="{{url('/recruiter/company-home')}}" role="button">mes annonces</a>
                                </li>
    
                                <!-- pour candidat Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{url('/recruiter/company-profile-edit')}}" role="button">modifier mon profil</a>
                                </li>
    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{url('/recruiter/company-post-job')}}" role="button">publier une annonces</a>
                                </li>
                                    
                                <!-- pour recruteur Menu Item -->
                                <li class="simple-menu">
                                    <a href="{{url('/recruiter/company-page')}}" role="button">mon profil</a>
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
                    <h2>Les postulations</h2>
                </div>
            </div>
            <!-- End of Page Title -->

            <!-- Start of Breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/recruiter/company-home') }}">accueil</a></li>
                        <li class="active">les annonce postulée</li>
                    </ul>
                </div>
            </div>
            <!-- End of Breadcrumb -->

        </div>
    </section>
    <!-- =============== End of Page Header 1 Section =============== -->






        <div class="container">
            <!-- Start of Job Post Main -->

            <div class="col-md-12 col-sm-12 col-xs-12 job-post-main mt60">
                <!-- Start of Job Post Wrapper -->
                <div class="job-post-wrapper mt60">
                    <br>
                    <div class="section-title">
                        <h2 class="capitalize" style="text-align: center"><i class="fa fa-bullhorn"></i>&nbsp;Les annonces postulée</h2>
                    </div>
                        <!-- ===== Start of Blog Masonry Section ===== -->
                    <section class="blog-masonry ptb80" style="background-color:white">
                    <div class="blog-grid">

                    @foreach ($jobs as $job)
                    @foreach ($postules as $postule)
                    @if ($job->id == $postule->postule)
                    @foreach ($candidates as $candidate)
                    
                    @if ($candidate->user_id == $postule->user_id)







                    @foreach ($files as $file)
                    @if ($file->id == $postule->attachment)
                    @if ($postule->type == "file")
                        <!-- ============================================== Start of Single Job Post 1 ============================================== -->
                        <div class="single-job-post row nomargin">
                            <!-- Job Company -->
                            <div class="col-md-2 col-xs-3 nopadding">
                                <div>
                                    <a data-toggle="modal" data-target="#exampleModal{{ $file->id }}">
                                        <img src="{{ asset('storage/'.$candidate->picture) }}" alt="Smiley face" height="100" width="100">
                                    </a>
                                </div>
                            </div>

                            <!-- Job Title & Info  -->
                            <div class="col-md-8 col-xs-6 ptb20">
                                <div class="job-title">
                                    <a href="{{url('recruiter/company-job-page/'.$job->id)}}">{{ $job->title }}</a>
                                </div>

                                <div class="job-info">
                                    <p>Par : {{ $candidate->last_name }} &nbsp; {{ $candidate->first_name }}</p>
                                </div>
                            </div>

                            <!-- Job Category -->
                            <div class="col-md-2 col-xs-3 ptb30">
                                <div class="job-category">
                                    <a class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{ $postule->id }}" ><i class="fa fa-plus" style="color:#29b1fd"></i></a>
                                    <a class="btn btn-link" data-toggle="modal" data-target="#exampleModalLong{{ $postule->id }}" ><i class="fa fa-check" style="color:green"></i></a>
                                    <a class="btn btn-link" data-toggle="modal" data-target="#exampleModalDelete{{ $postule->id }}" ><i class="fa fa-times" style="color:red"></i></a>

                                </div>
                            </div>

                        </div>
                        <!-- ============================================== End of Single Job Post 1 ============================================== -->

                        <!--============================================== Modal postule ==============================================-->
                        <div class="modal fade" id="exampleModal{{ $postule->id }}" role="dialog" >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:red">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">Postulation par : {{ $candidate->last_name }} &nbsp; {{ $candidate->first_name }}</h5>
                                <br>
                            </div>
                            <div class="modal-body">
                                <p>
                                    {{ $postule->message }}
                                </p>
                            </div>
                            <div class="modal-header">
                            <h5 class="modal-title">Attachement :</h5>
                            <br><br>
                                <a href="{{ url('/recruiter/company-postule/pdf/'.$file->id) }}" target="_blank">Voir le CV de format PDF</a>
                                <br><br>
                            </div>

                            <div class="modal-footer">
                                <br>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermmer</button>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal{{ $postule->id }}" data-dismiss="modal">Message</button>
                                <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#exampleModalLong{{ $postule->id }}" data-whatever="@getbootstrap" data-dismiss="modal">Répondre</button>

                            </div>
                            </div>
                        </div>
                        </div>

                        <!--======================== start of Modal messge ===================================================-->
                        <form method="POST" action="{{ url('recruiter/company-postule/message/stor') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                            <input type="hidden" name="postule_id" value="{{ $postule->id }}">
                        <div class="modal fade" id="exampleModalLong{{ $postule->id }}" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:red">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLongTitle">Réponse ou postulation de {{ $candidate->last_name }}  {{ $candidate->first_name }} </h5>
                                <br>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <br>
                                <label for="comment">Réponse :</label>
                                <br><br>
                                <textarea class="form-control" rows="7" name="message" placeholder="votre Réponse ..."></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <br>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermmer</button>
                                <button type="submit" class="btn btn-blue">Envoyer</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    <!--======================== end of Modal messge ===================================================-->

            <!-- ============================ start of model delete ============================ -->
            <form action="{{ url('recruiter/company-postule/'.$postule->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="file_id" value="{{ $file->id }}">
            <div class="modal fade bd-example-modal-sm" id="exampleModalDelete{{ $postule->id }}" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h6 class="modal-title" >supprimer une Postulation</h6>
                        </div>
                        <div class="modal-body">
                            <p>es-tu sûr que tu veux supprimer cette Postulation</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-orange btn-small">Supprimer</button>
                        </div>
                        </div>
                </div>
            </div>
            </form>
            <!-- ============================ end of model delete ============================ -->


            <!-- ============================ start of model message history ============================ -->

                <div class="modal fade" id="myModal{{ $postule->id }}" role="dialog">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button><br>
                            <h5 class="modal-title">
                                <p class="">
                                    Les dernier réponse au <b>{{ $candidate->last_name }}  {{ $candidate->first_name }}</b> pour la postulation de l{{ "'" }}annonce <b>{{ $job->title }}</b> 
                                </p>
                            </h5>
                        </div>
                        <div class="modal-body">
                            <?php $num = 0; ?>
                        @foreach ($messages as $message)
                            @if ($message->job_id == $job->id)
                                @if ($message->postule_id == $postule->id)
                                    <br><br>
                                    <div class="container">
                                        
                                        <div class="row">
                                            <div class="col-md-7">
                                                <span>La date de cette réponse : <b>{{ $message->updated_at }}</b></span>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="{{ url('recruiter/company-messages/'.$message->id) }}" class="btn btn-link pull-right"><i class="fa fa-times" style="color:red"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="">
                                            <p class="form-control" style="background-color: lavender;">{{ $message->message }}</p>
                                        </div>
                                        <?php $num++; ?>
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











                    

                    @if ($candidate->user_id == $postule->user_id)
                        @if(($candidate->user_id == $postule->attachment))
                        @if ($postule->type == "page")

                            <!-- ============================ Start of Single Job Post 1 ============================ -->
                            <div class="single-job-post row nomargin">
                                <!-- Job Company -->
                                <div class="col-md-2 col-xs-3 nopadding">
                                    <div>
                                        <a data-toggle="modal" data-target="#exampleModal{{ $candidate->id }}">
                                            <img src="{{ asset('storage/'.$candidate->picture) }}" alt="Smiley face" height="100" width="100">
                                        </a>
                                    </div>
                                </div>

                                <!-- Job Title & Info -->
                                <div class="col-md-8 col-xs-6 ptb20">
                                    <div class="job-title">
                                        <a href="{{url('recruiter/company-job-page/'.$job->id)}}">{{ $job->title }}</a>
                                    </div>

                                    <div class="job-info">
                                        <p>Par : {{ $candidate->last_name }} &nbsp; {{ $candidate->first_name }}</p>
                                    </div>
                                </div>

                                <!-- Job Category -->
                                <div class="col-md-2 col-xs-3 ptb30">
                                    <div class="job-category">
                                    <a class="btn btn-link" data-toggle="modal" data-target="#exampleModal{{ $postule->id }}" data-whatever="@getbootstrap"><i class="fa fa-plus" style="color:#29b1fd"></i></a>
                                    <a class="btn btn-link" data-toggle="modal" data-target="#exampleModalLong{{ $postule->id }}" data-whatever="@getbootstrap"><i class="fa fa-check" style="color:green"></i></a>
                                    <a class="btn btn-link" data-toggle="modal" data-target="#exampleModalDelete{{ $postule->id }}" data-whatever="@getbootstrap"><i class="fa fa-times" style="color:red"></i></a>

                                    </div>
                                </div>
                            </div>
                            <!-- ============================ End of Single Job Post 1 ============================ -->



                        <!-- ============================ Modal postule ============================ -->
                        <div class="modal fade" id="exampleModal{{ $postule->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:red">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLabel">Postulation par : {{ $candidate->last_name }} &nbsp; {{ $candidate->first_name }}</h5>
                                <br>
                            </div>
                            <div class="modal-body">
                                <p>
                                    {{ $postule->message }}
                                </p>
                            </div>
                            <div class="modal-header">
                            <h5 class="modal-title">Attachement :</h5>
                            <br><br>
                                <a href="{{ url('/candidate-profile/'.$candidate->user_id) }}" target="_blank">Voir le CV</a>
                                <br><br>
                            </div>

                            <div class="modal-footer">
                                <br>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermmer</button>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalll{{ $postule->id }}" data-dismiss="modal">Message</button>
                                <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#exampleModalLong{{ $postule->id }}" data-whatever="@getbootstrap" data-dismiss="modal">Répondre</button>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!--======================== start of Modal messge ===================================================-->
                        <form method="POST" action="{{ url('recruiter/company-postule/message/stor') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                            <input type="hidden" name="postule_id" value="{{ $postule->id }}">
                        <div class="modal fade" id="exampleModalLong{{ $postule->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:red">&times;</span>
                                </button>
                                <h5 class="modal-title" id="exampleModalLongTitle">Réponse ou postulation de {{ $candidate->last_name }}  {{ $candidate->first_name }} </h5>
                                <br>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <br>
                                <label for="comment">Réponse :</label>
                                <br><br>
                                <textarea class="form-control" rows="7" name="message" placeholder="votre Réponse ..."></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <br>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermmer</button>
                                <button type="submit" class="btn btn-blue">Envoyer</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    <!--======================== end of Modal messge ===================================================-->

            <!-- ============================ start of model delete ============================ -->
            <form action="{{ url('recruiter/company-postule/'.$postule->id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="file_id" value="{{ $candidate->id }}">
            <div class="modal fade bd-example-modal-sm" id="exampleModalDelete{{ $postule->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:red">&times;</span>
                            </button>
                            <h6 class="modal-title" >supprimer une Postulation</h6>
                        </div>
                        <div class="modal-body">
                            <p>es-tu sûr que tu veux supprimer cette Postulation</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-orange btn-small">Supprimer</button>
                        </div>
                        </div>
                </div>
            </div>
            </form>
            <!-- ============================ end of model delete ============================ -->



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
                                    Les dernier réponse au <b>{{ $candidate->last_name }}  {{ $candidate->first_name }}</b> pour la postulation de l{{ "'" }}annonce <b>{{ $job->title }}</b> 
                                </p>
                            </h5>
                        </div>
                        <div class="modal-body">
                        <?php $num = 0; ?>
                        @if (count($messages) == 0)
                        @else
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
                                                        <a href="{{ url('recruiter/company-messages/'.$message->id) }}" class="btn btn-link pull-right"><i class="fa fa-times" style="color:red"></i></a>
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
                        @endif
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
                    @endif
                                    


            



                    <!-- End of Single Job Post 1 -->   

                    

                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    @endforeach
                    

            </div>
            
    </section>
        </div>
            </div>
        </div><br><br><br><br><br><br><br><br>









@endsection