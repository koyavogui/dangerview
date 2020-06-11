<?php 
    session_start();  
    $_SESSION['menuAactive'] = "danger"; 
    require 'bd/connexion-bd.php' ; 
    require 'fonction/fonctionverif.php';
    $db= Database::connect();
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style-admin.css">
    <?php require('links.php'); ?>
    <title> Tableau de bord - Ajout Danger </title>
</head>
<body class="corp">
    <?php include('menu.php'); ?>
    <?php
        if ( @$_SESSION['success']) {
             echo '<section class="container-fluid">
             <div class="alert block-forms alert-dismissible fade show bg-dger-white ml-auto mr-auto alert-success"   style="width:90vw;" role="alert">
                 <h4 class="alert-heading">Type de Danger ajouter avec succès</h4>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
         </section>';
         $_SESSION['success'] = '';
        }
    ?>
    <?php include('forms/f-type-danger.php'); ?>
    
    <?php include('links-js.php'); ?>
    <script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>
</html>