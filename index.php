<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Connexion - Dashboard</title>
    <?php require('links.php'); session_destroy();?>
    
</head>
<body>
    <section class="container-sm ">
        <h1></h1>
        <div class="row">
            <aside class="col-sm section-left"></aside>
            <section class="col-sm   monformulaire">
                <form action="traitement/verification-admin.php" method="post" class="row-form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control form-control-dangerview" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de Passe</label>
                        <input type="password"  class="form-control form-control-dangerview password-control" name="mpd" id="mpd" placeholder="">
                    </div>
                    <div class="form-group">
                    <?php 
                        #Permettre d'afficher le message d'erreur de login
                        if (!empty($_SESSION)) {
                            if ($_SESSION['echecConnection'] !="") {
                                echo '<em class="text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i>'. $_SESSION['echecConnection'] .'</em>';
                                $_SESSION['echecConnection'] ="";
                            }
                        }            
                        else{
                            /*echo '<h2> session vide</h2>';
                            var_dump($_SESSION);*/
                        }
                    ?>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary">Se Connecter</button>   
                    </div>
                </form>
            </section>
            <aside class="col-sm section-right"></aside>
        </div>
    </section>
    <?php include('links-js.php'); ?>
</body>
</html>