<?php 
    switch ($_SESSION['menuAactive']) {
        case 'akwaba':
            $_SESSION['menuActif'] = 'menuactif' ;
            $_SESSION['menuUser'] = '' ;
            $_SESSION['menuLieu'] = '' ;
            $_SESSION['menuDanger'] = '' ;
            break;
        case 'user':
            $_SESSION['menuActif'] = '' ;
            $_SESSION['menuUser'] = 'menuactif' ;
            $_SESSION['menuLieu'] = '' ;
            $_SESSION['menuDanger'] = '' ;
            break;
        case 'danger':
            $_SESSION['menuActif'] = ' ' ;
            $_SESSION['menuUser'] = '' ;
            $_SESSION['menuLieu'] = '' ;
            $_SESSION['menuDanger'] = 'menuactif' ;
            break;
        case 'lieu':
            $_SESSION['menuActif'] = ' ' ;
            $_SESSION['menuUser'] = '' ;
            $_SESSION['menuLieu'] = 'menuactif' ;
            $_SESSION['menuDanger'] = '' ;
            break;
        default:
            # code...
            break;
    }
?>
<div class="container-fluid bg-dger mt-auto dv-border">
    <nav class="navbar text-light container-fluid navbar-expand-md flex-column">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="image/logo.png" alt="logo" style="width:40px;">
            </a>       
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container-fluid " id="collapsibleNavbar">
                <ul class="navbar-nav container-fluid pr-0 ">
                    <li class="nav-item pt-auto">
                        <a class="nav-link <?php echo $_SESSION['menuActif'];?>" href="dashboard.php">Acceuil</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $_SESSION['menuUser'];?>" href="list-utilisateur.php" id="navbardrop" data-toggle="dropdown">
                        Utilisateurs
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ajout-utilisateur.php" id="ajoutUser">Ajouter Utilisateur</a>
                            <a class="dropdown-item" href="list-utilisateur.php">Liste Utilisateurs</a>
                        </div>
                    </li>
                        <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $_SESSION['menuDanger'];?>" href="list-danger.php" id="navbardrop" data-toggle="dropdown">
                        Danger
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ajout-danger.php" id="ajoutDanger">Ajouter un Danger</a>
                            <a class="dropdown-item" href="list-danger.php">Liste Danger</a>
                        </div>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $_SESSION['menuLieu'];?> " href="#" id="navbardrop" data-toggle="dropdown">
                        Options
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ajout-lieu.php" id="ajouterLieu">Ajouter un lieu</a>
                            <a class="dropdown-item" href="#">Liste Lieu</a>
                        </div>
                    </li>
                </ul>
                <!--<a class=" <?php echo $_SESSION[''];?> " href=""> 
                    <p class="text-warning m-0"> <?php
                            echo  $_SESSION['nomUtilisateur'];
                        ?>, Salut ! 
                    </p>
                </a>-->
            </div> 
    </nav>
</div>
