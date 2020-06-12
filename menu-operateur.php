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
                    <li class="nav-item pt-auto">
                        <a class="nav-link <?php echo $_SESSION['menuActif'];?>" href="dashboard-op.php">Acceuil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $_SESSION['menuDanger'];?>" href="list-danger.php" id="navbardrop" data-toggle="dropdown">
                                Danger
                        </a>
                        <div class="dropdown-menu">
                                <?php
                                if ($_SESSION['aatd'] == "oui") {
                                    echo '<a class="dropdown-item" href="ajout-tdanger.php" id="ajoutDanger">Ajouter un type de danger</a>';
                                } 
                                if ($_SESSION['aacd'] == "oui") {
                                    echo '<a class="dropdown-item" href="ajout-cdanger.php" id="ajoutDanger">Ajouter une categorie de danger</a>';
                                }
                                    ?>
                                    <a class="dropdown-item" href="ajout-danger.php" id="ajoutDanger">Ajouter un danger</a>
                                    <a class="dropdown-item" href="list-danger.php">Liste Danger</a>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo $_SESSION['menuLieu'];?>" href="#" id="navbardrop" data-toggle="dropdown">
                            Lieu
                            </a>
                            <div class="dropdown-menu">
                            <?php
                                if ( ($_SESSION['aap'] == "oui") || ($_SESSION['aav'] == "oui") || ( $_SESSION['aaq']== "oui")) {
                             if ($_SESSION['aap'] == "oui") {
                                echo '<a class="dropdown-item" href="ajout-pays.php" id="ajouterLieu">Ajouter un pays</a>';
                            }
                            if ($_SESSION['aav'] == "oui") {
                                echo '<a class="dropdown-item" href="ajout-ville.php" id="ajouterLieu">Ajouter une ville</a>';
                            }
                            if ($_SESSION['aaq'] == "oui") {
                                echo '<a class="dropdown-item" href="ajout-quartier.php" id="ajouterLieu">Ajouter un quartier</a>';
                            }    
                                }
                                ?>
                                <a class="dropdown-item" href="ajout-lieu.php" id="ajouterLieu">Ajouter une zone</a>
                             </div>
                         </li>
                        <!-- Dropdown -->
                   
                    <!-- Dropdown -->
                    
                    <li class="nav-item pt-auto dropdown show">
                    <img src="image/avatar/<?php echo  $_SESSION['avatar'];?>" class="rounded-circle" alt="" style="width:45px;height:45px;" >
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Salut, <?php echo  $_SESSION['nomUtilisateur'];?> !
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="deconnection.php">Deconnexion</a>
                        </div>
                    </li>
                </ul>
            </div> 
    </nav>
</div>
