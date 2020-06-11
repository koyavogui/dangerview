<?php 
    session_start();  
    $_SESSION['menuAactive'] = "danger"; 
    require 'bd/connexion-bd.php' ; 
    $db=Database::connect();
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
    <?php include('forms/f-add-danger.php'); ?>
    
    <?php include('links-js.php'); ?>
    <script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>
</html>