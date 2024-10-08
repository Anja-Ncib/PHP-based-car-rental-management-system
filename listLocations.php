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
    <title>List Locations</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>Liste de toutes les Locations </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Cliquer sur le bouton ci-dessus pour ajouter une nouvelle location</p>
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
    <a href="formulaireLocation.php" class="btn btn-primary">Ajouter Nouvelle Location</a>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID Client</th>
          <th scope="col">ID Location</th>
          <th scope="col">Immatriculation</th>
          <th scope="col">Date de début</th>
          <th scope="col">Date de fin prévue</th>
          <th scope="col">Date de rentrée</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM locations";
        $result = $pdo->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <tr>
            <td><?php echo $row["IdClient"] ?></td>
            <td><?php echo $row["IdLocation"] ?></td>
            <td><?php echo $row["immatriculation"] ?></td>
            <td><?php echo $row["DateDebut"] ?></td>
            <td><?php echo $row["DateFin"] ?></td>
            <td><?php echo $row["DateRentree"] ?></td>
            <td>
                 <?php echo "<a href='editLocation.php?id=".$row["IdLocation"]." type='button' class='btn btn-secondary'>Éditer</a>
                  <a href='deleteLocation.php?id=".$row["IdLocation"]." type='button' class='btn btn-danger'>Supprimer</a>"; ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
