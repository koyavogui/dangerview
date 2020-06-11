<?php
   session_start();
   require '../bd/connexion-bd.php' ;
   require '../fonction/fonctionverif.php' ;
   $db= Database::connect();
   var_dump($_POST);

   if (!empty($_POST)) 
   {
    $nom               = checkInput($_POST['nom']);
    $prenom             = checkInput($_POST['prenom']); 
    $image              = checkInput($_FILES["image"]["name"]);
    $imagePath          = '../image/avatar/'. basename($image);
    $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
    $isSuccess          = true;
    $isUploadSuccess    = false;

    if(empty($nom)) 
        {
            echo "<br> Nom vide" ;
            $_SESSION['errorNom'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['nomInvalid'] = "Veillez saisir un nom s'il vous plait."; 
        }
    if(empty($_POST['sexe']))
        {
            echo "<br> sexe vide" ;
            $_SESSION['errorSexe'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['sexeInvalid'] = "Veillez Veuillez choisir le genre"; 
        }
    if(empty($prenom)) 
        {
            echo "<br> prenom vide" ;
            $_SESSION['errorPrenom'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['prenomInvalid'] = "Veillez saisir un prénom s'il vous plait."; 
        }
    if(empty($_POST['typeOperateur'])) 
        {
            echo "<br> op vide <br>" ;
            var_dump($_SESSION['typeOperateur']);
            $_SESSION['errorTypeOp'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['typeOpInvalid'] = "Veillez choisir un rôle s'il vous plait."; 
        }
    if(empty($image)) 
        {
            echo "<br> image vide" ;
            $_SESSION['errorImage'] = 'is-invalid';
            $isSuccess = false;
            $_SESSION['imageInvalid'] = "Veillez choisir une image s'il vous plait."; 
        }
        else
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

        if (isset($_POST)) {
            if (isset($_POST['aap'])) {
                $aap = "oui"; 
            }
            else{
                $aap = "non";
            };
            if (isset($_POST['aav'])) {
                $aav = "oui"; 
            }
            else{
                $aav = "non";
            };
            if (isset($_POST['aaq'])) {
                $aaq = "oui"; 
            }else {
                $aaq = "non"; 
            };
            if (isset($_POST['aatd'])) {
                $aatd = "oui"; 
            }else{
                $aatd = "non"; 
            };
            if (isset($_POST['aacd'])) {
                $aacd = "oui"; 
            }
            else {
                $aacd ="non";
            };
            $mpdrand =passgen2(15);
            $mdp = password_hash($mpdrand, PASSWORD_BCRYPT); 
           $newuser = [ 
            'nom'           => $nom, 
            'prenom'        => $prenom, 
            'sexe'          => $_POST['sexe'], 
            'email'         => $_POST['email'], 
            'mdp'           => $mdp, 
            'inscription'   => date("Y-m-d H:i:s"), 
            'typeUser'      => $_POST['typeOperateur'], 
            'aap'           => $aap, 
            'aav'           => $aav, 
            'aaq'           => $aaq, 
            'aatd'          => $aatd,
            'aacd'          => $aacd, 
            'idadmin'       => $_SESSION['idUtilisateur'],
            'avatar'        => $image
           ];
           var_dump($newuser);
           $insertuser = "INSERT INTO user (nomUtilisateur, prenomUtilisateur, sexeUtilisateur, emailuser, motdepasseuser, dateinscriptionuser, roleUtilisateur, aap,aav, aaq, aatd, aacd, avatar, idParent) VALUES  (:nom,:prenom,:sexe,:email,:mdp,:inscription,:typeUser,:aap,:aav,:aaq,:aatd,:aacd, :avatar, :idadmin)" ;
           $resultat = $db->prepare($insertuser)->execute($newuser);
           echo '<hr>';
           var_dump($resultat);
            $newActivite = [
                ':activite'     => 'Ajout utilisateur',
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
            $_SESSION['default'] = $mpdrand ; 
           ($resultat) ? header ("location:../ajout-utilisateur.php?operation=true") : header ("location:../ajout-utilisateur.php?operation=echec") ;
            }
       }
    }
    header ("location:../ajout-utilisateur.php");
   }
   header ("location:../ajout-utilisateur.php");
?>