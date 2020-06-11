<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styleEssai.css">
    <link rel="stylesheet" href="style/style-admin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="container-fluid corp">
      <div class="row container-menu">
        <aside class="col-sm-3 col-md-2 col-lg-2 ">
            <nav class="nav flex-column bg-dger  navbar-expand-md  mt-auto menuVertical border">
                  
                <a class="nav-link <?php echo $_SESSION['menuActif'];?> mt-5" href="dashboard.php">Acceuil</a>
                <a class="nav-link active" href="#">Active</a>
                <li class="nav-item dropdown dropright">
                    <a class="nav-link dropdown-toggle <?php echo $_SESSION['menuUser'];?>" href="list-utilisateur.php" id="navbardrop" data-toggle="dropdown">
                    Utilisateurs
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="ajout-utilisateur.php" id="ajoutUser">Ajouter Utilisateur</a>
                        <a class="dropdown-item" href="list-utilisateur.php">Liste Utilisateurs</a>
                    </div>
                </li>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
            </nav>
        </aside>
        <section class="col-sm-9 col-md-10 col-lg-10 p-0  bg-dger-white">
        <div class="container-fluid">
                <header class="row bg-warning">
                    <h1 class="text-center"> Enregistrement Utilisateur</h1>
                </header>
                <section class="border mt-5">
                    <div class="monformulaire container-fluid">
                        <form action="traitement/add-user.php" method="post" enctype="multipart/form-data" class="form" >
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="nom">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control <?php echo $_SESSION['errorNom'] ?>" placeholder="">
                                    <?php echo'<div class="invalid-feedback">'.  @$_SESSION["nomInvalid"]. '</div>';  ?>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="prenom"> Prenom</label>
                                    <input type="text" name="prenom" id="" class="form-control <?php echo $_SESSION['errorPrenom'] ?>" placeholder="">
                                    <?php echo  @$_SESSION['prenomInvalid'] ;  ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="sexe">Genre</label>
                                    <br>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio" name="sexe" value="M">
                                        <label class="custom-control-label" for="customRadio">Masculin</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="sexe" value="F">
                                        <label class="custom-control-label" for="customRadio2">Féminin</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="" class="form-control <?php echo $_SESSION['verifMail'] ?>" placeholder="">
                                    <?php echo  @$_SESSION['mailInvalid'] ; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for=""></label>
                                    <select class="custom-select" name="" id="">
                                        <option selected>Select one</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""></label>
                                    <select class="custom-select" name="" id="">
                                        <option selected>Select one</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for=""></label>
                                    <select class="custom-select" name="" id="">
                                        <option selected>Select one</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md">
                                     <div class="form-check">
                                       <label class="form-check-label">
                                         <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                            Autorisation d'ajouter Pays
                                       </label>
                                     </div>
                                 </div>
                                 <div class="form-group col-md">
                                     <div class="form-check">
                                       <label class="form-check-label">
                                         <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                            Autorisation d'ajouter Ville
                                       </label>
                                     </div>
                                 </div>
                                 <div class="form-group col-md">
                                     <div class="form-check">
                                       <label class="form-check-label">
                                         <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                            Autorisation d'ajouter Quartier
                                       </label>
                                     </div>
                                 </div>
                                 </div>
                            </div>
                        </form>
                    </div>
                </section>
        </div>
        </section>
      </div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>