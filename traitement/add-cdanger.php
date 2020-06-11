<?php
    session_start();  
 
    require '../bd/connexion-bd.php' ; 
    $db= Database::connect();
    require '../fonction/fonctionverif.php';
    var_dump(@$_POST);
 if (!empty(@$_POST))
        {
                $cdanger   = checkInput($_POST['cdanger']);
                $req = $db->prepare('SELECT nomCategorieDanger FROM categoriedanger WHERE nomCategorieDanger = ? LIMIT 1');
                $req->execute([$cdanger]);
                echo '<hr> verification';
                $catdanger = $req->fetch();
                $bddanger = $catdanger['nomCategorieDanger'];
                var_dump($catdanger);
                echo '<hr> verification';
                var_dump(strcasecmp($bddanger,$catdanger) == 0);
        if ($catdanger &&  (strcasecmp($catdanger['nomCategorieDanger'],$cdanger) == 0)){
                $_SESSION['echec']= 'is-invalid';
                $_SESSION['infoechec'] ='cette valeur existe dejà, consulter la liste des catégories';
                header ("location:../ajout-cdanger.php");  
            }else
            {
                echo '<hr> chui rentrer ici belelou';
                $catprepare=$db->prepare("INSERT categoriedanger(nomCategorieDanger,nomTypeDanger) VALUES (?,?)");
                $insert = $catprepare->execute([$cdanger,$_POST['tdanger']]);
                echo '<hr> danger inserer';
                var_dump($insert);
                if(@$insert)
                {
                    unset($_POST);
                    $newActivite = [
                        ':activite'     => 'Ajout de categorie de danger',
                        ':dateactivite' => date("Y-m-d H:i:s"),
                        ':iduser'       => $_SESSION['idUtilisateur']
                    ];
                    #var_dump($newActivite);
                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                    #var_dump($activite);
                    $rActivite = $db->prepare($activite)->execute($newActivite);
                    $_SESSION['success'] = 'true';
                    $_SESSION['echec']= '';
                    header ("location:../ajout-cdanger.php");  
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