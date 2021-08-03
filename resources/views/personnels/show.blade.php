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
                                                    <div class="col-sm-6">
                                                        <div class="dropdown mt-4 mt-sm-0">
                                                            <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Actions <i class="mdi mdi-chevron-down"></i>
                                                            </a>

                                                            <div class="dropdown-menu">
                                                                <a href="{{route('email.renew', [$habilitation->id])}}" class="px-2 text-warning" data-toggle="tooltip" data-placement="top" title="Renouveler"><i class="fas fa-recycle font-size-18"></i></a>
                                                                <a href="{{route('email.suspend', [$habilitation->id])}}" class="px-2 text-warning" data-toggle="tooltip" data-placement="top" title="Suspendre"><i class="fas fa-ban font-size-18"></i></a>
                                                                <a href="{{route('email.withdraw', [$habilitation->id])}}" class="px-2 text-warning" data-toggle="tooltip" data-placement="top" title="Retirer"><i class="far fa-trash-alt font-size-18"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>


                                            </tr>
                                        @endforeach


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div>
                        <h5 class="font-size-16 mb-4">Journal des actions</h5>

                        <ul class="activity-feed mb-0 pl-2">
                            @foreach($actions as $action)
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <p class="text-muted mb-1">{{\Carbon\Carbon::make($action->created_at)->format('d M Y H:i')}}</p>
                                        <h5 class="font-size-16">{{$action->libelle}}</h5>
                                        <p>Par: {{$action->acteur}}</p>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
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
