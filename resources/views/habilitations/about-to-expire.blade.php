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
                                <td>{{$value->dateFinValidite}}</td>
                                <td>{{$value->dateObtention}}</td>

                                <td style="width: 10%">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{route('habilitation.renouveler', [$value->id])}}" class="px-2 text-warning" data-toggle="tooltip" data-placement="top" title="Renouveler"><i class="fas fa-recycle font-size-18"></i></a>
                                        </li>

                                        <li class="list-inline-item">
                                            <form action="{{route('habilitation.suspendre')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="habPersonnel" value="{{$value->id}}">
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
