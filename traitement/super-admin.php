<?php
   session_start();
   require '../bd/connexion-bd.php' ;
   require '../fonction/fonctionverif.php' ;
   $db= Database::connect();
   var_dump($_POST);

   if (!empty($_POST)) 
   {
    $nom               = strip_tags($_POST['nom']);
    $prenom             = strip_tags($_POST['prenom']);
    $email  =  strip_tags($_POST['email']);
    $mpd =  strip_tags($_POST['mpd']);
            $mdp = password_hash($mpd, PASSWORD_BCRYPT); 
           $newuser = [ 
            'iduser'      => 10011,
            'nom'           => $nom, 
            'prenom'        => $prenom, 
            'sexe'          => $_POST['sexe'], 
            'email'         => $email, 
            'mdp'           => $mdp, 
            'inscription'   => date("Y-m-d H:i:s"), 
            'typeUser'      => "Super Administrateur", 
            'aap'           => "oui", 
            'aav'           =>"oui", 
            'aaq'           => "oui", 
            'aatd'          => "oui",
            'aacd'          => "oui", 
            'idadmin'       => 10011,
            'avatar'        => ''
           ];
           echo '<hr>';
           echo '<hr><br><br>';
           echo '<hr>';

           var_dump($newuser);
           $insertuser = "INSERT INTO user (idUtilisateur,nomUtilisateur, prenomUtilisateur, sexeUtilisateur, emailuser, motdepasseuser, dateinscriptionuser, roleUtilisateur, aap,aav, aaq, aatd, aacd, avatar, idParent) VALUES  (:iduser, :nom,:prenom,:sexe,:email,:mdp,:inscription,:typeUser,:aap,:aav,:aaq,:aatd,:aacd, :avatar, :idadmin)" ;
           $resultat = $db->prepare($insertuser)->execute($newuser);
           echo '<hr>';
           var_dump($resultat);
            $newActivite = [
                ':activite'     => 'Ajout Super Utilisateur utilisateur',
                ':dateactivite' => date("Y-m-d H:i:s"),
                ':iduser'       =>10011
            ];
            //ajout d'activité
            var_dump($newActivite);
            if ($resultat) {
                $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
            var_dump($activite);
            $rActivite = $db->prepare($activite)->execute($newActivite);
            var_dump($rActivite);
           ($resultat) ? header ("location:../ ") : header ("location:../ ") ;
            }
        }
   
?>