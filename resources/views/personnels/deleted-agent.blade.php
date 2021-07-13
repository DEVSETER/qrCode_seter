@extends('layouts.master-layouts')
@section('title')
    Agents Supprimés
@endsection

<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ URL::asset('assets/css/icons.min.css')}}" id="icons-style" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Liste des agents</h4>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <a href="{{route('personnels.create')}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus mr-2"></i> Ajouter</a>
                        </div>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th style="width: 5%">Matricule</th>
                            <th style="width: 30%">Prenom et Nom</th>
                            <th style="width: 30%">Direction</th>
                            <th style="width: 25%">Fonction</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($agents as $personnel)
                            <tr>
                                <td style="width: 5%">{{$personnel->matricule}}</td>
                                <td style="width: 30%">{{$personnel->prenom}} {{$personnel->nom}}</td>
                                <td style="width: 30%">{{$personnel->direction}}</td>
                                <td style="width: 25%">{{$personnel->fonction}}</td>
                                <td style="width: 10%">
                                    <div class="col-sm-6">
                                        <div class="dropdown mt-4 mt-sm-0">
                                            <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions <i class="mdi mdi-chevron-down"></i>
                                            </a>

                                            <div class="dropdown-menu">
                                                <a href="{{route('personnel.restaurer', [$personnel->id])}}" class="px-2 text-secondary" data-toggle="tooltip" data-placement="top" title="Editer"><i class="fas fa-pencil-alt font-size-18"></i></a>

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




@endsection

