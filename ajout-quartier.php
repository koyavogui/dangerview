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
    <title>                            
        <?php  
            if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                echo ' Tableau de bord - Modification quartier';
                if(!empty($_GET['id'])) 
                {
                    $id = strip_tags($_GET['id']);
                        
                }    
                $db= Database::connect();
                $recupUnique = $db->query("SELECT * FROM quartier WHERE idQuartier= $id");
                $quartier = $recupUnique->fetch();
                Database::deconnect();
            } else {
                echo 'Tableau de bord - Enregistrement quartier';
            }
            
        ?>
    </title>
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
    ?>
    <?php include('forms/f-add-quartier.php'); ?>
    
    <script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    <?php include('links-js.php'); ?>
</body>
</html>