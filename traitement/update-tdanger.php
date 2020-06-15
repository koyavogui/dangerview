<?php
    session_start();  
 
    require '../bd/connexion-bd.php' ; 
    $db= Database::connect();
    require '../fonction/fonctionverif.php';
    var_dump(@$_POST);
 if (!empty(@$_POST))
        {
                $tdanger   = checkInput($_POST['tdanger']);
                $id = checkInput($_GET['id']);
                $req = $db->prepare('SELECT typeDanger FROM typedanger ');
                $req->execute([$tdanger]);
              
                $typeprepare=$db->prepare("UPDATE typedanger SET typeDanger=? WHERE idTypeDanger=?");
                $insert = $typeprepare->execute([$tdanger, $id ]);
                var_dump($insert);
                if(@$insert)
                {
                    unset($_POST);
                    $newActivite = [
                        ':activite'     => 'Modification de type de danger',
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
        
?>