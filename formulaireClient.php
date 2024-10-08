
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
        <h3>Ajouter un nouveau client </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Completer le formulaire ci-dessus pour ajouter un nouveau client</p>
    </div>
    <div class="container d-flex justify-content-centre">
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
    </div>
    <div class="container d-flex justify-content-center ">
    
        <div class="container d-flex justify-content-center ">
            <form class="form" action="ajouteClient.php" method="post" style="width:100%">
                <div class="row">
                    <div class="mb-3 col-sm-12 col-md-6">
                        <label class="form-label" for="IDClient">ID Client</label>
                        <input type="text"  class="form-control" name="IDClient" id="IDClient" required >
                        <div id="error_IDClient" class="text text-danger">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="prenom">Prenom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="codePostal">Code Postal</label>
                    <input type="text" class="form-control" name="codePostal" id="codePostal" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="adresse">Adresse</label>
                    <input type="text" class="form-control" name="adresse" id="adresse" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="tel">Telephone</label>
                    <input type="tel" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}" class="form-control" name="tel" id="tel" required>
                    <small>Format: 50-000-000</small><br><br>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-6">
                    <label class="form-label" for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
            </div>
            <div class="mb-3 col-sm-12 col-md-6">
                <button type="submit" class="btn btn-primary" name="submit" id="submit" >Ajouter</button>
                <button type="reset" class="btn btn-secondary" name="reset">Annuler</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>