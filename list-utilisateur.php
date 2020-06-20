<?php 
    session_start(); 
    require 'bd/connexion-bd.php';
    $_SESSION['menuAactive'] = "user";
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
<?php 
        switch (@$_SESSION['typeUtilisateur']) {
            case 'Administrateur':
                 
                include('menu.php');
                break;
            case 'Operateur':
                 
                include('menu-operateur.php');
                break;
            default:
            include('menu.php');
                    break; 
        }
    ?>
    <?php include('table/user.php')?>
        <!-- Modal -->
    
</div>
    <?php include('links-js.php'); ?>
</body>
</html>