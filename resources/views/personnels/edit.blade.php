@extends('layouts.master-layouts')
@section('title')
    Edit Personnel
@endsection
<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ URL::asset('assets/css/icons.min.css')}}" id="icons-style" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('assets/libs/bootstrap-editable/bootstrap-editable.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Edit Personnel</h4>
                    <form action="{{route('personnel.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="personnel_id" value="{{$personnel->id}}">


                        <div class="form-group row">
                            <label for="prenom" class="col-md-2 col-form-label">Prenom</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="prenom"
                                       name="prenom" value="{{$personnel->prenom}}">
                                @error('prenom')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-2 col-form-label">Nom</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="nom"
                                       name="nom" value="{{$personnel->nom}}">
                                @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="photo">Photo de profil</label>
                            <input name="photo" type="file" class="form-control-file"
                                   id="photo" >
                            @error('photo')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-2 col-form-label">Telephone</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="telephone"
                                       name="telephone" value="{{$personnel->telephone}}">
                                @error('telephone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email"  id="email"
                                       name="email" value="{{$personnel->email}}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ville" class="col-md-2 col-form-label">Ville</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="ville"
                                       name="ville" value="{{$personnel->ville}}">
                                @error('ville')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="societe" class="col-md-2 col-form-label">Societe</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="societe"
                                       name="societe" value="{{$personnel->societe}}">
                                @error('societe')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direction" class="col-md-2 col-form-label">Direction</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="direction"
                                       name="direction" value="{{$personnel->direction}}">
                                @error('direction')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fonction" class="col-md-2 col-form-label">Fonction</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="fonction"
                                       name="fonction" value="{{$personnel->fonction}}">
                                @error('fonction')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Editer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->


@endsection
