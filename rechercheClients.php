<?php 
    require "connection.php";
?> 
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
        <h3>Liste des clients qui ont alouée cette voiture </h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Clicker sur le boutton ci-dessus pour chercher une autre voiture</p>
    </div>
    <div>
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
    <a href="formulaireClient.php" class="btn btn-primary">chercher un autre Client</a></div>
  <br>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Marque</th>
          <th scope="col">Modele</th>
          <th scope="col">Nom du client</th>
          <th scope="col">Prenom du client</th>
          <th scope="col">Telephone</th>
        </tr>
      </thead>
      <tbody>
<?php
// Vérifier si les données du formulaire sont soumises
if(isset($_GET["marque"]) && isset($_GET["modele"])) {
  // Récupérer les données du formulaire
  $marque = $_GET["marque"];
  $modele = $_GET["modele"];
  $results=[];
  
  // First Query
  $sql1 = "SELECT matricule FROM voiture WHERE marque = ? AND modele = ?";
  $stmt1 = $pdo->prepare($sql1);
  $stmt1->execute([$marque, $modele]);
  
  while($rowmat = $stmt1->fetch(PDO::FETCH_ASSOC)) {
      $immatriculation = $rowmat['matricule'];
      
      // Second Query
      $sql2 = "SELECT idClient, dateDebut, dateFin, dateRentree FROM locations WHERE immatriculation = ?";
      $stmt2 = $pdo->prepare($sql2);
      $stmt2->execute([$immatriculation]);
      
      while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
          $idClient = $row['idClient'];
          
          // Third Query
          $sql3 = "SELECT nom, prenom, telephone FROM client WHERE id = ?";
          $stmt3 = $pdo->prepare($sql3);
          $stmt3->execute([$idClient]);
          
          while($clientInfo = $stmt3->fetch(PDO::FETCH_ASSOC)) {
              // Process and store client information
              $results[] = $clientInfo;
          }
      }
  }
}

    


foreach($results as $row) {
    echo "<tr>";
    echo "<td>" . $marque . "</td>";
    echo "<td>" . $modele. "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "</tr>";
} 

echo "</table>";


?>
</tbody>
    </table>