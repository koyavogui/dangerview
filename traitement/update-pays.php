<?php
       session_start();
       require '../bd/connexion-bd.php' ;
       $db= Database::connect();
       var_dump($_POST);
       if (!empty($_POST)) {
        $nomlieu          =strip_tags($_POST['nomlieu']);
        $descriptionlieu  =strip_tags($_POST['descriptionlieu']);
        $image            =strip_tags($_FILES["image"]["name"]);
        $imagePath        = '../image/lieu/pays/'. basename($image);
        $imageExtension   = pathinfo($imagePath,PATHINFO_EXTENSION);
        $isSuccess        = true;
        $isUploadSuccess  = false;
  
        if (empty($nomlieu)) {
                $_SESSION['errorlieu'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['lieuInvalid']="";
            }   
        if (empty($descriptionlieu)) {
                $_SESSION['errordesclieu'] ='is-invalid';
                $isSuccess = false;
                $_SESSION['desclieuInvalid']="";
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
            }
            if(file_exists($imagePath)) 
            {
                $imageError = "Le fichier existe deja";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 5000000) 
            {
                echo'<hr>';
                $imageError = "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                {
                    $imageError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }

        var_dump($isSuccess);
        var_dump($isUploadSuccess);
        var_dump($isSuccess && $isImageUpdated && $isUploadSuccess);
        var_dump($isSuccess && !$isImageUpdated);
        if (($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated))
            {
                $db = Database::connect();
            if($isImageUpdated)
            {
                   $newlieu = [
                    'nomLieu'              =>$nomlieu,
                    'descriptionlieu'      =>$descriptionlieu,
                    'lat'                  =>$_POST['lat'],
                    'lng'                  =>$_POST['lng'],
                    'imagelieu'            =>$image,
                    'dernieremodif'        => date("Y-m-d H:i:s"),
                    'id'        => $_GET['id']
                ];
                $updatelieu = "UPDATE  pays  SET    nomPays=:nomLieu, lng=:lng, lat=:lat, descriptionPays=:descriptionlieu, imagePays=:imagelieu , dernieremodif=:dernieremodif WHERE idPays=:id";
               $resultat = $db->prepare($updatelieu)->execute($newlieu);      
            }
            else
            {
                $newlieu = [
                    'nomLieu'              =>$nomlieu,
                    'descriptionlieu'      =>$descriptionlieu,
                    'lat'                  =>$_POST['lat'],
                    'lng'                  =>$_POST['lng'],
                    'dernieremodif'        => date("Y-m-d H:i:s"),
                    'idUtilisateur'        => $_SESSION['idUtilisateur']
                ];
                $updatelieu = "UPDATE  pays  SET    nomPays=:nomLieu, lng=:lng, lat=:lat, descriptionPays=:descriptionlieu, dernieremodif=:dernieremodif , idUtilisateur=:idUtilisateur  WHERE idPays=:idUtilisateur";
               $resultat = $db->prepare($updatelieu)->execute($newlieu);
            }
            $newActivite = [
                ':activite'     => 'Modification Pays',
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
               ($resultat) ? header ("location:../list-lieu.php") : header ("location:../ajout-lieu.php?operation=echec") ;
            }
    
               
            }

            header ("location:../ajout-pays.php");
        }
?>