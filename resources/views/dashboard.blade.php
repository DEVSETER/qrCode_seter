@extends('layouts.master-layouts')
@section('title')
    Home
@endsection

<!-- DataTables -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@section('content')


    <div class="row">


        <div class="col-md-6 col-xl-4">
            <div class="card" style="border-radius: 20px">
                <div class="card-body" >
                    <div class="float-right mt-2">
                        <i class="fas fa-user-tie fa-5x" style="color: #f2b774"></i>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1" style="color: #f2b774"><span data-plugin="counterup">{{$agents}}</span> agent(s)</h4>
                        <p class="text-muted mb-0">Nombre d'agents</p>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-4">
            <div class="card" style="border-radius: 20px">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="fas fa-gavel fa-5x" style="color: #f2b774"></i>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1" style="color: #f2b774"><span data-plugin="counterup">{{$habilitations}}</span> habilitation(s)</h4>
                        <p class="text-muted mb-0">Nombre d'habilitations</p>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-4">
            <div class="card" style="border-radius: 20px">
                <div class="card-body">
                    <div class="float-right mt-2">
                        <i class="fas fa-user-clock fa-5x" style="color: #f2b774"></i>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1" style="color: #f2b774"><span data-plugin="counterup">{{$expired}}</span> habilitation(s)</h4>
                        <p class="text-muted mb-0">Nombre d'habilitations expirées</p>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->
    </div>



@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>
@endsection
