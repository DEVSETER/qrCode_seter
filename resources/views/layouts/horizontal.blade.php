<header id="page-topbar" style="background-color: #7f072c">
    <div class="navbar-header" >
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('index')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/seterLogo.png')}}" alt="" height="30" class="logo logo-dark">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/seterLogo.png')}}" alt="" height="30" class="logo logo-dark">
                    </span>
                </a>

                <a href="{{url('index')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/seter-logo2.png')}}" alt="" height="30" >
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/seter-logo2.png')}}" alt="" height="30" >
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>


        </div>

        <div class="d-flex">




            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ URL::asset('assets/images/users/profile picture.jpg')}}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1 font-weight-medium font-size-15">{{Auth::user()->name}}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="uil uil-sign-out-alt font-size-18 align-middle mr-1 text-muted"></i> <span class="align-middle">Se Deconnecter</span></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>



        </div>
    </div>
    <div class="container-fluid">
        <div class="topnav">

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <i class="uil-home-alt mr-2"></i> Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('habilitations.index')}}">
                                <i class="fas fa-gavel"></i>  Habilitations
                            </a>
                        </li>


                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
