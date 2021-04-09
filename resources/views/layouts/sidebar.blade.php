<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{url('index')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/seterLogo.png')}}" alt="" height="30" >
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/seterLogo.png')}}" alt="" height="30" class="logo logo-dark">
            </span>
        </a>

        <a href="{{url('index')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png')}}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                        <a href="#">
                            <i class="uil-home-alt"></i><span class="badge badge-pill badge-primary float-right"></span>
                            <span>Dashboard</span>
                        </a>

                </li>

                <li>
                    <a href="{{route('departements.index')}}">
                        <i class="fas fa-building"></i><span class="badge badge-pill badge-primary float-right"></span>
                        <span>Départements</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
