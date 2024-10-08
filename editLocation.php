<html>
 <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <title>Editer Location</title>

 </head>
</html>

<?php 
require "connection.php";
    $id=$_GET["id"];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $idClient=$_POST['idClient'];
        $idLocation=$_POST['idLocation'];
        $immat=$_POST['immatriculation'];
        $dateDebut=$_POST['dateDebut'];
        $dateFin=$_POST['dateFin'];
        $dateRentree=$_POST['dateRentree'];
        
        $sql="UPDATE locations SET  IdClient = ?, IdLocation = ?, immatriculation = ?, DateDebut = ?, DateFin = ?, DateRentree = ?
        WHERE IdLocation = ?";
        $result=$pdo->prepare($sql);
        $result->bindParam(1, $idClient , PDO::PARAM_INT);
        $result->bindParam(2, $idLocation , PDO::PARAM_INT);
        $result->bindParam(3, $immat , PDO::PARAM_STR);
        $result->bindParam(4, $dateDebut , PDO::PARAM_STR);
        $result->bindParam(5, $dateFin , PDO::PARAM_STR);
        $result->bindParam(6, $dateRentree , PDO::PARAM_STR);
        $result->bindParam(7, $idLocation , PDO::PARAM_INT);
        $x=$result->execute(); 
        if ($x){
            header("location:listLocations.php?msg=edit effectué avec succés");
        }  
    }
    
    $sql="SELECT * from locations where IdLocation=?";
    $result=$pdo->prepare($sql);
    $result->bindParam(1, $id , PDO::PARAM_INT);
    $x=$result->execute();
    $rows=$result->fetchAll();
    foreach($rows as $row)
        echo "<div class='container d-flex justify-content-center '>
    
        <div class='container d-flex justify-content-center '>
            <form class='form' action='' method='post' style='width:100%'>
                <div class='row'>
                    <div class='mb-3 col-sm-12 col-md-6'>
                        <label class='form-label' for='idClient'>ID Client</label>
                        <input type='text'  class='form-control' name='idClient' id='idClient' value=".$row['IdClient']." >
                    </div>
                    <div class='mb-3 col-sm-12 col-md-6'>
                        <label class='form-label' for='idLocation'>ID Location</label>
                        <input type='text'  class='form-control' name='idLocation' id='idLocation' value=".$row['IdLocation']." >
                    </div>
                </div>
                <div class='row'>
                    <div class='mb-3 col-sm-12 col-md-6'>
                        <label class='form-label' for='immatriculation'>Immatriculation</label>
                        <input type='text' class='form-control' name='immatriculation' id='immatriculation' value=".$row['immatriculation']." >
                    </div>
                </div>
                <div class='row'>
                    <div class='mb-3 col-sm-12 col-md-6'>
                        <label class='form-label' for='dateDebut'>Date de début</label>
                        <input type='datetime-local' class='form-control' name='dateDebut' id='dateDebut' value=".$row['DateDebut']." >
                    </div>
                </div>
                <div class='row'>
                    <div class='mb-3 col-sm-12 col-md-6'>
                        <label class='form-label' for='dateFin'>Date de fin prévue</label>
                        <input type='datetime-local' class='form-control' name='dateFin' id='dateFin' value=".$row['DateFin']." >
                    </div>
                </div>
                <div class='row'>
                    <div class='mb-3 col-sm-12 col-md-6'>
                        <label class='form-label' for='dateRentree'>Date de rentrée</label>
                        <input type='datetime-local' class='form-control' name='dateRentree' id='dateRentree' value=".$row['DateRentree']." >
                    </div>
                </div>
                <div class='mb-3 col-sm-12 col-md-6'>
                    <button type='submit' class='btn btn-primary' name='submit' id='submit' >Modifier</button>
                    <a href='listLocations.php' type='button' class='btn btn-secondary' name='reset'>Retour</a>
                </div>
            </form>

        </div>";
?>
