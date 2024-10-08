<?php 
    require 'connection.php';
    $id=$_GET["id"];
    $sql="delete from client where ID=?";
    $result=$pdo->prepare($sql);
    $result->bindParam(1, $id , PDO::PARAM_INT);
    $x=$result->execute();
    if ($x){
        header("location:listClients.php?msg=suppression effectué avec succés");
    }
?>