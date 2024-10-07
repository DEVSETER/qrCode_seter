@extends('layouts.master-layouts')
@section('title')
    Habilitations retirées
@endsection

<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h1 class="card-title">Liste des habilitations retirées</h1>


                    <table id="test" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th scope="col">Matricule</th>
                            <th scope="col">Prenom et Nom</th>
                            <th scope="col">Direction</th>
                            <th scope="col">Code Habilitation</th>
                            <th scope="col">Libellé habilitation</th>
                            <th scope="col">Motif</th>
                            <th scope="col">Date Action</th>
                            <th scope="col">Acteur</th>
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
                                <td>{{$value->codeHabilitation}}</td>
                                <td>{{$value->libelleHabilitation}}</td>
                                <td>{{$value->motif}}</td>
                                <td>{{$value->dateAction}}</td>
                                <td>{{$value->acteur}}</td>
                                <td>{{$value->dateFinValidite}}</td>
                                <td>{{$value->dateObtention}}</td>

                                <td style="width: 10%">
                                    <div class="col-sm-6">
                                        <div class="dropdown mt-4 mt-sm-0">
                                            <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions <i class="mdi mdi-chevron-down"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="{{route('personnel.retraitPosteForm', [$value->id])}}" class="dropdown-item" >Levée de retrait au poste</a>

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
