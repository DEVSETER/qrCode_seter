@extends('layouts.master-layouts')
@section('title')
    Détail personnel
@endsection

<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ URL::asset('assets/css/icons.min.css')}}" id="icons-style" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('assets/libs/bootstrap-editable/bootstrap-editable.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')

    <!-- <div class="col-xl-4 col-sm-6"> -->
    <div class="card">
        <div class="card-body">
            <div class="media">
                <div class="avatar-sm mr-4">
                            <span class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                {{ $personnel->nom[0] }}
                            </span>
                </div>
                <div class="media-body align-self-center">
                    <div class="border-bottom pb-1">
                        <h5 class="text-truncate font-size-16 mb-1"><a href="#" class="text-dark">
                               {{$personnel->prenom}} {{$personnel->nom}} </a></h5>

                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Telephone</p>
                                <h5 class="font-size-16 mb-0">{{ $personnel->telephone }}</h5>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Email</p>
                                <h5 class="font-size-16 mb-0">{{ $personnel->email }}</h5>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Matricule</p>
                                <h5 class="font-size-16 mb-0">{{ $personnel->matricule }}</h5>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Ville</p>
                                <h5 class="font-size-16 mb-0">{{ $personnel->ville }}</h5>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Societe</p>
                                <h5 class="font-size-16 mb-0">{{ $personnel->societe }}</h5>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Direction</p>
                                <h5 class="font-size-16 mb-0">{{ $personnel->direction }}</h5>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mt-3">
                                <p class="text-muted mb-2">Fonction</p>
                                <h5 class="font-size-16 mb-0">{{ $personnel->fonction }}</h5>
                            </div>
                        </div>



                    </div>



                </div>
            </div>

        </div>
    </div>

    <!-- start row -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Habilitations</h4>
            <p class="card-title-desc">Liste des habilitations de ce personnel</p>

            <div class="table-responsive">
                <table class="table mb-0">

                    <thead>
                    <tr>
                        <th>Code</th>
                        <th>Libellé</th>
                        <th>Date Obtention</th>
                        <th>Date Fin Validité</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($personnel->habilitations as $habilitation)
                        <tr>
                            <td>{{$habilitation->code}} </td>
                            <td>{{$habilitation->libelle}}</td>
                            <td>{{$habilitation->pivot->date_obtention}}</td>
                            <td>{{$habilitation->pivot->date_fin_validite}}</td>



                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>





    <!-- end row -->


@endsection





