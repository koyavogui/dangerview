<?php 
    session_start(); 
    require 'bd/connexion-bd.php';
   require 'fonction/fonctionverif.php' ;
    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
         
    }    
    $db= Database::connect();
    $recupUnique = $db->query("SELECT * FROM user WHERE idUtilisateur= $id");
    $user = $recupUnique->fetch();
    Database::deconnect();
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <?php require('links.php'); ?>
    <link rel="stylesheet" href="style/style-admin.css">
    <title>Tableau de bord - liste Utilisateur </title>
</head>
<body>
    <?php include('menu.php'); ?>
    <div class="container block-forms">
        <div class="row">
            <section class="col-md">
            <h1><strong>Voir un utilisateur</strong></h1>
                    <br>
                <form>
                    <div class="form-group">
                      <label for="">Nom :</label> <?php echo $user['nomUtilisateur']; ?>
                    </div>
                    <div class="form-group">
                      <label for="">Prénoms :</label>  <?php echo $user['prenomUtilisateur']; ?>
                    </div>
                    <div class="form-group">
                      <label for="">Sexe :</label> <?php if ($user['sexeUtilisateur'] == "M") {
                            echo 'Masculin';
                        }
                        else {
                            echo 'Féminin';
                        } ?>
                    </div>
                    <div class="form-group">
                      <label for="">Email :</label>  <?php echo $user['emailuser']; ?>
                    </div>
                    <div class="form-group">
                      <label for="">Type d'utilisateur :</label> <?php echo $user['roleUtilisateur']; ?>
                    </div>
                    <hr class="bg-warning">
                    <div class="form-group">
                        <h3>Autorisation</h3>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <?php 
                                    if ($user['aap']  == 'oui') {
                                        echo '<i class="fa fa-check-square" aria-hidden="true" style="color:green;"></i> ';
                                    }
                                    else
                                    {
                                        echo '<i class="far fa-square" aria-hidden="true" style="color:green;"> </i>';
                                    }
                                ?>
                                  Autorisation d'Ajout Pays                       
                            </div>
                            <div class="form-group">
                            <?php 
                                    if ($user['aav']  == 'oui') {
                                        echo '<i class="fa fa-check-square" aria-hidden="true" style="color:green;"></i> ';
                                    }
                                    else
                                    {
                                        echo '<i class="far fa-square" aria-hidden="true" style="color:green;"> </i>';
                                    }
                                ?> Autorisation d'Ajout  Ville                 
                            </div>
                            <div class="form-group">
                            <?php 
                                    if ($user['aaq']  == 'oui') {
                                        echo '<i class="fa fa-check-square" aria-hidden="true" style="color:green;"></i> ';
                                    }
                                    else
                                    {
                                        echo '<i class="far fa-square" aria-hidden="true" style="color:green;"> </i>';
                                    }
                                ?>  Autorisation d'Ajout  Quartier                 
                            </div>
                            
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                            <?php 
                                    if ($user['aatd']  == 'oui') {
                                        echo '<i class="fa fa-check-square" aria-hidden="true" style="color:green;"></i> ';
                                    }
                                    else
                                    {
                                        echo '<i class="far fa-square" aria-hidden="true" style="color:green;"> </i>';
                                    }
                                ?> Autorisation d'Ajout  Type de Danger                 
                            </div>
                            <div class="form-group">
                            <?php 
                            
                                    if ($user['aacd'] == 'oui') {
                                        echo '<i class="fa fa-check-square" aria-hidden="true" style="color:green;"></i> ';
                                    }
                                    else
                                    {
                                        echo '<i class="far fa-square" aria-hidden="true" style="color:green;"> </i>';
                                    }
                                ?> Autorisation d'Ajout  Catégorie Danger                
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <div class="form-actions">
                      <a class="btn btn-primary" href="list-utilisateur.php"><i class="fas fa-arrow-left" aria-hidden="true"></i> Retour</a>
                </div>
            </section>
            <section class="col-md">
                <div class=" mb-3"  >
                    <div class=" text-warning">
                    <?php $img = $user['avatar']; ?>
                         <img src="image/avatar/<?php echo $img ;  ?>" alt="avatar de l'utilisateur" class="img-responsive img-thumbnail" w-100>
                         
                    </div>
            </section>
        </div>
    </div>
    <?php include('links-js.php'); ?>
</body>
</html>