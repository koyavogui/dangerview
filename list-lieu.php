<?php session_start(); require 'bd/connexion-bd.php' ; 
    $_SESSION['menuAactive'] = "lieu"; 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style-admin.css">
    <?php require('links.php'); ?>
    <title>Tableau de bord - Liste Lieud</title>
</head>
<body class="corp">
    <?php include('menu.php'); ?>
    <?php include('main-lieu.php'); ?>
    <?php include('links-js.php'); ?>
  
</body>
</html>