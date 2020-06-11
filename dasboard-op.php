<?php session_start(); require 'bd/connexion-bd.php' ; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style-admin.css">
    <?php require('links.php'); ?>
    <title>Tableau de bord - Operateur <?php $_SESSION['menuAactive'] = "akwaba"; ?> </title>
</head>
<body class="">
    <?php include('menu-operateur.php'); ?>
    <?php include('main.php'); ?>
    <?php include('links-js.php'); ?>
</body>
</html>