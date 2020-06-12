<?php
session_start();
require 'bd/connexion-bd.php' ;
$db= Database::connect();
    var_dump($resultat);
    $newActivite = [
        ':activite'     => 'Deconnection',
        ':dateactivite' => date("Y-m-d H:i:s"),
        ':iduser'       => $_SESSION['idUtilisateur']
    ];
    var_dump($newActivite);
        $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
    var_dump($activite);
    $rActivite = $db->prepare($activite)->execute($newActivite);
    var_dump($rActivite);
   if($rActivite){
    Database::deconnect();
    session_destroy();
    header ("location:index.php");
   }

?>