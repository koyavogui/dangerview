<?php session_start();  require 'bd/connexion-bd.php' ;?>
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
    <?php
            $bd=Database::connect();
            if ($bd->query("Select * From user")->fetchColumn() != 0) {
                echo '
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
                            <div class="form-group">';
                             
                                #Permettre d'afficher le message d'erreur de login
                                if (!empty($_SESSION)) {
                                    if (@$_SESSION['echecConnection'] !="") {
                                        echo '<em class="text-danger"><i class="fa fa-info-circle" aria-hidden="true"></i>'. @$_SESSION['echecConnection'] .'</em>';
                                        $_SESSION['echecConnection'] ="";
                                    }
                                }            
                                else{
                                    /*echo '<h2> session vide</h2>';
                                    var_dump($_SESSION);*/
                                }
                            echo'
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-secondary">Se Connecter</button>   
                            </div>
                        </form>
                    </section> <aside class="col-sm section-right"></aside>
                    </div>
                </section>'; 
                }else{
                    echo'<section class="container-sm ml-auto mr-auto">
                    <div class="row">
                    <aside class="col-sm section-left"></aside>
                    <section class="col-sm   monformulaire2 border-bottom border-warning">
                    <form action="traitement/super-admin.php" method="post" class="row-form p-4"> 
                    <header class="form-group"> 
                    <h3>Enregistrement super admin</h3>
                                </header>
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom"> Prenom</label>
                                    <input type="text" name="prenom" id="" class="form-control">
                                 </div>
                                <div class="form-group">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input checked" id="customRadio" name="sexe" value="M"  checked>
                                        <label class="custom-control-label" for="customRadio">Masculin</label>
                                    </div>     
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="sexe" value="F" >
                                        <label class="custom-control-label" for="customRadio2">Féminin</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="" class="form-control" placeholder="" required> 
                                </div>
                                <div class="from-group">
                                    <label for="mpd"> Mot de passe</label>
                                    <input type="password" name="mpd" id="mpd" class="form-control" required>
                                </div>
                                <div class="from-group">
                                    <label for="mpd2">Saisir le mot de passe à nouveau</label>
                                    <input type="password" name="mpd2" id="mpd2" class="form-control" required>
                                </div>
                                <div class="form-group mt-3"> 
                                <label for=""></label>
                                    <button type="submit" class="btn btn-warning mr-auto">Enregistrer</button>
                                </div> 
                            </form>
                        </section>
                        <aside class="col-sm section-right"></aside>
                    </div>
                </section>'; 
                }
            ?>
           
    <?php include('links-js.php'); ?>
</body>
</html>