<div class="modal fade" id="ajoutuser" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header bg-warning align-center">
            <header class="modal-title " id="ajoutuserLabel">
                    <h3 class=""  > Enregistrement Utilisateur</h3>
            </header>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="traitement/add-user.php" method="post" class="form">
        <div class="modal-body">
            <div class="monformulaire container-fluid">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-lg-8">
                            <label for="prenom"> Prenom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="sexe"> Genre </label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="Masculin" name="sexe" value="M" checked>
                                <label class="custom-control-label" for="Masculin">Masculin</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="Féminin" name="sexe" value="F">
                                <label class="custom-control-label" for="Féminin">Féminin</label>
                            </div>
                        </div>
                        <div class="form-group col-lg-8">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg">
                            <label for="typeOperateur">Type d'Opérateur</label>
                            <select name="typeOperateur" class="custom-select">
                                <option selected>-- Veiller le derouler --</option>
                                <option value="administrateur">Administrateur</option>
                                <option value="operateur">Opérateur de saisir</option>
                                <option value="superviseur">Superviseur</option>
                            </select>
                        </div>
                        <div class="form-group col-lg">
                            <label for="pays">Pays</label>
                            <select name="pays" class="custom-select">
                                <option selected value="vide">-- Choisir Pays --</option>
                                <?php
                                    $db= Database::connect();
                                    $recupPays = $db->query('SELECT id_paysMultilingue AS id, nom_fr_fr AS nomPays FROM paysmultilangue ORDER BY nom_fr_fr ASC');
                                    while($pays = $recupPays-> fetch())
                                    {
                                        echo'<option value="'. $pays['id'] .'">'. $pays['nomPays'] .'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-lg">
                            <label for="ville">Ville</label>
                            <select name="ville" class="custom-select">
                                <option selected value="vide">-- Choisir Ville --</option>
                                <?php
                                    $recupVille = $db->query('SELECT id_ville AS id, nomVille FROM ville ORDER BY nomVille ASC');
                                    while($ville = $recupVille-> fetch())
                                    {
                                        echo'<option value="'. $ville['id'] .'">'. $ville['nomVille'] .'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch1" name="aap">
                                <label class="custom-control-label" for="switch1">Ajouter Pays</label>
                            </div>
                        </div>
                        <div class="form-group col-md">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch2" name="aav">
                                <label class="custom-control-label" for="switch2">Ajouter Ville</label>
                            </div>
                        </div>
                        <div class="form-group col-md">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch3" name="aaq">
                                <label class="custom-control-label" for="switch3">Ajouter Quartier</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch4" name="aatd">
                                <label class="custom-control-label" for="switch4">Ajouter Type de Danger</label>
                            </div>
                        </div>
                        <div class="form-group col-md">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch5" name="aacd">
                                <label class="custom-control-label" for="switch5">Ajouter Catégorie de Danger</label>
                            </div>
                        </div> 
                        <div class="form-group col-md"></div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-outline-warning col-md">Ajouter</button>
        </div>
        </form>
    </div>
  </div>
</div>
 
