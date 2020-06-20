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
    <?php 
        switch ($_SESSION['typeUtilisateur']) {
            case 'Administrateur':
                echo'<body class="">';
                include('menu.php');
                break;
            case 'Operateur':
                echo'<body class="corp-op">';
                include('menu-operateur.php');
                break;
                default:
                echo'<body class="">';
            include('menu.php');
                break;
        }
    ?>
    <?php include('main-lieu.php'); ?>
    <?php include('links-js.php'); ?>
  
</body>
</html>