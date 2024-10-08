<html>
 <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <title>Editer Client</title>

 </head>
</html>

<?php 
require "connection.php";
    $id=$_GET["id"];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom=$_POST['nom'];
        $pre=$_POST['prenom'];
        $ad=$_POST['adresse'];
        $tel=$_POST['tel'];
        $mail=$_POST['email'];
        $code=$_POST['codePostal'];
        $sql="UPDATE client SET  NOM = ?, PRENOM = ?, CODE_POSTAL = ?, LOCALITE = ?, TELEPHONE = ?, EMAIL = ?
        WHERE ID = ?";
        $result=$pdo->prepare($sql);
        $result->bindParam(1, $nom , PDO::PARAM_STR);
        $result->bindParam(2, $pre , PDO::PARAM_STR);
        $result->bindParam(3, $code , PDO::PARAM_STR);
        $result->bindParam(4, $ad , PDO::PARAM_STR);
        $result->bindParam(5, $tel , PDO::PARAM_STR);
        $result->bindParam(6, $mail , PDO::PARAM_STR);
        $result->bindParam(7, $id , PDO::PARAM_INT);
        $x=$result->execute(); 
        if ($x){
            header("location:listClients.php?msg=edit effectué avec succés");
        }  
    }
    
    $sql="SELECT * from client where ID=?";
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
                        <label class='form-label' for='IDClient'>ID Client</label>
                        <input type='text'  class='form-control' name='IDClient' id='IDClient' value=".$row['ID']." >
                        <div id='error_IDClient' class='text text-danger'>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='mb-3 col-sm-12 col-md-6'>
                    <label class='form-label' for='nom'>Nom</label>
                    <input type='text' class='form-control' name='nom' id='nom' value=".$row['NOM']." >
                </div>
            </div>
            <div class='row'>
                <div class='mb-3 col-sm-12 col-md-6'>
                    <label class='form-label' for='prenom'>Prenom</label>
                    <input type='text' class='form-control' name='prenom' id='prenom' value=".$row['PRENOM']." >
                </div>
            </div>
            <div class='row'>
                <div class='mb-3 col-sm-12 col-md-6'>
                    <label class='form-label' for='codePostal'>Code Postal</label>
                    <input type='text' class='form-control' name='codePostal' id='codePostal' value=".$row['CODE_POSTAL']." >
                </div>
            </div>
            <div class='row'>
                <div class='mb-3 col-sm-12 col-md-6'>
                    <label class='form-label' for='adresse'>Adresse</label>
                    <input type='text' class='form-control' name='adresse' id='adresse' value=".$row['LOCALITE']." >
                </div>
            </div>
            <div class='row'>
                <div class='mb-3 col-sm-12 col-md-6'>
                    <label class='form-label' for='tel'>Telephone</label>
                    <input type='tel' pattern='[0-9]{2}-[0-9]{3}-[0-9]{3}' class='form-control' name='tel' id='tel' value=".$row['TELEPHONE']." >
                    <small>Format: 50-000-000</small><br><br>
                </div>
            </div>
            <div class='row'>
                <div class='mb-3 col-sm-12 col-md-6'>
                    <label class='form-label' for='email'>E-mail</label>
                    <input type='email' class='form-control' name='email' id='email' value=".$row['EMAIL']." >
                </div>
            </div>
            <div class='mb-3 col-sm-12 col-md-6'>
                <button type='submit' class='btn btn-primary' name='submit' id='submit' >Modifier</button>
                <a href='listClients.php' type='button' class='btn btn-secondary' name='reset'>Retour</a>
            </div>
        </form>

    </div>";
?>

