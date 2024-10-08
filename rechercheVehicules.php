<?php 
    require "connection.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des véhicules loués par une personne</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <B>GESTION DE LOCATION DES VOITURES</B>
    </nav>
    <div class="container d-flex justify-content-center text-center mb-4">
        <h3>Véhicules loués par une personne</h3>
    </div>
    <div class="container d-flex justify-content-center text-center mb-4">
        <p class="text-muted">Clicker sur le boutton ci-dessus pour chercher un autre client</p>
    </div>
    <div>
    <a href='index.php' type='button' class='btn btn-success'>Retour page home </a>
    <a href="formReVoiture.php" class="btn btn-primary">chercher autre client</a></div>
    <br>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
            <th scope="col">Nom du client</th>
            <th scope="col">Prénom du client</th>
            <th scope="col">Matricule</th>
            <th scope="col">Marque</th>
            <th scope="col">Modèle</th>
            <th scope="col">date d'achat</th>
        </tr>
      </thead>
      <tbody>
<?php
// Vérifier si les données du formulaire sont soumises
if(isset($_GET["nomClient"]) && isset($_GET["prenomClient"])) {
    // Récupérer les données du formulaire
    $nom = $_GET["nomClient"];
    $prenom = $_GET["prenomClient"];
    $results=[];

    // First Query
    $sql1 = "SELECT ID FROM client WHERE nom = ? AND prenom = ?";
    $stmt1 = $pdo->prepare($sql1);
    $stmt1->execute([$nom, $prenom]);
    $id = $stmt1->fetch(PDO::FETCH_ASSOC)['ID']; // Fetching the ID correctly
    
    // Second Query
    $sql2 = "SELECT immatriculation FROM locations WHERE IDCLIENT = ?";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute([$id]);
    
    while($rowmat = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        $immatriculation = $rowmat['immatriculation']; // Fetching immatriculation correctly
      
        // Third Query
        $sql3 = "SELECT * FROM voiture WHERE matricule = ?";
        $stmt3 = $pdo->prepare($sql3);
        $stmt3->execute([$immatriculation]);
          
        while($voitureInfo = $stmt3->fetch(PDO::FETCH_ASSOC)) {
            // Process and store voiture information
            $results[] = $voitureInfo;
        }
    }
}


foreach($results as $row) {
    echo "<tr>";
    echo "<td>" . $nom . "</td>";
    echo "<td>" . $prenom. "</td>";
    echo "<td>" . $row['MATRICULE'] . "</td>";
    echo "<td>" . $row['MARQUE'] . "</td>";
    echo "<td>" . $row['MODELE'] . "</td>";
    echo "<td>" . $row['DATE_ACHAT'] . "</td>";
    echo "</tr>";
}
?>
</tbody>
    </table>
</body>
</html>
