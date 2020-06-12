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
<?php 
        switch ($_SESSION['typeUtilisateur']) {
            case 'Administrateur':
                echo'<body class="corp">';
                include('menu.php');
                break;
            case 'Operateur':
                echo'<body class="corp-op">';
                include('menu-operateur.php');
                break;
        }
      include('table/danger.php')?>
        <!-- Modal -->
    
</div>
    <?php include('links-js.php'); ?>
</body>
</html>