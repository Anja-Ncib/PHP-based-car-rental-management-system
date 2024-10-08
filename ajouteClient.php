<?php 
require 'connection.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['IDClient'];
    $nom=$_POST['nom'];
    $pre=$_POST['prenom'];
    $ad=$_POST['adresse'];
    $tel=$_POST['tel'];
    $mail=$_POST['email'];
    $code=$_POST['codePostal'];
    $error= controle([$id,$nom,$pre,$ad,$tel,$mail,$code],['IDClient','nom','prenom','adresse','tel','email','codePostal']);
    if(!empty($error))
        header("location:formulaireClient.php?error=$error");
    else{
        $sql="insert into client (ID ,NOM,PRENOM,CODE_POSTAL,LOCALITE,TELEPHONE,EMAIL)
        values (?, ?, ?, ?,?,?,?)";
        $result=$pdo->prepare($sql);
        $result->bindParam(1, $id , PDO::PARAM_STR);
        $result->bindParam(2, $nom , PDO::PARAM_STR);
        $result->bindParam(3, $pre , PDO::PARAM_STR);
        $result->bindParam(4, $code , PDO::PARAM_STR);
        $result->bindParam(5, $ad , PDO::PARAM_STR);
        $result->bindParam(6, $tel , PDO::PARAM_STR);
        $result->bindParam(7, $mail , PDO::PARAM_STR);
        $x=$result->execute();
        if ($x){
        header("location:listClients.php?msg=ajout effectué avec succés");}
    }
}
?>