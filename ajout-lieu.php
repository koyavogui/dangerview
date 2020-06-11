<?php 
    session_start();  
    $_SESSION['menuAactive'] = "lieu"; 
    require 'bd/connexion-bd.php' ; 
    $db = Database::connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-admin.css">
    <?php require('links.php'); ?>
    <title> Tableau de bord - Ajout Danger </title>
</head>
<body class="corp">
    <?php include('menu.php'); ?>
    <?php include('forms/f-add-lieu.php'); ?>
    
    <script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <?php include('links-js.php'); ?>
</body>
</html>