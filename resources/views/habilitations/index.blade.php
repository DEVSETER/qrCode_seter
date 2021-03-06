@extends('layouts.master-layouts')
@section('title')
    Habilitations
@endsection

<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h1 class="card-title">Liste des habilitations</h1>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <a href="{{route('habilitations.create')}}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-plus mr-2"></i> Ajouter</a>
                        </div>
                    </div>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Libellé</th>
                            <th scope="col" style="width: 150px;">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($habilitations as $habilitation)
                            <tr>
                                <td>{{$habilitation->code}}</td>
                                <td>{{$habilitation->libelle}}</td>
                                <td style="width: 10%">
                                    <div class="col-sm-6">
                                        <div class="dropdown mt-4 mt-sm-0">
                                            <a  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Actions <i class="mdi mdi-chevron-down"></i>
                                            </a>

                                            <div class="dropdown-menu">
                                                <a href="{{route('habilitations.edit', [$habilitation->id])}}" class="px-2 text-secondary" data-toggle="tooltip" data-placement="top" title="Editer"><i class="fas fa-pencil-alt font-size-18"></i></a>
                                                <a onclick="deleteConfirmation({{$habilitation}})"  class="px-2 text-secondary" data-toggle="tooltip" data-placement="top" title="Supprimer"><i class="far fa-trash-alt font-size-18 btn btn-danger"></i></a>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>



    <script>
        function deleteConfirmation(habilitation) {
            swal({
                title: "Supprimer?",
                text: "Voulez vous vraiment supprimer l'habilitation " + habilitation.libelle + ' ?',
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Oui, supprimer",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function (e) {

                if (e.value === true) {

                    $.ajax({
                        type: 'GET',
                        url: "habilitation/delete/" + habilitation.id,
                        dataType: 'JSON',

                        success: function (results) {
                            console.log(results);

                            if (results.success === true) {
                                swal("Done!", results.message, "success");

                            } else {
                                swal("Error!", results.message, "error");
                            }
                        },

                    });
                    location.reload();

                } else {
                    e.dismiss;
                }

            }, function (dismiss) {
                return false;
            })
        }
    </script>
@endsection
