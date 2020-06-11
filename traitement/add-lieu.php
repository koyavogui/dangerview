<?php
   session_start();
   require '../bd/connexion-bd.php' ;
   require '../fonction/fonctionverif.php' ;
   $db= Database::connect();
   var_dump($_POST);
   var_dump($_FILES["image"]["name"]);
   if (!empty($_POST)) {
        $nomlieu          =checkInput($_POST['nomlieu']);
        $categorielieu    =checkInput($_POST['categorielieu']);
        $longlieu         =checkInput($_POST['longlieu']);
        $latlieu          =checkInput($_POST['latlieu']);
        $descriptionlieu  =checkInput($_POST['descriptionlieu']);
        $image            =checkInput($_FILES["image"]["name"]);
        $imagePath        = '../image/lieu/'. basename($image);
        $imageExtension   = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess        = true;
        $isUploadSuccess  = false;
  
        if (empty($_POST['pays'])) {
            $_SESSION['errorpays'] ='is-invalid';
            $isSuccess = false;
            $_SESSION['paysInvalid']="";
        }
        if (empty($_POST['ville'])) {
            $_SESSION['errorville'] ='is-invalid';
            $isSuccess = false;
            $_SESSION['villeInvalid']="";
            }
        if (empty($_POST['quartier'])) {
                $_SESSION['errorquartier'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['quartierInvalid']="";
            }   
        if (empty($nomlieu)) {
                $_SESSION['errorlieu'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['lieuInvalid']="";
            }   
        if (empty($categorielieu)) {
                $_SESSION['errorcatlieu'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['catlieuInvalid']="";
            }   
        if (empty($longlieu)) {
                $_SESSION['errorlonglieu'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['longlieuInvalid']="";
            }   
        if (empty($latlieu)) {
                $_SESSION['errorlatlieu'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['latlieuInvalid']="";
            }   
        if (empty($descriptionlieu)) {
                $_SESSION['errordesclieu'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['desclieuInvalid']="";
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
            if ($isSuccess && $isUploadSuccess) {
                 $newlieu = [
                     'categorieLieu'        =>$categorielieu,
                     'nomLieu'              =>$nomlieu,
                     'longitude'            =>$longlieu,
                     'latitude'             =>$latlieu ,
                     'descriptionlieu'      =>$descriptionlieu,
                     'imagelieu'            =>$image ,
                     'quartier'             =>$_POST['quartier'],
                     'ville'                =>$_POST['ville'],
                     'pays'                 =>$_POST['pays'],
                     'dernieremodif'        => date("Y-m-d H:i:s")
                 ];
                $insertlieu = "INSERT INTO lieu(categorieLieu, NomLieu, longitude, latitude, descriptionLieu, imageLieu, quartier, ville, pays, dernieremodif) VALUES ( :categorieLieu, :nomLieu, :longitude, :latitude, :descriptionlieu, :imagelieu, :quartier, :ville, :pays, :dernieremodif)";
                $resultat = $db->prepare($insertlieu)->execute($newlieu);
                var_dump($resultat);
                $newActivite = [
                    ':activite'     => 'Ajout Lieu',
                    ':dateactivite' => date("Y-m-d H:i:s"),
                    ':iduser'       => $_SESSION['idUtilisateur']
                ];
                var_dump($newActivite);
                if ($resultat) {
                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                var_dump($activite);
                $rActivite = $db->prepare($activite)->execute($newActivite);
                var_dump($rActivite);
               ($resultat) ? header ("location:../ajout-lieu.php") : header ("location:../ajout-lieu.php?operation=echec") ;
                }
               
            }

            header ("location:../ajout-lieu.php");
        }
?>