@extends('layouts.master-layouts')
@section('title')
    Habilitations sur le point d'expirer
@endsection

<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h1 class="card-title">Liste des habilitations qui vont expirer dans 6 mois ou moins</h1>


                    <table id="test" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th scope="col">Matricule</th>
                            <th scope="col">Prenom et Nom</th>
                            <th scope="col">Direction</th>
                            <th scope="col">Fonction</th>
                            <th scope="col">Code</th>
                            <th scope="col">Libellé</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Date Fin Validité</th>
                            <th scope="col">Date Obtention</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($values as $value)
                            <tr>
                                <td>{{$value->matricule}}</td>
                                <td>{{$value->prenom}} {{$value->nom}}</td>
                                <td>{{$value->direction}} </td>
                                <td>{{$value->fonction}} </td>
                                <td>{{$value->codeHabilitation}}</td>
                                <td>{{$value->libelleHabilitation}}</td>
                                <td>{{$value->status}}</td>
                                <td>{{$value->dateFinValidite}}</td>
                                <td>{{$value->dateObtention}}</td>

                                <td style="width: 10%">
                                    <div class="col-sm-6">
                                        <div class="dropdown mt-4 mt-sm-0">
                                            <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions <i class="mdi mdi-chevron-down"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                @if($value->status == 'HABILITATION-INITIALE' || $value->status == 'RENOUVELLEMENT' || $value->status == 'ACTIF')
                                                    <a href="{{route('habilitation.renouveler', [$value->id])}}" class="dropdown-item" >Renouveler</a>
                                                    <a href="{{route('personnel.actionForm', [$value->id])}}" class="dropdown-item" >Retrait au poste/Suspension</a>

                                                @elseif($value->status == 'SUSPENDU')
                                                    <a href="{{route('personnel.retraitSuspensionForm', [$value->id])}}" class="dropdown-item" >Levée de suspension</a>

                                                @elseif($value->status == 'RETRAIT AU POSTE')
                                                    <a href="{{route('personnel.retraitPosteForm', [$value->id])}}" class="dropdown-item" >Levée de retrait au poste</a>
                                                @endif

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
        </div> <!-- end col -->
    </div> <!-- end row -->



@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>


    <script>
        $(document).ready(function() {
            $('#test').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf'
                ]
            } );
        } );

    </script>
@endsection
