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
                    <li class="nav-item pt-auto dropdown show ml-auto">
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
