
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
            <p>Bonjour {{$agent->prenom}} {{$agent->nom}},</p>
            <p>Nous vous informons de la levée de votre retrait au poste de la Conduite à partir du <b>{{$action->document}}</b>.</p>
            <p>Cette mesure conservatoire s’appliquait le temps de : {{$action->motif}}</p>
            <p>Votre carte d’accès a été mise à jour.</p>
            <p>Vous pouvez scanner le QR code au dos de la carte qui vous permet de prendre connaissance des informations liées à votre habilitation.</p>
            <p>Nous restons disponibles pour toutes informations complémentaires.</p>
            <p>Cordialement</p>
            @if($habilitation->role_conduite)
                <p>Unité Conduite</p>
            @endif
        </div>
    </div>
</div>
<!-- end row -->

<!-- end row -->

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>



