@extends('layouts.master-layouts')
@section('title')
    Home
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <a href="{{route('personnels.create')}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus mr-2"></i> Ajouter</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-inline float-md-right mb-3">
                                <div class="search-box ml-2">
                                    <div class="position-relative">
                                        <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                        <i class="mdi mdi-magnify search-icon"></i>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end row -->
                    <div class="table-responsive mb-4">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                            <tr>

                                <th scope="col">Prenom et Nom</th>
                                <th scope="col">Societe</th>
                                <th scope="col">Direction</th>
                                <th scope="col">Fonction</th>
                                <th scope="col">Telephone</th>
                                <th scope="col" style="width: 200px;">Action</th>
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
                                            <a href="#" class="px-2 text-primary" data-toggle="tooltip" data-placement="top" title="Consulter"><i class="far fa-eye font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="px-2 text-primary" data-toggle="tooltip" data-placement="top" title="Ajout Habilitation"><i class="fas fa-fist-raised font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="px-2 text-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="uil uil-pen font-size-18"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="px-2 text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>



                                    </ul>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div>
                                <p class="mb-sm-0">Showing 1 to 10 of 12 entries</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <ul class="pagination mb-sm-0">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection

