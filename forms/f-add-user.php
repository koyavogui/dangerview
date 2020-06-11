        <div class="container-fluid">
            <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
                <header class="row bg-warning">
                    <div class="col-md-10 col-lg-10 l-auto mr-auto">
                        <h1 class="text-center">
                            <?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'Modification utilisateur';
                                    require 'fonction/fonctionverif.php';
                                    if(!empty($_GET['id'])) 
                                    {
                                        $id = checkInput($_GET['id']);
                                         
                                    }    
                                    $db= Database::connect();
                                    $recupUnique = $db->query("SELECT * FROM user WHERE idUtilisateur= $id");
                                    $user = $recupUnique->fetch();
                                    Database::deconnect();
                                } else {
                                    echo 'Enregistrement utilisateur';
                                }
                                
                            ?>
                         </h1>
                    </div>
                </header>
                <section class="row bg-dger-white bd-dger-white">
                    <div class="monformulaire container-fluid">
                        <form action="<?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'traitement/update-user.php?id='.$id ;
                                } else {
                                    echo 'traitement/add-user.php';
                                }
                                
                            ?>" method="POST" enctype="multipart/form-data" class="form" >
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="nom">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control <?php echo $_SESSION['errorNom'] ?>" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$user['nomUtilisateur'].'"';
                                } ?> >
                                    <div class="invalid-feedback"> <?php echo $_SESSION['nomInvalid']; ?></div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="prenom"> Prenom</label>
                                    <input type="text" name="prenom" id="" class="form-control <?php echo $_SESSION['errorPrenom'] ?>" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$user['prenomUtilisateur'].'"';
                                } ?> >
                                    <div class="invalid-feedback"> <?php echo $_SESSION['prenomInvalid']; ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="sexe">Genre</label>
                                    <br>
                                    <?php if (@$user['sexeUtilisateur'] == "M") {
                                        $chekH = 'checked';
                                    }
                                    else {
                                        $chekF = 'checked';
                                    } ?>
                                    <div class="custom-control custom-radio custom-control-inline <?php echo $_SESSION['errorSexe'] ?>">
                                        <input type="radio" class="custom-control-input checked" id="customRadio" name="sexe" value="M" <?php echo @$chekH; ?> checked>
                                        <label class="custom-control-label" for="customRadio">Masculin</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline <?php echo $_SESSION['errorSexe'] ?>">
                                        <input type="radio" class="custom-control-input" id="customRadio2" name="sexe" value="F" <?php echo @$chekF; ?>>
                                        <label class="custom-control-label" for="customRadio2">Féminin</label>
                                    </div>
                                    <div class="invalid-feedback"> <?php echo $_SESSION['sexeInvalid']; ?></div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="" class="form-control <?php echo $_SESSION['verifMail'] ?>" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$user['emailuser'].'"';
                                } ?>>
                                    <div class="invalid-feedback"> <?php echo $_SESSION['mailInvalid']; ?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md">
                                     
                                    <label for="typeOperateur">Type d'Opérateur</label>
                                    <?php
                                    switch (@$user['roleUtilisateur']) {
                                        case 'Administrateur':
                                            @$select = 'selected';
                                            break;
                                        case 'Operateur':
                                            @$select = 'selected';
                                            break;
                                        case 'Superviseur':
                                            @$select = 'selected';
                                            break;
                                        
                                        default:
                                            # code...
                                            break;
                                    }
                                    ?>
                                    <select name="typeOperateur" class="custom-select <?php echo $_SESSION['errorTypeOp'] ?>">
                                        <option value="Administrateur"  <?php echo @$select ?> >Administrateur</option>
                                        <option value="Operateur" <?php echo @$select ?>>Opérateur de saisir</option>
                                        <option value="Superviseur" <?php echo @$select ?> >Superviseur</option>
                                    </select>
                                    <div class="invalid-feedback"> <?php echo @$_SESSION['typeOpInvalid']; ?></div>
                                </div>
                                 
                            </div>
                            <div class="row">
                                <div class="col-md">
                                <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch1" name="AAP">
                                        <label class="custom-control-label" for="switch1">Ajouter Pays</label>
                                    </div>
                                </div>
                                <div class="form-group col-md">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch2" name="AAV">
                                        <label class="custom-control-label" for="switch2">Ajouter Ville</label>
                                    </div>
                                </div>
                                <div class="form-group col-md">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch3" name="AAQ">
                                        <label class="custom-control-label" for="switch3">Ajouter Quartier</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch4" name="AATD">
                                        <label class="custom-control-label" for="switch4">Ajouter Type de Danger</label>
                                    </div>
                                </div>
                                <div class="form-group col-md">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch5" name="AACD">
                                        <label class="custom-control-label" for="switch5">Ajouter Catégorie de Danger</label>
                                    </div>
                                </div> 
                                <div class="form-group col-md">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?php echo @$_SESSION['errorImage'] ?>" id="image" name="image" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$user['avatar'].'"';
                                } ?>>
                                        <label class="custom-file-label" for="image">Choisir un fichier</label>
                                        <div class="invalid-feedback"> <?php echo @$_SESSION["imageInvalid"]; ?></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-md-4 ml-auto"> 
                                    <button type="submit" class="btn btn-warning btn-lg col-md mr-auto text-light"><?php  
                                if (isset($_GET['operation'])) {
                                    echo 'Modifier';
                                    
                                } else {
                                    echo 'Ajouter';
                                }
                                
                            ?></button>
                                </div> 
                            </div>
                            <?php
                                @$_SESSION['errorNom'] = @$_SESSION['errorPrenom'] = @$_SESSION['errorNom'] = @$_SESSION['errorTypeOp'] = @$_SESSION['errorImage'] ='';
                            ?>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        