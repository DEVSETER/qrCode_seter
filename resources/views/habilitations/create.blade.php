@extends('layouts.master-layouts')
@section('title')
    Creation Habilitation
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

                    <h2 class="card-title">Creation Habilitation</h2>
                    <form action="{{route('habilitations.store')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="code" class="col-md-2 col-form-label">Code</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="code"
                                       name="code" value="{{old('code')}}">
                                @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="libelle" class="col-md-2 col-form-label">Libellé</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  id="libelle"
                                       name="libelle" value="{{old('libelle')}}">
                                @error('libelle')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Enregistrer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->


@endsection
