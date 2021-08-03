
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="text-center mb-5">
            <h4>Habilitation à retirer</h4>
            <p class="text-muted mb-4">Veuillez retirer à l'agent cette habilitation</p>

        </div>
    </div>
</div>
<!-- end row -->

<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="row">
            <div class="col-xl-6">
                <div class="card pricing-box text-center">
                    <div class="card-body p-4">
                        <div>

                            <div class="mt-3">
                                <h5 class="mb-1">Agent</h5>
                            </div>

                            <div class="py-3">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                        </div>


                        <ul class="list-unstyled plan-features mt-3">
                            <li>Matricule: <span class="text-primary font-weight-semibold">{{$agent->matricule}}</span></li>
                            <li>Prénom: <span class="text-primary font-weight-semibold">{{$agent->prenom}}</span></li>
                            <li>Nom: <span class="text-primary font-weight-semibold">{{$agent->nom}}</span></li>
                            <li>Direction: <span class="text-primary font-weight-semibold">{{$agent->direction}}</span></li>
                            <li>Fonction: <span class="text-primary font-weight-semibold">{{$agent->fonction}}</span></li>
                            <li>Email: <span class="text-primary font-weight-semibold">{{$agent->email}}</span></li>
                        </ul>


                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card pricing-box text-center">
                    <div class="card-body p-4">
                        <div>

                            <div class="mt-3">
                                <h5 class="mb-1">Habilitation</h5>

                            </div>

                            <div class="py-3">
                                <i class="fas fa-gavel fa-3x"></i>
                            </div>
                        </div>


                        <ul class="list-unstyled plan-features mt-3">
                            <li>Code: <span class="text-primary font-weight-semibold">{{$habilitation->code}}</span></li>
                            <li>Libellé: <span class="text-primary font-weight-semibold">{{$habilitation->libelle}}</span></li>
                            <li>Date d'obtention: <span class="text-primary font-weight-semibold">{{$agentHab->date_obtention}}</span></li>
                            <li>Date fin de validité: <span class="text-primary font-weight-semibold">{{$agentHab->date_fin_validite}}</span></li>
                            <li>Expire dans: <span class="text-primary font-weight-semibold">{{\Carbon\Carbon::make($agentHab->date_fin_validite)
                                                    ->diff(\Carbon\Carbon::now())->format('%y ans, %m mois et %d jours')}}</span></li>
                        </ul>


                    </div>
                </div>
            </div>


        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



