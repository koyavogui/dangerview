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
     
        if (!empty($_SESSION['default'])) {
             echo '<section class="container-fluid">
             <div class="alert block-forms alert-dismissible fade show bg-dger-white ml-auto mr-auto"   style="width:90vw;" role="alert">
                 <p class="display-3">' .  @$_SESSION['default'] . '</p>
                  
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <a href="list-danger.php"><span aria-hidden="true">&times;</span></a>
                 </button>
             </div>
         </section>';
         $_SESSION['default'] = "";
        }
    ?>
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