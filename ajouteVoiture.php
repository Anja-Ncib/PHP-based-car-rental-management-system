<?php 
require 'connection.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mat=$_POST['immatriculation'];
    $mod=$_POST['model'];
    $mar=$_POST['marque'];
    $cy=$_POST['cylindre'];
    $date=$_POST['dateachat'];
    $error= controle([$mat,$mod,$mar,$cy,$date],['immatriculation','model','marque','cylindre','dateachat']);
    if(!empty($error))
        header("location:formulaireVoiture.php?error=$error");
    else{
        $sql="insert into VOITURE (MATRICULE,MARQUE,MODELE,CYLINDRE,DATE_ACHAT)
        values (?, ?, ?, ?,?)";
        $result=$pdo->prepare($sql);
        $result->bindParam(1, $mat , PDO::PARAM_STR);
        $result->bindParam(2, $mod , PDO::PARAM_STR);
        $result->bindParam(3, $mar , PDO::PARAM_STR);
        $result->bindParam(4, $cy , PDO::PARAM_STR);
        $result->bindParam(5, $date , PDO::PARAM_STR);
        $result->execute();
        header("location:listVoiture.php?msg=ajout effectué avec succés");
    }
}
?>