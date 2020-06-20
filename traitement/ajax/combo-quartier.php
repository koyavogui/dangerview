<?php
 session_start();
     require '../../bd/connexion-bd.php' ; 
    $i = 1;
    $db= Database::connect();
    @$idQuartier= strip_tags($_GET['id']);                    
    @$recupQuartier= $db->prepare("SELECT * FROM  Quartier WHERE idVille=? ORDER BY nomQuartier");
    @$quartierTotal=$recupQuartier->execute([$idQuartier]);
    $nombreligne = $recupQuartier->rowCount(); //verifier si l'on trouve une valeur après la requette  
    if ($nombreligne>0) {
        echo '<option value=""> -- Choisir un quartier --</option>';
        foreach($recupQuartier as $quartier)
        {
            echo '<option value="'.$quartier['idQuartier'] .'">'.$quartier['nomQuartier'] .'</option>';
        }
    }else {
        echo '<option value=""> <em>-- Aucune Quartier enregistrée pour cette ville --</em></option>';
    }
?>