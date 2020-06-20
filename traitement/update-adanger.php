<?php
    session_start();  
 
    require '../bd/connexion-bd.php' ; 
    $db= Database::connect();
    require '../fonction/fonctionverif.php';
    var_dump(@$_POST);
 if (!empty(@$_POST))
        {
                $adanger = strip_tags($_POST['adanger']);
                $id = strip_tags($_GET['id']);
                
                $auteurprepare=$db->prepare("UPDATE auteur SET nomAuteur=? WHERE idAuteur=?");
                $insert = $auteurprepare->execute([$adanger, $id ]);
                var_dump($insert);
                if(@$insert)
                {
                    unset($_POST);
                    $newActivite = [
                        ':activite'     => 'Modification de Acteur danger',
                        ':dateactivite' => date("Y-m-d H:i:s"),
                        ':iduser'       => $_SESSION['idUtilisateur']
                    ];
                    #var_dump($newActivite);
                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                    #var_dump($activite);
                    $rActivite = $db->prepare($activite)->execute($newActivite);
                    $_SESSION['alerte'] = 'La mise à jour a réussi';
                    header ("location:../ajout-adanger.php");  
                }else{
                    $_SESSION['alerte']= 'La mise à jour a echoué';
                }
            }
        
?>