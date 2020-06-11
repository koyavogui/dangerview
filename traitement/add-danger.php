<?php
   session_start();
   require '../bd/connexion-bd.php' ;
   require '../fonction/fonctionverif.php' ;
   $db= Database::connect();
   var_dump($_POST);

   if (!empty($_POST)) 
   {
    $nomSource          = checkInput($_POST['nomSource']);
    $descDanger         = checkInput($_POST['descDanger']); 
    $image              = checkInput($_FILES["image"]["name"]);
    $imagePath          = '../image/danger/'. basename($image);
    $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
    $isSuccess          = true;
    $isUploadSuccess    = false;

    if(empty($_POST['tDanger'])) 
        {
            echo "<br> Nom vide" ;
            $_SESSION['errortDanger'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['tdInvalid'] = "Veillez choisir un type de danger."; 
        }
    if(empty($_POST['cDanger']))
        {
            echo "<br> sexe vide" ;
            $_SESSION['errorcDAnger'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['cdInvalid'] = "Veillez choisir une catégorie de danger"; 
        }
    if(empty($_POST['bDanger'])) 
        {
            echo "<br> prenom vide" ;
            $_SESSION['errorbDanger'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['bDangerInvalid'] = "Veillez choisir un bourreau."; 
        }
    if(empty($_POST['vDanger'])) 
        {
            echo "<br> op vide <br>" ;
            var_dump($_POST['vDanger']);
            $_SESSION['errorvDanger'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['vDangerInvalid'] = "Veillez choisir les acteurs victimes."; 
        }
        if(!empty($image)) 
        {
            $isUploadSuccess = true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" ) 
            {
                $_SESSION['imageInvalid'] = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
                echo "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 5000000) 
            {
                $_SESSION['imageInvalid']= "Le fichier ne doit pas depasser les 500KB";
                echo "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath ) )
                {
                    $_SESSION['imageInvalid'] = "Il y a eu une erreur lors de l'upload";
                    echo "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }
        var_dump($isSuccess);
        var_dump($isUploadSuccess);
        var_dump($isSuccess && $isUploadSuccess);
    if ($isSuccess && $isUploadSuccess) {

           $newdanger = [ 
            'typeDanger'        => $_POST['tDanger'], 
            'categorieDanger'   => $_POST['cDanger'], 
            'descriptionDanger' => $descDanger,
            'victimeDanger'     => $_POST['vDanger'],
            'bourreauDanger'    => $_POST['bDanger'],
            'sourceDanger'      => $nomSource, 
            'dateModif'         => date("Y-m-d H:i:s"),
            'dateDanger'        => $_POST['dateDanger'],
            'imageDanger'       => $image, 
            'paysDanger'        => $_POST['pays'],  
            'villeDanger'       => $_POST['ville'], 
            'quartierDanger'    => $_POST['quartier'], 
            'lieuDanger'        => $_POST['lieu'],
            'idoperateur'       => $_SESSION['idUtilisateur']
           ];
           var_dump($newdanger);
           $insertdanger = "INSERT INTO dangertable (typeDanger, categorieDanger, descriptionDanger, victimeDanger, bourreauDanger, sourceDanger, derniereModification, dateDanger, imageDanger, pays, ville, quartier, lieu, idoperateur) VALUES  (:typeDanger,:categorieDanger,:descriptionDanger,:victimeDanger,:bourreauDanger,:sourceDanger,:dateModif,:dateDanger,:imageDanger,:paysDanger,:villeDanger,:quartierDanger, :lieuDanger, :idoperateur)" ;
           $resultat = $db->prepare($insertdanger)->execute($newdanger);
           echo '<hr>';
           var_dump($resultat);
            $newActivite = [
                ':activite'     => 'Ajout Danger',
                ':dateactivite' => date("Y-m-d H:i:s"),
                ':iduser'       => $_SESSION['idUtilisateur']
            ];
            //ajout d'activité
            var_dump($newActivite);
            if ($resultat) {
                $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
            var_dump($activite);
            $rActivite = $db->prepare($activite)->execute($newActivite);
            var_dump($rActivite);
           ($resultat) ? header ("location:../ajout-danger.php") : header ("location:../ajout-danger.php?operation=echec") ;
            }
       }
    }
    #header ("location:../ajout-utilisateur.php");
?>