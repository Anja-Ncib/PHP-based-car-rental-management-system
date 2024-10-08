<?php 
    require 'connection.php';
    $id=$_GET["id"];
    $sql="delete from locations where IdLocation=?";
    $result=$pdo->prepare($sql);
    $result->bindParam(1, $id , PDO::PARAM_INT);
    $x=$result->execute();
    if ($x){
        header("location:listLocations.php?msg=suppression effectué avec succés");
    }
?>
