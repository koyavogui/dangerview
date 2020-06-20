<?php
       session_start();
       require '../bd/connexion-bd.php' ;
       $db= Database::connect();
       var_dump($_POST);
       if (!empty($_POST)) {
        $nomQuartier          =strip_tags($_POST['nomlieu']);
        $descriptionQuartier  =strip_tags($_POST['descriptionlieu']);
        $image            =strip_tags($_FILES["image"]["name"]);
        $imagePath        = '../image/lieu/pays/'. basename($image);
        $imageExtension   = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess        = true;
        $isUploadSuccess  = false;
  
        if (empty($nomQuartier)) {
                $_SESSION['errorQuartier'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['QuartierInvalid']="";
            }   
        if (empty($descriptionQuartier)) {
                $_SESSION['errordescQuartier'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['descQuartierInvalid']="";
            }
    if(empty($image)) // le input file est vide, ce qui signifie que l'image n'a pas ete update
        {
            $isImageUpdated = false;
            echo'<hr>';
        }
        else
        {
            echo'<hr>';
            $isImageUpdated = true;
            $isUploadSuccess =true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" ) 
            {
                $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
                $isUploadSuccess = false;
                echo'<hr>'.$imageError.'<br>';
            }
            if($_FILES["image"]["size"] > 5000000) 
            {
                echo'<hr>';
                $imageError = "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
                echo'<hr>'.$imageError.'<br>';
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                {
                    $imageError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                    echo'<hr>'.$imageError.'<br>';
                } 
            } 
        }

        var_dump($image);
        echo'<hr> $isUploadSuccess en dessous';
        var_dump($isUploadSuccess);
        echo'<hr> $isSuccess && $isImageUpdated && $isUploadSuccess en dessous';
        var_dump($isSuccess && $isImageUpdated && $isUploadSuccess);
        echo'<hr> $isUploadSuccess en dessous';
        var_dump($isSuccess && !$isImageUpdated);
        if (($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated))
            {
                $db = Database::connect();
            if($isImageUpdated)
            {
                   $newQuartier = [
                    'nomQuartier'             =>$nomQuartier,
                    'descriptionQuartier'     =>$descriptionQuartier,
                    'lat'                     =>$_POST['latlieu'],
                    'lng'                     =>$_POST['longlieu'],
                    'pays'                    =>$_POST['pays'],
                    'ville'                    =>$_POST['ville'],
                    'imageQuartier'           =>$image,
                    'dernieremodif'           => date("Y-m-d H:i:s"),
                    'id'                      => $_GET['id']
                ];
                $updateQuartier = "UPDATE quartier  SET    nomQuartier=:nomQuartier, lng=:lng, lat=:lat, descriptionQuatier=:descriptionQuartier, imageQuartier=:imageQuartier, idPays=:pays, idVille=:ville, dernieremodif=:dernieremodif  WHERE idQuartier=:id";
               $resultat = $db->prepare($updateQuartier)->execute($newQuartier); 
               
                echo'<hr> resultat d?insertion';
                var_dump($newQuartier);
                var_dump($resultat);
            }
            else
            {
                $newQuartier = [
                    'nomQuartier'              =>$nomQuartier,
                    'descriptionQuartier'      =>$descriptionQuartier,
                    'lat'                      =>$_POST['latlieu'],
                    'lng'                      =>$_POST['longlieu'],
                    'pays'                     =>$_POST['pays'],
                    'ville'                    =>$_POST['ville'],
                    'dernieremodif'            =>date("Y-m-d H:i:s"),
                    'id'                       =>$_GET['id']
                ];
                $updateQuartier = "UPDATE  quartier  SET    nomQuartier=:nomQuartier, lng=:lng, lat=:lat, descriptionQuatier=:descriptionQuartier,idPays=:pays, idVille=:ville, dernieremodif=:dernieremodif   WHERE idQuartier=:id";
               $resultat = $db->prepare($updateQuartier)->execute($newQuartier);
            }
            $newActivite = [
                ':activite'     => 'Modification Quartier',
                ':dateactivite' => date("Y-m-d H:i:s"),
                ':iduser'       => $_SESSION['idUtilisateur']
            ];
            var_dump($newActivite);
                if ($resultat) {
                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                var_dump($activite);
                $rActivite = $db->prepare($activite)->execute($newActivite);
                var_dump($rActivite);
                $_SESSION['default'] ='';
               ($resultat) ? header ("location:../list-Quartier.php") : header ("location:../ajout-Quartier.php?operation=echec") ;
            }
    
               
            }

            header ("location:../ajout-Quartier.php");
        }
?>