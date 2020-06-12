<?php
session_start();
   require '../bd/connexion-bd.php' ;
    
   
   require '../fonction/fonctionverif.php';
   var_dump($_POST);
     
   if (!empty($_POST)) 
   {
    $tDanger        = checkInput($_POST['tDanger']);  
    $cDanger        = checkInput($_POST['cDanger']); 
    $bDanger        = checkInput($_POST['bDanger']); 
    $vDanger        = checkInput($_POST['vDanger']); 
    $descDanger     = checkInput($_POST['descDanger']); 
    $sourceDanger   = checkInput($_POST['nomSource']); 
    $dateDanger     = checkInput($_POST['dateDanger']); 
    $paysDanger     = checkInput($_POST['pays']); 
    $vilDanger      = checkInput($_POST['ville']); 
    $qDanger        = checkInput($_POST['quartier']); 
    $zDanger        = checkInput($_POST['lieu']); 
    $image              = checkInput($_FILES["image"]["name"]);
    $imagePath          = '../image/danger/'. basename($image);
    $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
    $isSuccess          = true;
    $isUploadSuccess    = false;

 
    if (empty($tDanger)) {
        $_SESSION['tDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un type de danger s\'il vous plait'; 
        $isSuccess = false;
    }           
    if (empty($cDanger)) {
        $_SESSION['cDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir une catégorie de danger s\'il vous plait'; 
        $isSuccess = false;
    }           
    if (empty($bDanger)) {
        $_SESSION['bDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un s\'il vous plait'; 
        $isSuccess = false;
    }           
    if (empty($vDanger)) {
        $_SESSION['vDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un s\'il vous plait'; 
        $isSuccess = false;
    }           
    if (empty($descDanger)) {
        $_SESSION['descDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez saisir s\'il vous plait une'; 
        $isSuccess = false;
    }              
    if (empty($sourceDanger)) {
        $_SESSION['sourceDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez saisir s\'il vous plait une'; 
        $isSuccess = false;
    }                
    if (empty($dateDanger)) {
        $_SESSION['dateDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un s\'il vous plait'; 
        $isSuccess = false;
    }              
    if (empty($paysDanger)) {
        $_SESSION['paysDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un s\'il vous plait'; 
        $isSuccess = false;
    }              
    if (empty($vilDanger)) {
        $_SESSION['vilDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un s\'il vous plait'; 
        $isSuccess = false;
    }             
    if (empty($qDanger)) {
        $_SESSION['qDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un s\'il vous plait'; 
        $isSuccess = false;
    }           
    if (empty($zDanger)) {
        $_SESSION['zDangerError'] ='<i class="fa fa-info" aria-hidden="true"></i> Veillez choisir un s\'il vous plait'; 
        $isSuccess = false;
    } 
    if(empty($image)) 
        {
            $_SESSION['imageError'] = '<i class="fa fa-info" aria-hidden="true"></i> Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(!empty($image)) 
        {
            $isUploadSuccess = true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" ) 
            {
                $_SESSION['imageError'] = '<i class="fa fa-info" aria-hidden="true"></i> Les fichiers autorises sont: .jpg, .jpeg, .png, .gif';
                echo "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 5000000) 
            {
                $_SESSION['imageError'] = '<i class="fa fa-info" aria-hidden="true"></i> Le fichier ne doit pas depasser les 500KB';
                echo "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath ) )
                {
                    $_SESSION['imageError'] = '<i class="fa fa-info" aria-hidden="true"></i> Il y a eu une erreur lors de l\'upload';
                    echo "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }
        var_dump($isSuccess);
        var_dump($isUploadSuccess);
        var_dump($isSuccess && $isUploadSuccess);
        if ($isSuccess && $isUploadSuccess)
    {

           $newdanger = [ 
            'typeDanger'        => $tDanger, 
            'categorieDanger'   => $cDanger, 
            'descriptionDanger' => $descDanger,
            'victimeDanger'     => $vDanger,
            'bourreauDanger'    => $bDanger,
            'sourceDanger'      => $sourceDanger, 
            'dateModif'         => date("Y-m-d H:i:s"),
            'dateDanger'        => $dateDanger,
            'imageDanger'       => $image, 
            'paysDanger'        => $paysDanger,  
            'villeDanger'       => $vilDanger, 
            'quartierDanger'    => $qDanger, 
            'lieuDanger'        => $zDanger,
            'idoperateur'       => $_SESSION['idUtilisateur']
           ];
           var_dump($newdanger);
           $insertdanger = "INSERT INTO dangertable (typeDanger, categorieDanger, descriptionDanger, victimeDanger, bourreauDanger, sourceDanger, derniereModification, dateDanger, imageDanger, pays, ville, quartier, lieu, idoperateur) VALUES  (:typeDanger,:categorieDanger,:descriptionDanger,:victimeDanger,:bourreauDanger,:sourceDanger,:dateModif,:dateDanger,:imageDanger,:paysDanger,:villeDanger,:quartierDanger, :lieuDanger, :idoperateur)" ;
           $db=Database::connect();
           $resultat = $db->prepare($insertdanger)->execute($newdanger);
           $db=Database::deconnect();
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
            $db=Database::connect();
            $rActivite = $db->prepare($activite)->execute($newActivite);
            $db=Database::deconnect();
            var_dump($rActivite);
            $_SESSION['default'] ='Ajout de danger réussi';
           ($resultat) ? header ("location:../ajout-danger.php") : header ("location:../ajout-danger.php") ;
        }
    }
    $_SESSION['default'] ='Ajout de danger non effectuer';
    header ("location:../ajout-danger.php");

    }
    $_SESSION['default'] ='Ajout de danger non effectuer';
    header ("location:../ajout-danger.php");
?>