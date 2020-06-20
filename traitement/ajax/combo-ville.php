<?php
 session_start();
     require '../../bd/connexion-bd.php' ; 
    $i = 1;
    $db= Database::connect();
    @$idVille= strip_tags($_GET['id']);                    
    @$recupVille= $db->prepare("SELECT * FROM  ville WHERE idPays=? ORDER BY nomVille");
    @$villeTotal=$recupVille->execute([$idVille]);
    $nombreligne = $recupVille->rowCount(); //verifier si l'on trouve une valeur après la requette  
    if ($nombreligne>0) {
        echo '<option value=""> -- Choisir une ville --<option>';
        foreach($recupVille as $ville)
        {
            echo '<option value="'.$ville['idVille'] .'">'.$ville['nomVille'] .'</option>';
        }
    }else {
        echo '<option value=""> -- Aucune ville enregistrée pour ce pays --</option>';
    }
?>

