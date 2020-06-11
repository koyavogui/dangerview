<?php 
    session_start(); 
    require 'bd/connexion-bd.php';
    $_SESSION['menuAactive'] = "danger";
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
    <?php include('table/danger.php')?>
        <!-- Modal -->
    
</div>
    <?php include('links-js.php'); ?>
</body>
</html>