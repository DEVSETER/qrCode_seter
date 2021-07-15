@extends('layouts.master-layouts')
@section('title')
    Modifier Information Agent
@endsection

<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ URL::asset('assets/css/icons.min.css')}}" id="icons-style" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('personnel.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="personnel_id" value="{{$personnel->id}}">
                <div id="addproduct-accordion" class="custom-accordion">
                    <div class="card">
                        <a href="#addproduct-billinginfo-collapse" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                            <div class="p-4">

                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                01
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Information Agent</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                        </a>

                        <div id="addproduct-billinginfo-collapse" class="collapse show" data-parent="#addproduct-accordion">
                            <div class="p-4 border-top">

                                <div class="form-group row">
                                    <label for="prenom" class="col-md-2 col-form-label">Prenom</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  id="prenom"
                                               name="prenom" value="{{$personnel->prenom}}">
                                        @error('prenom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nom" class="col-md-2 col-form-label">Nom</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  id="nom"
                                               name="nom" value="{{$personnel->nom}}">
                                        @error('nom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="email"  id="email"
                                               name="email" value="{{$personnel->email}}">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <a href="#addproduct-metadata-collapse" class="text-dark collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="addproduct-metadata-collapse">
                            <div class="p-4">

                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                02
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Information Professionnelle</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                        </a>

                        <div id="addproduct-metadata-collapse" class="collapse" data-parent="#addproduct-accordion">
                            <div class="p-4 border-top">

                                

                                <div class="form-group row">
                                    <label for="societe" class="col-md-2 col-form-label">Societe</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  id="societe"
                                               name="societe" value="{{$personnel->societe}}">
                                        @error('societe')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="direction" class="col-md-2 col-form-label">Direction</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  id="direction"
                                               name="direction" value="{{$personnel->direction}}">
                                        @error('direction')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="sousDirection" class="col-md-2 col-form-label">Sous Direction</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  id="sousDirection"
                                               name="sousDirection" value="{{$personnel->sous_direction}}">
                                        @error('sousDirection')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="fonction" class="col-md-2 col-form-label">Fonction</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text"  id="fonction"
                                               name="fonction" value="{{$personnel->fonction}}">
                                        @error('fonction')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#addproduct-img-collapse2" class="text-dark" data-toggle="collapse" aria-expanded="true" aria-controls="addproduct-img-collapse2">
                            <div class="p-4">

                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                03
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Photo</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                </div>

                            </div>
                        </a>

                        <div id="addproduct-img-collapse2" class="collapse" data-parent="#addproduct-img-collapse2">
                            <div class="p-4 border-top">
                                <div class="form-group row">
                                    <label for="photo">Photo de profil</label>
                                    <input name="photo" type="file" class="form-control-file"
                                           id="photo" value="{{old('photo')}}">
                                    @error('photo')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-right">

                        <button type="submit" class="btn btn-success"> <i class="uil uil-file-alt mr-1"></i> Modifier </button>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </form>
        </div>
    </div>
    <!-- end row -->


@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-add-product.init.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/ckeditor/ckeditor.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>



@endsection
