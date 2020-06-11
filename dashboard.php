<?php session_start(); require 'bd/connexion-bd.php' ; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style-admin.css">
    <?php require('links.php'); ?>
    <title>Tableau de bord - Administrateur <?php $_SESSION['menuAactive'] = "akwaba"; ?> </title>
</head>
<body class="">
    <?php include('menu.php'); ?>
    <?php include('table/danger.php')?>
    <?php include('links-js.php'); ?>
</body>
</html>