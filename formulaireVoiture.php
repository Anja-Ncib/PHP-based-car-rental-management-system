
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire Voiture</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <?php
    if (isset($_GET["error"])) {
      $error = $_GET["error"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $error . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>Ajouter une nouvelle voiture </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Completer le formulaire ci-dessus pour ajouter une nouvelle voiture</p>
    </div>
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
    <div class="container d-flex justify-content-center ">
    
        <div class="container d-flex justify-content-center ">
            <form class="form" action="ajouteVoiture.php" method="post" style="width:100%">
                <div class="row">
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="form-label" for="immatriculation">Immatriculation</label>
                        <input type="text"  class="form-control" name="immatriculation" id="immatriculation" required onblur="verif_mat(this.value)">
                        <div id="error_immat" class="text text-danger">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="model">Model</label>
                    <input type="text" class="form-control" name="model" id="model" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="marque">Marque</label>
                    <input type="text" class="form-control" name="marque" id="marque" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="cylindre">Cylindre</label>
                    <input type="number" class="form-control" name="cylindre" id="cylindre" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="dateachat">Date d'achat</label>
                    <input type="date" class="form-control" name="dateachat" id="dateachat" required>
                </div>
            </div>
            <div class="mb-3 col-sm-12 col-md-6">
                <button type="submit" class="btn btn-primary" name="submit" id="submit" >Ajouter</button>
                <button type="reset" class="btn btn-secondary" name="reset">Annuler</button>
            </div>
        </form>
    </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
