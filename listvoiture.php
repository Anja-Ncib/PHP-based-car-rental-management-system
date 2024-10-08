<?php 
    require "connection.php";
?> 
<style>
    .btn{
        margin-left: 10px;
        margin-bottom: 20px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>List Voitures</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>Liste de tous les Voitures </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Clicker sur le boutton ci-dessus pour ajouter une nouvelle Voiture</p>
    </div>
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="formulaireVoiture.php" class="btn btn-primary">Ajouter une Nouvelle Voiture</a>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Immatriculation</th>
          <th scope="col">Model</th>
          <th scope="col">Marque</th>
          <th scope="col">Cylindre</th>
          <th scope="col">Date d'achat</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM VOITURE";
        $result = $pdo->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <tr>
            <td><?php echo $row["MATRICULE"] ?></td>
            <td><?php echo $row["MARQUE"] ?></td>
            <td><?php echo $row["MODELE"] ?></td>
            <td><?php echo $row["CYLINDRE"] ?></td>
            <td><?php echo $row["DATE_ACHAT"] ?></td>
            <td>
                 <?php echo "<a href='editVoiture.php?MATRICULE=".$row["MATRICULE"]." type='button' class='btn btn-secondary'>Éditer</a>
                  <a href='deleteVoiture.php?MATRICULE=".$row["MATRICULE"]." type='button' class='btn btn-danger'>Supprimer</a>"; ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>