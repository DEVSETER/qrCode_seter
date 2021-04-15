@extends('layouts.master-layouts')
@section('title')
    Home
@endsection

<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Liste Personnel</h4>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <a href="{{route('personnels.create')}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus mr-2"></i> Ajouter</a>
                        </div>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Prenom et Nom</th>
                            <th>Societé</th>
                            <th>Direction</th>
                            <th>Fonction</th>
                            <th>Telephone</th>
                            <th scope="col" style="width: 150px;">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($personnels as $personnel)
                            <tr>
                                <td>{{$personnel->prenom}} {{$personnel->nom}}</td>
                                <td>{{$personnel->societe}}</td>
                                <td>{{$personnel->direction}}</td>
                                <td>{{$personnel->fonction}}</td>
                                <td>{{$personnel->telephone}}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="{{route('personnels.show', [$personnel->id])}}" class="px-2 text-primary" data-toggle="tooltip" data-placement="top" title="Consulter"><i class="far fa-eye font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{route('personnels.formulaireAjoutHabilitation', [$personnel->id])}}" class="px-2 text-warning" data-toggle="tooltip" data-placement="top" title="Ajout Habilitation"><i class="fas fa-fist-raised font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{route('personnels.edit', [$personnel])}}" class="px-2 text-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{route('personnel.destroy', [$personnel->id])}}" class="px-2 text-danger" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="uil uil-trash-alt font-size-18"></i></a>
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
@endsection
