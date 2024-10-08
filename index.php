<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire Client</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>WELCOME !! </h3>
    </div>
    <div class="container d-block justify-content-center text-center mb-4">
        <p class="text-muted">choose an action :</p>
    </div>
    <div class="container d-flex justify-content-centre">
    <a href='formulaireClient.php' type='button' class='btn btn-success'>Ajouter un nouveau client </a>
    </div><br>
    <div class="container d-flex justify-content-centre">
    <a href='listClients.php' type='button' class='btn btn-secondary'>consulter la liste de tous les clients </a>
    </div><br><div class="container d-flex justify-content-centre">
    <a href='formulaireVoiture.php' type='button' class='btn btn-success'>Ajouter une nouvelle voiture</a>
    </div><br><div class="container d-flex justify-content-centre">
    <a href='listvoiture.php' type='button' class='btn btn-secondary'>consulter la liste de tous les voitures </a>
    </div><br><div class="container d-flex justify-content-centre">
    <a href='formulaireLocation.php' type='button' class='btn btn-success'>Ajouter une nouvelle location</a>
    </div><br><div class="container d-flex justify-content-centre">
    <a href='listLocations.php' type='button' class='btn btn-secondary'>consulter la liste de tous les locations </a>
    </div><br><div class="container d-flex justify-content-centre">
    <a href='formReClient.php' type='button' class='btn btn-success'>consulter la list des client qui ont louées une voiture </a>
    </div><br><div class="container d-flex justify-content-centre">
    <a href='formReVoiture.php' type='button' class='btn btn-secondary'>consulter la list des voiture louées par un client </a>
    </div>
</body>