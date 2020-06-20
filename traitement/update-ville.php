<?php
       session_start();
       require '../bd/connexion-bd.php' ;
       $db= Database::connect();
       var_dump($_POST);
       if (!empty($_POST)) {
        $nomVille          =strip_tags($_POST['nomlieu']);
        $descriptionVille  =strip_tags($_POST['descriptionlieu']);
        $image            =strip_tags($_FILES["image"]["name"]);
        $imagePath        = '../image/lieu/pays/'. basename($image);
        $imageExtension   = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess        = true;
        $isUploadSuccess  = false;
  
        if (empty($nomVille)) {
                $_SESSION['errorVille'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['VilleInvalid']="";
            }   
        if (empty($descriptionVille)) {
                $_SESSION['errordescVille'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['descVilleInvalid']="";
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
                   $newVille = [
                    'nomVille'             =>$nomVille,
                    'descriptionVille'     =>$descriptionVille,
                    'lat'                  =>$_POST['latlieu'],
                    'lng'                  =>$_POST['longlieu'],
                    'pays'                 =>$_POST['pays'],
                    'imageVille'           =>$image,
                    'dernieremodif'        => date("Y-m-d H:i:s"),
                    'id'                   => $_GET['id']
                ];
                $updateVille = "UPDATE  ville  SET    nomVille=:nomVille, lng=:lng, lat=:lat, descriptionVille=:descriptionVille, imageville=:imageVille, idPays=:pays, dernieremodif=:dernieremodif  WHERE idVille=:id";
               $resultat = $db->prepare($updateVille)->execute($newVille); 
               
                echo'<hr> resultat d?insertion';
                var_dump($resultat );
            }
            else
            {
                $newVille = [
                    'nomVille'              =>$nomVille,
                    'descriptionVille'      =>$descriptionVille,
                    'lat'                  =>$_POST['latlieu'],
                    'lng'                  =>$_POST['longlieu'],
                    'pays'                 =>$_POST['pays'],
                    'dernieremodif'        => date("Y-m-d H:i:s"),
                    'id'                   => $_GET['id']
                ];
                $updateVille = "UPDATE  pays  SET    nomVille=:nomVille, lng=:lng, lat=:lat, descriptionVille=:descriptionVille,idPays=:pays, dernieremodif=:dernieremodif   WHERE idVille=:id";
               $resultat = $db->prepare($updateVille)->execute($newVille);
            }
            $newActivite = [
                ':activite'     => 'Modification Ville',
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
               //($resultat) ? header ("location:../list-Ville.php") : header ("location:../ajout-Ville.php?operation=echec") ;
            }
    
               
            }

            //header ("location:../ajout-ville.php");
        }
?>