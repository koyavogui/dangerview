<?php
       session_start();
       require '../bd/connexion-bd.php' ;
       $db= Database::connect();
       var_dump($_POST);
       if (!empty($_POST)) {
        $nomlieu          =strip_tags($_POST['nomlieu']);
        $categorielieu    =strip_tags($_POST['categorielieu']);
        $longlieu         =strip_tags($_POST['longlieu']);
        $latlieu          =strip_tags($_POST['latlieu']);
        $descriptionlieu  =strip_tags($_POST['descriptionlieu']);
        $image            =strip_tags($_FILES["image"]["name"]);
        $imagePath        = '../image/lieu/'. basename($image);
        $imageExtension   = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess        = true;
        $isUploadSuccess  = false;
  
        if (empty($nomlieu )) {
                $_SESSION['errorQuartier'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['QuartierInvalid']="";
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
        echo'<hr> $isUploadSuccess en dessous<br>';
        var_dump($isUploadSuccess);
        echo'<hr> $isSuccess en dessous<br>';
        var_dump($isSuccess);
        echo'<br><hr> $isSuccess && $isImageUpdated && $isUploadSuccess en dessous<br>';
        var_dump($isSuccess && $isImageUpdated && $isUploadSuccess);
        echo'<br><hr> $isSuccess && !$isImageUpdated en dessous<br>';
        var_dump($isSuccess && !$isImageUpdated);
        if (($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated))
            {
                $db = Database::connect();
            if($isImageUpdated)
            {
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
                    'dernieremodif'        => date("Y-m-d H:i:s"),
                    'id'                   => $_GET['id']
                ];
               $updatetlieu = "UPDATE  lieu SET categorieLieu=:categorieLieu, nomLieu=:nomLieu, lng=:longitude, lat=:latitude, descriptionLieu=:descriptionlieu, imageLieu=:imagelieu, idQuartier=:quartier, idVille=:ville, idPays=:pays, dernieremodif=:dernieremodif WHERE idLieu=:id";
               $resultat = $db->prepare($updatetlieu)->execute($newlieu);
                echo'<hr> resultat d?insertion';
                var_dump($newlieu);
                var_dump($resultat);
            }
            else
            {
                $newlieu = [
                    'categorieLieu'        =>$categorielieu,
                    'nomLieu'              =>$nomlieu,
                    'longitude'            =>$longlieu,
                    'latitude'             =>$latlieu ,
                    'descriptionlieu'      =>$descriptionlieu,
                    'quartier'             =>$_POST['quartier'],
                    'ville'                =>$_POST['ville'],
                    'pays'                 =>$_POST['pays'],
                    'dernieremodif'        => date("Y-m-d H:i:s"),
                    'id'                   => $_GET['id']
                ];
               $updatetlieu = "UPDATE  lieu SET categorieLieu=:categorieLieu, nomLieu=:nomLieu, lng=:longitude, lat=:latitude, descriptionLieu=:descriptionlieu, idQuartier=:quartier, idVille=:ville, idPays=:pays, dernieremodif=:dernieremodif WHERE idLieu=:id";
               $resultat = $db->prepare($updatetlieu)->execute($newlieu);
               var_dump($newlieu);
               var_dump($resultat);
            }
            if ($resultat) {
                    $newActivite = [
                        ':activite'     => 'Modification Zone',
                        ':dateactivite' => date("Y-m-d H:i:s"),
                        ':iduser'       => $_SESSION['idUtilisateur']
                    ];
                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                var_dump($activite);
                $rActivite = $db->prepare($activite)->execute($newActivite);
                var_dump($rActivite);
                $_SESSION['default'] ='';
               ($resultat) ? header ("location:../list-lieu.php") : header ("location:../ajout-Quartier.php?operation=echec") ;
            }
     
            }

            header ("location:../ajout-lieu.php");
        }
?>