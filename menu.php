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
            $_SESSION['menuActif'] = ' ' ;
            $_SESSION['menuUser'] = '' ;
            $_SESSION['menuLieu'] = '' ;
            $_SESSION['menuDanger'] = '' ;
            break;
    }
?>
<div class="container-fluid bg-dger mt-auto">
 
    <nav class="navbar text-light navbar-expand-md pb-0 pt-0 nav-justified">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="image/logo-vertical.png" alt="logo" style="width:300px;">
            </a>       
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav  container-fluid">
                    <?php
                    switch ($_SESSION['typeUtilisateur']) {
                        case 'Administrateur':
                            echo '<li class="nav-item pt-auto menuPrincipal">
                                <a class="nav-link'.$_SESSION['menuActif'].'" href="dashboard.php">Acceuil</a>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown menuPrincipal">
                                <a class="nav-link dropdown-toggle'. $_SESSION['menuUser'].'" href="list-utilisateur.php" id="navbardrop" data-toggle="dropdown">
                                Utilisateurs
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="ajout-utilisateur.php" id="ajoutUser">Ajouter Utilisateur</a>
                                    <a class="dropdown-item" href="list-utilisateur.php">Liste Utilisateurs</a>
                                </div>
                            </li>';
                            break;
                        case 'Operateur':
                            echo '<li class="nav-item dropdown menuPrincipal">
                            <a class="nav-link dropdown-toggle '.$_SESSION['menuDanger'].'" href="list-danger.php" id="navbardrop" data-toggle="dropdown">
                            Danger
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="ajout-tdanger.php" id="ajoutTDanger">Ajouter un type de danger</a>
                                <a class="dropdown-item" href="ajout-cdanger.php" id="ajoutCDanger">Ajouter une categorie de danger</a>
                                <a class="dropdown-item" href="ajout-adanger.php" id="ajoutADanger">Ajouter un Acteur</a>
                                <a class="dropdown-item" href="ajout-danger.php" id="ajoutDanger">Ajouter un danger</a>
                                <a class="dropdown-item" href="list-danger.php">Liste Danger</a>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown menuPrincipal">
                            <a class="nav-link dropdown-toggle '.$_SESSION['menuLieu'].' " href="#" id="navbardrop" data-toggle="dropdown">
                            Lieu
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="ajout-pays.php" id="ajouterLieu">Ajouter un pays</a>
                                <a class="dropdown-item" href="ajout-ville.php" id="ajouterLieu">Ajouter une ville</a>
                                <a class="dropdown-item" href="ajout-quartier.php" id="ajouterLieu">Ajouter un quartier</a>
                                <a class="dropdown-item" href="ajout-lieu.php" id="ajouterLieu">Ajouter une zone</a>
                                <a class="dropdown-item" href="list-lieu.php">Liste Lieu</a>
                            </div>
                        </li>
                         ';
                            break;
                        case 'Superviseur':
                            # code...
                            break;
                        default:
                        echo '<li class="nav-item pt-auto menuPrincipal">
                                <a class="nav-link'.$_SESSION['menuActif'].'" href="dashboard.php">Acceuil</a>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown menuPrincipal">
                                <a class="nav-link dropdown-toggle'. $_SESSION['menuUser'].'" href="list-utilisateur.php" id="navbardrop" data-toggle="dropdown">
                                Utilisateurs
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="ajout-utilisateur.php" id="ajoutUser">Ajouter Utilisateur</a>
                                    <a class="dropdown-item" href="list-utilisateur.php">Liste Utilisateurs</a>
                                </div>
                            </li>';
                        echo '<li class="nav-item dropdown menuPrincipal">
                        <a class="nav-link dropdown-toggle '.$_SESSION['menuDanger'].'" href="list-danger.php" id="navbardrop" data-toggle="dropdown">
                        Danger
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ajout-tdanger.php" id="ajoutTDanger">Ajouter un type de danger</a>
                            <a class="dropdown-item" href="ajout-cdanger.php" id="ajoutCDanger">Ajouter une categorie de danger</a>
                            <a class="dropdown-item" href="ajout-adanger.php" id="ajoutADanger">Ajouter un Acteur</a>
                            <a class="dropdown-item" href="ajout-danger.php" id="ajoutDanger">Ajouter un danger</a>
                            <a class="dropdown-item" href="list-danger.php">Liste Danger</a>
                        </div>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown menuPrincipal">
                        <a class="nav-link dropdown-toggle '.$_SESSION['menuLieu'].' " href="#" id="navbardrop" data-toggle="dropdown">
                        Lieu
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="ajout-pays.php" id="ajouterLieu">Ajouter un pays</a>
                            <a class="dropdown-item" href="ajout-ville.php" id="ajouterLieu">Ajouter une ville</a>
                            <a class="dropdown-item" href="ajout-quartier.php" id="ajouterLieu">Ajouter un quartier</a>
                            <a class="dropdown-item" href="ajout-lieu.php" id="ajouterLieu">Ajouter une zone</a>
                            <a class="dropdown-item" href="list-lieu.php">Liste Lieu</a>
                        </div>
                    </li>';
                break;
            }
            
            ?>
            <li class="nav-item pt-auto dropdown show menuPrincipal">
            <img src="image/avatar/<?php echo $_SESSION['avatar'];?>" class="rounded-circle" alt="" style="width:45px;height:45px;" >
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Salut,  <?php echo $_SESSION['nomUtilisateur'];?> !
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="deconnection.php">Deconnexion</a>
                </div>
            </li>
                        <!-- Dropdown -->
                </ul>
            </div> 
    </nav>
</div>
