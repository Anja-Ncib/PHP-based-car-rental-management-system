<?php
define('SERVER', 'localhost');
define('DBNAME', 'projet_web');
define('USER', 'root');
define('PASSWD', '0000');
$dns="mysql:host=".SERVER.";dbname=".DBNAME;
try {
    $pdo = new PDO($dns, USER, PASSWD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e) {
    $msg = 'Erreur ' . $e->getFile() . ' ligne ' . $e->getLine() .
    ' : ' . $e->getMessage();
    die($msg);
}
$error="";
function controle($tabvar,$tabfield){
    $errors="";
    foreach($tabvar as $indice=>$var){
        if(empty($var)){
            $errors.="Le champ ".$tabfield[$indice]." est obligatoire!<br>";
        }
    }
    return $errors;
}
?>