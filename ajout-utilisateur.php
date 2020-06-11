<?php 
    session_start(); 
    require 'bd/connexion-bd.php';
    $_SESSION['menuAactive'] = "user"; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-admin.css">
    <?php require('links.php'); ?>
    <title> Tableau de bord - Ajout Utilisateur</title>
</head>
<body class="corp">

    <?php include('menu.php'); ?>
    <?php
        if (!empty($_SESSION['default'])) {
             echo '<section class="container-fluid">
             <div class="alert block-forms alert-dismissible fade show bg-dger-white ml-auto mr-auto"   style="width:90vw;" role="alert">
                 <h4 class="alert-heading">Enregistrement utilisateur reussi !</h4>
                 <p class="display-3">' .  @$_SESSION['default'] . '</p>
                 <hr>
                 <p class="mb-0">Veillez noter ce code quelques part c\'est le mot de passe par defaut. Vous pourrez le modifer plutard.</p>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
         </section>';
         $_SESSION['default'] = "";
        }
    ?>
    <?php include('forms/f-add-user.php'); ?>
    
    <?php include('links-js.php'); ?>
    <script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>
</html>