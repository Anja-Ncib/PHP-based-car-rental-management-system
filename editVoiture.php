<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Editer Voiture</title>

    </head>
    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
            <B>GESTION DE LOCATION DES VOITURES</B>
        </nav>
        <div class="container d-flex justify-content-center text-center mb-4">
            <h3> EDITER VOTRE VOITURE </h3>
        </div>
        <div class="container d-flex justify-content-center text-center mb-4">
            <p class="text-muted">modifier le champs que vous voulez modifier</p>
        </div>

        <?php 
        require "connection.php";
        $id=$_GET["MATRICULE"];
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nom=$_POST['MARQUE'];
            $pre=$_POST['MODELE'];
            $ad=$_POST['CYLINDRE'];
            $tel=$_POST['DATE_ACHAT'];
            $sql="UPDATE VOITURE SET  MARQUE = ?, MODELE = ?, CYLINDRE = ?, DATE_ACHAT = ?
            WHERE MATRICULE = ?";
            $result=$pdo->prepare($sql);
            $result->bindParam(1, $nom , PDO::PARAM_STR);
            $result->bindParam(2, $pre , PDO::PARAM_STR);
            $result->bindParam(3, $ad , PDO::PARAM_STR);
            $result->bindParam(4, $tel , PDO::PARAM_STR);
            $result->bindParam(5, $id , PDO::PARAM_INT);
            $x=$result->execute(); 
            if ($x){
                header("location:listvoiture.php?msg=edit effectué avec succés");
            }  
        }
    
        $sql="SELECT * from VOITURE where MATRICULE=?";
        $result=$pdo->prepare($sql);
        $result->bindParam(1, $id , PDO::PARAM_INT);
        $x=$result->execute();
        $rows=$result->fetchAll();
        foreach($rows as $row){
            echo "<div class='container d-flex justify-content-center '>
            <div class='container d-flex justify-content-center '>
                <form class='form' action='' method='post' style='width:100%'>
                    <div class='row'>
                        <div class='mb-3 col-sm-12 col-md-6'>
                            <label class='form-label' for='immatriculation'>Immatriculation</label>
                            <input type='text'  class='form-control' name='MATRICULE' id='immatriculation' value=".$row['MATRICULE'].">
                            <div id='error_IDClient' class='text text-danger'>
                        </div>
                    </div>
            
                    <div class='row'>
                        <div class='mb-3 col-sm-12 col-md-6'>
                            <label class='form-label' for='model'>Model</label>
                            <input type='text' class='form-control' name='MODELE' id='model' value=".$row['MODELE']." >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='mb-3 col-sm-12 col-md-6'>
                            <label class='form-label' for='marque'>Marque</label>
                            <input type='text' class='form-control' name='MARQUE' id='marque' value=".$row['MARQUE']." >
                        </div>
                    </div>
            
                    <div class='row'>
                        <div class='mb-3 col-sm-12 col-md-6'>
                            <label class='form-label' for='cylindre'>Cylindre</label>
                            <input type='number' class='form-control' name='CYLINDRE' id='cylindre' value=".$row['CYLINDRE']." >
                        </div>
                    </div>
                    <div class='row'>
                        <div class='mb-3 col-sm-12 col-md-6'>
                            <label class='form-label' for='dateachat'>Date d'achat</label>
                            <input type='date' class='form-control' name='DATE_ACHAT' id='dateachat' value=".$row['DATE_ACHAT']." >
                        </div>
                    </div>
            
                    <div class='mb-3 col-sm-12 col-md-6'>
                        <button type='submit' class='btn btn-primary' name='submit' id='submit' >Modifier</button>
                        <a href='listvoiture.php' type='button' class='btn btn-secondary' name='reset'>Retour</a>
                    </div>
                </form>

            </div>
        </div>";}
?>

</body>
</html>