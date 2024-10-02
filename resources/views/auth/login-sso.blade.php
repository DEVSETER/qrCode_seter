
@extends('layouts.master-without-nav')
@section('title')
    Login
@endsection



@section('content')

    <div class="account-pages my-5 pt-sm-5" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="#" class="mb-5 d-block auth-logo">
                            <img src="{{ URL::asset('assets/images/logo2.svg')}}" alt="" height="50" class="logo logo-dark">

                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card border border-warning" style="border-color:  #8b262c">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h4 class="text-warning">Gestion des habilitations</h4>
                                <h5 class="text-primary">Bienvenue !</h5>
                                <p class="text-muted">Connectez-vous.</p>
                            </div>
                            <div class="p-2 mt-4">


                                <div class="mt-3 text-center">
                                    <a href="{{route('auth.loginSso')}}" class="btn btn-warning w-sm waves-effect waves-light">
                                        {{ __('Connexion') }}
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>© 2021 Copyright. Gestion Habilitation SETER <i class="mdi mdi-heart text-danger"></i> by DSI</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </div>



@endsection


