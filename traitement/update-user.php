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
    
        var_dump($isSuccess);
    if ($isSuccess) {

        if (isset($_POST)) {
            echo'<br> verification des autorisations <hr>';
            if (isset($_POST['AAP'])) {
                $aap = "oui"; 
            }
            else{
                $aap = "non";
            };
            if (isset($_POST['AAV'])) {
                $aav = "oui"; 
            }
            else{
                $aav = "non";
            };
            if (isset($_POST['AAQ'])) {
                $aaq = "oui"; 
            }else {
                $aaq = "non"; 
            };
            if (isset($_POST['AATD'])) {
                $aatd = "oui"; 
            }else{
                $aatd = "non"; 
            };
            if (isset($_POST['AACD'])) {
                $aacd = "oui"; 
            }
            else {
                $aacd ="non";
            };
            $mpdrand =passgen2(15);
            $mdp = password_hash($mpdrand, PASSWORD_BCRYPT); 
           $newuser = [ 
            'idUser'        => $_GET['id'],
            'nom'           => $nom, 
            'prenom'        => $prenom, 
            'sexe'          => $_POST['sexe'], 
            'email'         => $_POST['email'], 
            'typeUser'      => $_POST['typeOperateur'], 
            'aap'           => $aap, 
            'aav'           => $aav, 
            'aaq'           => $aaq, 
            'aatd'          => $aatd,
            'aacd'          => $aacd, 
            'avatar'        => $image
           ];
           echo'<br><hr> Contenu de nouvellevariable globale';
           var_dump ($newuser);
           if(empty($image)) 
           {
            $newuser = [ 
                'nom'           => $nom, 
                'prenom'        => $prenom, 
                'sexe'          => $_POST['sexe'], 
                'email'         => $_POST['email'], 
                'typeUser'      => $_POST['typeOperateur'], 
                'aap'           => $aap, 
                'aav'           => $aav, 
                'aaq'           => $aaq, 
                'aatd'          => $aatd,
                'aacd'          => $aacd,
                'idUser'        => checkInput($_GET['id'])
               ];
               echo'<br><hr> Contenu de nouvellevariable';
               var_dump ($newuser);
            $insertuser = "UPDATE   user  SET nomUtilisateur=:nom, prenomUtilisateur=:prenom, sexeUtilisateur=:sexe, emailuser=:email,    roleUtilisateur=:typeUser, aap=:aap, aav=:aav, aaq=:aaq, aatd=:aatd, aacd=:aacd WHERE idUtilisateur=:idUser";
            $resultat = $db->prepare($insertuser)->execute($newuser);
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
               if($_FILES["image"]["size"] > 500000) 
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
               $insertuser = "UPDATE   utilisateur  set nomUtilisateur =:nom , prenomUtilisateur=:prenom, sexeUtilisateur =:sexe, emailUtilisateur =:email , typeUtilisateur =:typeUser, aap =:aap, aav =:aav, aaq =:aaq, aatd = :aatd, aacd=:aacd, avatar =:avatar WHERE idUtilisateur = :idUser" ;
               $resultat = $db->prepare($insertuser)->execute($newuser); 
           }

           var_dump($resultat);
           if ( $resultat) {
            $newActivite = [
                ':activite'     => 'Modification utilisateur',
                ':dateactivite' => date("Y-m-d H:i:s"),
                ':iduser'       => $_SESSION['idUtilisateur']
            ];
            var_dump($newActivite);
            $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
            var_dump($activite);
            $rActivite = $db->prepare($activite)->execute($newActivite);
            var_dump($rActivite);
            $_SESSION['default'] = "Information d'utilisateur mis à jour avec succes" ; 
           }
            
           ($resultat) ? header ("location:../list-utilisateur.php") : header ("location:../list-utilisateur.php") ;
       }
    }
    header ("location:../list-utilisateur.php?id=");
   }
   header ("location:../list-utilisateur.php");
?>