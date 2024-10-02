<style>
    .customlogo{
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        align-content: center;
        padding-left: 0.8%;
        border-radius: 0 0 40px 0;
        width: 170px;
        height: 80px;

    }

    .custom-nav .navbar-nav .nav-item .nav-link.active{
        color: #8b262c;
    }

    .custom-nav .navbar-nav .nav-item .nav-link.hover{
        color: #f2b774;
    }


</style>

<header id="page-topbar" style="background-color: #8b262c">
    <div class="navbar-header" >
        <div class="d-flex customlogo">
            <!-- LOGO -->
            <div class="navbar-brand-box " style="margin-top: 20px">
                <a href="{{url('index')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/LOGO-SETER.jpg')}}" alt="" height="30" class="logo logo-dark">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/LOGO-SETER.jpg')}}" alt="" height="30" class="logo logo-dark">
                    </span>
                </a>

                <a href="{{url('index')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/LOGO-SETER.jpg')}}" alt="" height="30" >
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/LOGO-SETER.jpg')}}" alt="" height="30" >
                    </span>
                </a>
            </div>




        </div>


        <div style="margin-left: 90%">


            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="d-none d-xl-inline-block ml-1 font-weight-medium font-size-15">{{Auth::user()->prenom}} {{Auth::user()->nom}}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->

                    <a class="dropdown-item" href="{{route('utilisateurs.edit', [\Illuminate\Support\Facades\Auth::user()->id])}}"><i class="fas fa-user-edit mr-2"></i>Edit Profil</a>
                    <a class="dropdown-item" href="{{ route('auth.logout') }}" ><i class="uil uil-sign-out-alt font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Se Deconnecter</span></a>


                </div>
            </div>



        </div>
    </div>
    <div class="container-fluid">
        <div class="topnav " >

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu custom-nav">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <i class="uil-home-alt mr-2"></i> Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('personnels.index')}}">
                                <i class="fas fa-user-tie mr-2" ></i>  Agents
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('habilitations.index')}}">
                                <i class="fas fa-gavel"></i>  Habilitations
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('habilitations.aboutToExpire')}}">
                                <i class="fas fa-user-clock mr-2"></i>  Habilitations arrivant à expiration
                            </a>
                        </li>

                        @if(\Illuminate\Support\Facades\Auth::user()->type == "admin")
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('utilisateurs.index')}}">
                                    <i class="fas fa-users mr-2"></i>  Utilisateurs
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-trash-restore mr-2"></i>Données supprimées <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                    <a class="nav-link" href="{{route('personnel.deletedList')}}">Agents</a>
                                    <a class="nav-link" href="{{route('habilitation.deletedRecords')}}">Habilitations</a>
                                </div>
                            </li>
                        @endif


                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
