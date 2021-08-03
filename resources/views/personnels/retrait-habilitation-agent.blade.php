@extends('layouts.master-layouts')
@section('title')
    Retrait Habilitation
@endsection


<!-- plugin css -->
<link href="{{ URL::asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />

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

                    <h4 class="card-title">Retrait habilitation personnel</h4>
                    <div class="container">
                        <form action="{{route('habilitation.retirerPost')}}"
                              method="POST" class="custom-validation">

                            @csrf
                            <input type="hidden" name="habilitationPersonnel" value="{{$habilitationPersonnel->id}}">



                            <div class="form-group ">
                                <label for="motif" class="col-md-2 col-form-label">Motif</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text"  id="motif"
                                           name="motif" value="{{old('motif')}}">
                                    @error('motif')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="document">Document</label>
                                <input name="document" type="file" class="form-control-file"
                                       id="document" value="{{old('document')}}">
                                @error('document')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mt-4 text-right">
                                <button type="submit" class="btn btn-primary w-md">Retirer</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->


@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js')}}"></script>

@endsection


