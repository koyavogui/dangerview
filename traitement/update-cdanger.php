<?php
    session_start();
    require '../bd/connexion-bd.php' ; 
    $db= Database::connect();
    var_dump($_POST);
    if (!empty(@$_POST)) {
      
      $tdanger = strip_tags($_POST['tdanger']); //strip_tags — Supprime les balises HTML et PHP d'une chaîne
      $cdanger = strip_tags($_POST['cdanger']);
      $id      = strip_tags($_GET['id']);
      $categoriepreparer= $db->prepare("UPDATE categoriedanger SET nomCategorieDanger=?, nomTypeDanger=? WHERE idCategorieDanger=?");
      $insert = $categoriepreparer->execute([$cdanger, $tdanger, $id]);
      if (@$insert) {
        unset($_POST);
        $newActivite = [
            ':activite'     => 'Modification categorie de danger',
            ':dateactivite' => date("Y-m-d H:i:s"),
            ':iduser'       => $_SESSION['idUtilisateur']
        ];
        $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
        $rActivite = $db->prepare($activite)->execute($newActivite);
        $_SESSION['success'] = 'true';
        $_SESSION['echec']= '';
        header ("location:../ajout-cdanger.php");  
      }

    } else{
        header ("location:../ajout-cdanger.php");  
        $_SESSION['success'] = 'false';
    }
?>