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


<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@section('content')


    <div class="row mb-4">
        <div class="col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="text-center">

                        <div class="clearfix"></div>
                        <div>
                            <img src="{{\Illuminate\Support\Facades\URL::asset($personnel->photo)}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                        </div>
                        <h5 class="mt-3 mb-1">{{$personnel->prenom}} {{$personnel->nom}}</h5>
                        <p class="text-muted">{{$personnel->fonction}}</p>


                    </div>

                    <hr class="my-4">

                    <div class="text-muted">

                        <div class="table-responsive mt-4">
                            <div class="mt-4">
                                <p class="mb-1">Matricule :</p>
                                <h5 class="font-size-16">{{$personnel->matricule}}</h5>
                            </div>
                            <div class="mt-4">
                                <p class="mb-1">Prenom :</p>
                                <h5 class="font-size-16">{{$personnel->prenom}}</h5>
                            </div>
                            <div class="mt-4">
                                <p class="mb-1">Nom :</p>
                                <h5 class="font-size-16">{{$personnel->nom}}</h5>
                            </div>

                            <div class="mt-4">
                                <p class="mb-1">Email :</p>
                                <h5 class="font-size-16">{{$personnel->email}}</h5>
                            </div>

                            <div class="mt-4">
                                <p class="mb-1">Direction :</p>
                                <h5 class="font-size-16">{{$personnel->direction}}</h5>
                            </div>
                            <div class="mt-4">
                                <p class="mb-1">Fonction :</p>
                                <h5 class="font-size-16">{{$personnel->fonction}}</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card mb-0">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#habilitation" role="tab">
                            <i class="uil uil-user-circle font-size-20"></i>
                            <span class="d-none d-sm-block">Habilitations</span>
                        </a>
                    </li>

                </ul>
                <!-- Tab content -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="habilitation" role="tabpanel">
                        <div>

                            <div>


                                <div class="table-responsive">
                                    <div class="mb-3">
                                        <a href="{{route('personnels.formulaireAjoutHabilitation', [$personnel->id])}}"
                                           class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus mr-2"></i> Ajouter Habilitation</a>
                                    </div>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Libellé</th>
                                            <th>Date Fin Validité</th>
                                            <th>Date Obtention</th>
                                            <th>Statut</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($habilitations as $habilitation)
                                            <tr>
                                                <td>{{$habilitation->code}}</td>
                                                <td>{{$habilitation->libelle}}</td>
                                                <td>{{$habilitation->dateFinValidite}}</td>
                                                <td>{{$habilitation->dateObtention}}</td>
                                                @if($habilitation->status == 'actif')
                                                    <td><i class="fas fa-check-circle" style="color: green"></i></td>
                                                @else
                                                    <td><i class="fas fa-times-circle" style="color: red"></i></td>
                                                @endif
                                                <td style="width: 10%">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="{{route('habilitation.renouveler', [$habilitation->id])}}" class="px-2 text-warning" data-toggle="tooltip" data-placement="top" title="Renouveler"><i class="fas fa-recycle font-size-18"></i></a>
                                                        </li>

                                                        <li class="list-inline-item">
                                                            <form action="{{route('habilitation.suspendre')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="habPersonnel" value="{{$habilitation->id}}">
                                                                <button type="submit" class="btn btn-link px-2 text-danger" data-toggle="tooltip" title="Suspendre"><i class="fas fa-ban font-size-18"></i></button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </td>


                                            </tr>
                                        @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>

    <script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>
@endsection
