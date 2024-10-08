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
    <title>List Clients</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>Liste de tous les Clients </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Clicker sur le boutton ci-dessus pour ajouter un nouveau client</p>
    </div>
    
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
    <a href="formulaireClient.php" class="btn btn-primary">Ajouter Nouveau Client</a>
    
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Code Postal</th>
          <th scope="col">Adresse</th>
          <th scope="col">Numéro de telephone</th>
          <th scope="col">E-mail</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM CLIENT";
        $result = $pdo->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["NOM"] ?></td>
            <td><?php echo $row["PRENOM"] ?></td>
            <td><?php echo $row["CODE_POSTAL"] ?></td>
            <td><?php echo $row["LOCALITE"] ?></td>
            <td><?php echo $row["TELEPHONE"] ?></td>
            <td><?php echo $row["EMAIL"] ?></td>
            <td>
                 <?php echo "<a href='editClient.php?id=".$row["ID"]." type='button' class='btn btn-secondary'>Éditer</a>
                  <a href='deleteClient.php?id=".$row["ID"]." type='button' class='btn btn-danger'>Supprimer</a>"; ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>