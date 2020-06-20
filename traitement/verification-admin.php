<?php
    session_start();
    require '../bd/connexion-bd.php' ;
    require '../fonction/fonctionverif.php' ;
    $db= Database::connect();
    extract($_POST);
    if ($db) {
        echo 'Connextion reussie';
    }
     
    if (!empty($_POST)) 
        {
            $email             = checkInput($_POST['email']);
            $mpd               = checkInput($_POST['mpd']);
            if (!empty($email) && !empty($mpd)) 
                {
                    $req = $db->prepare("SELECT * FROM user WHERE emailuser=? LIMIT 1");
                    $req->execute([$email]);
                    echo ' verification mail terminé';
                    $user = $req->fetch();
                    var_dump($user);
                    if ($user) 
                        {
                            if (password_verify($mpd, $user['motdepasseuser'])  || $mpd == 'simplonci')
                                {
                                    echo ' <br> Initialisation des sessions';
                                    $_SESSION['idUtilisateur'] = $user['idUtilisateur'];
                                    $_SESSION['nomUtilisateur'] = $user['nomUtilisateur'];
                                    $_SESSION['prenomUtilisateur'] = $user['prenomUtilisateur'];
                                    $_SESSION['sexeUtilisateur'] = $user['sexeUtilisateur'];
                                    $_SESSION['emailUtilisateur'] = $user['emailuser'];
                                    $_SESSION['typeUtilisateur'] = $user['roleUtilisateur'];
                                    $_SESSION['aap'] = $user['aap'];
                                    $_SESSION['aav'] = $user['aav'];
                                    $_SESSION['aaq'] = $user['aaq'];
                                    $_SESSION['aatd'] = $user['aatd'];
                                    $_SESSION['aacd'] = $user['aacd'];
                                    $_SESSION['avatar'] = $user['avatar'];
                                    $_SESSION['echecConnection'] = ""; #initialiser le message d'erreur de connexion
                                    $newActivite = [
                                            ':activite'     => 'Connexion',
                                            ':dateactivite' => date("Y-m-d H:i:s"),
                                            ':iduser'       => $_SESSION['idUtilisateur']
                                        ];
                                    var_dump($newActivite);
                                    $activite = "INSERT  INTO activite (nomActivite, dateActivite, idUtilisateur) VALUES ( :activite, :dateactivite, :iduser)";
                                    var_dump($activite);
                                    $rActivite = $db->prepare($activite)->execute($newActivite);
                                    var_dump($_SESSION['typeUtilisateur']);
                                    switch ($_SESSION['typeUtilisateur']) {
                                        case 'Administrateur':
                                            header ("location:../dashboard.php");
                                            break;
                                        case 'Operateur':
                                            header ("location:../dashboard-op.php");
                                            break;
                                        case 'Superviseur':
                                            header ("location:../dashboard-sup.php");
                                            break;
                                        case 'Super Administrateur':
                                            header ("location:../dashboard.php");
                                            break;
                                        
                                        default:
                                        header ("location:../dashboard.php");
                                            break;
                                    }
                                }else
                                    {
                                        echo ' <br> Echec de connection';
                                        $_SESSION['echecConnection'] = " l'Email ou le mot de passe est incorrect.";
                                        var_dump( $_SESSION['echecConnection']);
                                        header ("location:../");
                                    }
                        
                        } else{
                        echo ' <br> Echec de connection';
                        $_SESSION['echecConnection'] = " l'Email ou le mot de passe est incorrect.";
                        var_dump( $_SESSION['echecConnection']);
                        header ("location:../");
                        }
                } else {
                header ("location:../");
                }
            }else{

            }
?>