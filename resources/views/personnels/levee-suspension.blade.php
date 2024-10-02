@extends('layouts.master-layouts')
@section('title')
    Levée de suspension
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

                    <h4 class="card-title">Levée de suspension</h4>
                    <form action="{{route('personnel.retraitSuspension', [$habilitationPersonnel->id])}}"
                          method="POST" class="custom-validation">

                        @csrf


                        <div class="form-row">

                            <div class="form-group col-md-10">
                                <label for="dateAction" class="col-sm-3 col-form-label">Date de l'action</label>
                                <div class="col-md-8">
                                    <input name="dateAction" type="date" class="form-control" id="dateAction"
                                           value="{{old('dateAction')}}" >
                                    @error('dateAction')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="motif" class="col-sm-3 col-form-label">Motif</label>
                                <div class="col-md-10">
                                    <input name="motif" type="text" class="form-control" id="motif"
                                           value="{{old('motif')}}" >
                                    @error('motif')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                        </div>



                        <div class="mt-4 text-right">
                            <button type="submit" class="btn btn-primary w-md">Enregistrer</button>
                        </div>
                    </form>
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


