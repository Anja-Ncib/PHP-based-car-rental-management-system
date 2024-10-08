<?php 
    require 'connection.php';
    if (isset($_GET["MATRICULE"])){
    $id=$_GET["MATRICULE"];
    $sql="delete from VOITURE where MATRICULE=?";
    $result=$pdo->prepare($sql);
    $result->bindParam(1, $id , PDO::PARAM_INT);
    $x=$result->execute();
    if ($x){
        header("location:listvoiture.php?msg=suppression effectué avec succés");
    }}
?>