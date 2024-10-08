<?php 
require 'connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $idClient = $_POST['idClient'];
    $immatriculation = $_POST['immatriculation'];
    $dateDebut = $_POST['dateDebut'];
    $dateFin = $_POST['dateFin'];
    $dateRentree = $_POST['dateRentree'];

    $error = controle([$idClient, $immatriculation, $dateDebut, $dateFin, $dateRentree], ['idClient', 'immatriculation', 'dateDebut', 'dateFin', 'dateRentree']);

    if(!empty($error)) {
        header("location:formulaireLocation.php?error=$error");
    } else {
        $sql = "INSERT INTO locations (IdClient, immatriculation, DateDebut, DateFin, DateRentree)
                VALUES (?, ?, ?, ?, ?)";
        $result = $pdo->prepare($sql);
        $result->bindParam(1, $idClient, PDO::PARAM_INT);
        $result->bindParam(2, $immatriculation, PDO::PARAM_STR);
        $result->bindParam(3, $dateDebut, PDO::PARAM_STR);
        $result->bindParam(4, $dateFin, PDO::PARAM_STR);
        $result->bindParam(5, $dateRentree, PDO::PARAM_STR);
        $result->execute();
        header("location:listLocations.php?msg=ajout effectué avec succés");
    }
}
?>
