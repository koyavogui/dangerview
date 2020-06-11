<?php
    session_start();  
 
    require '../bd/connexion-bd.php' ; 
    $db= Database::connect();
    require '../fonction/fonctionverif.php';
    var_dump(@$_POST);
 if (!empty(@$_POST))
        {
                $tdanger   = checkInput($_POST['tdanger']);
                $req = $db->prepare('SELECT typeDanger FROM typedanger WHERE typeDanger = ?');
                $req->execute([$tdanger]);
                echo '<hr> verification';
                $typedanger = $req->fetch();
                $bddanger = $typedanger['typeDanger'];
                var_dump($typedanger);
                echo '<hr> verification';
                var_dump(strcasecmp($bddanger,$tdanger) == 0);
        if (strcasecmp($typedanger['typeDanger'],$tdanger) == 0){
                $_SESSION['echec']= 'is-invalid';
                $_SESSION['infoechec'] ='cette valeur existe dejà, consulter la liste des Type';
                header ("location:../ajout-tdanger.php");  
            }else
            {
                $typeprepare=$db->prepare("INSERT typedanger(typeDanger) VALUES (?)");
                $insert = $typeprepare->execute([$tdanger]);
                echo '<hr> danger inserer';
                var_dump($insert);
                if(@$insert)
                {
                    unset($_POST);
                    $newActivite = [
                        ':activite'     => 'Ajout de type de danger',
                        ':dateactivite' => date("Y-m-d H:i:s"),
                        ':iduser'       => $_SESSION['idUtilisateur']
                    ];
                    #var_dump($newActivite);
                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                    #var_dump($activite);
                    $rActivite = $db->prepare($activite)->execute($newActivite);
                    $_SESSION['success'] = 'true';
                    $_SESSION['echec']= '';
                    header ("location:../ajout-tdanger.php");  
                }else{
                    @$erreurType ='';
                    $echec ='Ajout non effectué';
                }
            }
        } else
        {
            @$erreurType ='';
        }
?>