<?php
  session_start();
  require '../bd/connexion-bd.php' ;
  $db= Database::connect();
     if(!empty($_GET['id'])) 
     {
         $id = strip_tags($_GET['id']);
         $statement = $db->prepare("DELETE FROM categoriedanger WHERE idCategorieDanger = ?");
         $statement->execute(array($id));
         if($statement)
         {
            $newActivite = [
                ':activite'     => 'Suppression de categorie de Danger',
                ':dateactivite' => date("Y-m-d H:i:s"),
                ':iduser'       => $_SESSION['idUtilisateur']
            ];
            var_dump($newActivite);
            $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
            var_dump($activite);
            $rActivite = $db->prepare($activite)->execute($newActivite);
            if ($rActivite) {
                Database::deconnect();
                header ("location:../ajout-cdanger.php"); 
            }
         }
 
     }
      
 
      
 ?>