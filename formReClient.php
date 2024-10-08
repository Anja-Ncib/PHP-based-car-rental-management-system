<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>recherche Client</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>Chercher les Clients  </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Completer le formulaire ci-dessus pour chercher les clie,ts ont ont loués ce model </p>
    </div>
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
    <div class="container d-flex justify-content-center ">
    <div class="container d-flex justify-content-center ">
        <form class="form" action="rechercheClients.php" method="get" style="width:100%">
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="marque">Marque</label>
                    <input type="text" class="form-control" name="marque" id="marque" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="modele">Modèle</label>
                    <input type="text" class="form-control" name="modele" id="modele" required>
                </div>
            </div>
            <div class="mb-3 col-sm-12 col-md-6">
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Rechercher</button>
                <button type="reset" class="btn btn-secondary" name="reset">Annuler</button>
            </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
