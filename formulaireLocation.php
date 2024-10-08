<!DOCTYPE html>

<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Formulaire de Location</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>Ajouter une nouvelle location </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Completer le formulaire ci-dessus pour ajouter une nouvelle location</p>
    </div>
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
<div class="container d-flex justify-content-center ">
    
    <div class="container d-flex justify-content-start-flex ">
        <form class="form" action="ajouteLocation.php" method="post" style="width:100%">
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="idClient">ID Client</label>
                    <input type="number" class="form-control" name="idClient" id="idClient" required >
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="immatriculation">Immatriculation</label>
                    <input type="text" class="form-control" name="immatriculation" id="immatriculation" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="dateDebut">Date de Début</label>
                    <input type="datetime-local" class="form-control" name="dateDebut" id="dateDebut" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="dateFin">Date de Fin Prévue</label>
                    <input type="datetime-local" class="form-control" name="dateFin" id="dateFin" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="dateRentree">Date de Rentrée Effective</label>
                    <input type="datetime-local" class="form-control" name="dateRentree" id="dateRentree">
                </div>
            </div>
            <div class="mb-3 col-sm-12 col-md-6">
                <button type="submit" class="btn btn-primary" name="submit" id="submit" >Ajouter</button>
                <button type="reset" class="btn btn-secondary" name="reset">Annuler</button>
            </div>
        </form>

    </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
