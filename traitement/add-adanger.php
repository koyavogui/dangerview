<?php
    session_start();  
 
    require '../bd/connexion-bd.php' ; 
    $db= Database::connect();
    require '../fonction/fonctionverif.php';
    var_dump(@$_POST);
 if (!empty(@$_POST))
        {
                $adanger   = strip_tags($_POST['adanger']);
                $req = $db->prepare('SELECT auteur FROM nomAuteur WHERE nomAuteur = ?');
                $nomAuteur = $req->execute([$adanger]);
                $nomAuteur = $req->fetchAll();
                $nombreligne = $req->rowCount(); //verifier si l'on trouve une valeur après la requette
                var_dump($nombreligne);
                
                echo '<hr> verification';
                @$bddanger = @$nomAuteur['nomAuteur'];
                var_dump($nomAuteur);
                echo '<hr> verification';
                var_dump(strcasecmp($bddanger,$adanger) == 0);
        if (strcasecmp(@$nomAuteur['nomAuteur'],$adanger) == 0){
                $_SESSION['echec']= 'is-invalid';
                $_SESSION['infoechec'] ='cette valeur existe dejà, consulter la liste des auteur';
                //header ("location:../ajout-adanger.php");  
            }else
            {
                $newAuteur = [
                    'nomAuteur' => $adanger, 
                    'id'        => $_SESSION['idUtilisateur'],
                    'datemodif' => date("Y-m-d H:i:s")
                ];
                $auteurprepare=$db->prepare("INSERT  INTO auteur(nomAuteur, idUtilisateur, dernieremodification) VALUES (:nomAuteur, :id, :datemodif)");
                $insert = $auteurprepare->execute($newAuteur);
                echo '<hr> danger inserer';
                var_dump($insert);
                if(@$insert)
                {
                    unset($_POST);
                    $newActivite = [
                        ':activite'     => 'Ajout de auteur de danger',
                        ':dateactivite' => date("Y-m-d H:i:s"),
                        ':iduser'       => $_SESSION['idUtilisateur']
                    ];
                    #var_dump($newActivite);
                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                    #var_dump($activite);
                    $rActivite = $db->prepare($activite)->execute($newActivite);
                    $_SESSION['success'] = 'true';
                    $_SESSION['echec']= '';
                    header ("location:../ajout-adanger.php");  
                }else{
                    @$erreurauteur ='';
                    $echec ='Ajout non effectué';
                }
            }
        } else
        {
            @$erreurauteur ='';
        }
?>