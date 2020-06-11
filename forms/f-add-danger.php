<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center"> Enregistrement - Danger</h3>
                </div>
            </header>
            <section class="row bg-dger-white bd-dger-white">
                <div class="monformulaire container-fluid">
                <form action="traitement/add-danger.php" method="POST" enctype="multipart/form-data" class="container-fluid">
                        <div class="row">
                            <section class="col-lg-4">
                            <div class="form-group">
                                <label for="tDanger">Type de Danger  <a href=""><i class="fa fa-plus-square dv-icon" aria-hidden="true" style="color:green;"> </i></a></label>
                                <select name="tDanger" class="custom-select">
                                    <option value="" selected>-- Type de Danger --</option>
                                    <?php
                                        $recuptdanger = $db->query("SELECT * FROM typedanger ORDER BY typeDanger ASC");
                                        while ($tdanger = $recuptdanger->fetch()) 
                                        {
                                            echo '<option value="'. $tdanger['typeDanger'] .'">'.$tdanger['typeDanger'] .'<option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="cDanger">Catégorie de Danger <a href=""><i class="fa fa-plus-square dv-icon" aria-hidden="true" style="color:green;"> </i></a></label>
                                <select name="cDanger" class="custom-select">
                                    <option value="" selected>-- Catégorie de Danger --</option>
                                    <?php
                                        $recupcdanger = $db->query("SELECT * FROM categoriedanger ORDER BY nomCategorieDanger ASC");
                                        while ($cdanger = $recupcdanger->fetch()) 
                                        {
                                            echo '<option value="'. $cdanger['nomCategorieDanger'] .'">'.$cdanger['nomCategorieDanger'] .'<option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bDanger">Bourreau du danger</label>
                                <select name="bDanger" class="custom-select">
                                    <option value="">-- Bourreau de Danger --</option>
                                    <option value="Enfant">Enfant</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Fille">Fille</option>
                                    <option value="Fillette">Fillette</option>
                                    <option value="Garçon">Garçon</option>
                                    <option value="Groupe de personne">Groupe de personne</option>
                                    <option value="Homme">Homme</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Victime du danger</label>
                                <select name="vDanger" class="custom-select">
                                    <option >-- Victime de Danger --</option>
                                    <option value="Enfant">Enfant</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Fille">Fille</option>
                                    <option value="Fillette">Fillette</option>
                                    <option value="Garçon">Garçon</option>
                                    <option value="Groupe de personne">Groupe de personne</option>
                                    <option value="Homme">Homme</option>
                                </select>
                            </div>
                            </section>
                            <section class="col-lg-4">
                            <div class="form-group">
                                <label for="descDanger">Description</label>
                                <textarea class="form-control" name="descDanger" id="" rows=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="nomSource">Source</label>
                                <input type="text" name="nomSource" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="dateDanger">Date du danger</label>
                                <input type="date" name="dateDanger" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="pays">Pays <a href=""><i class="fa fa-plus-square dv-icon" aria-hidden="true" style="color:green;"> </i></a></label>
                                <select name="pays" class="custom-select">
                                    <option>-- Pays --</option>
                                    <?php
                                        $recuppays = $db->query("SELECT * FROM pays ORDER BY nomPays ASC")->fetchAll();
                                        foreach ($recuppays as $pays)
                                        {
                                            echo '<option value="'.$pays['nomPays'] .'">'.$pays['nomPays'] .'<option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            </section>
                            <section class="col-lg-4">
                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <select name="ville" class="custom-select">
                                    <option>-- Choisir Ville --</option>
                                    <?php
                                        $recupville = $db->query("SELECT * FROM ville ORDER BY nomVille ASC")->fetchAll();
                                        foreach ($recupville as $ville)
                                        {
                                            echo '<option value="'.$ville['nomVille'] .'">'.$ville['nomVille'] .'<option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="quartier">Quartier</label>
                                <select name="quartier" class="custom-select">
                                    <option>-- Choisir Quartier --</option>
                                    <?php
                                        $recupquartier = $db->query("SELECT * FROM quartier ORDER BY nomQuartier ASC")->fetchAll();
                                        foreach ($recupquartier as $quartier)
                                        {
                                            echo '<option value="'.$quartier['nomQuartier'] .'">'.$quartier['nomQuartier'] .'<option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lieu">Zone</label>
                                <input type="text" name="lieu" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choisir un fichier</label>
                                        <div class="invalid-feedback"> <?php echo @$_SESSION["imageInvalid"]; ?></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <button type="reset" class="btn btn-danger col-md">Annuler</button>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-warning col-md">Valider</button>
                        </div>
                        <div class="col-lg-3"></div>
                        </div>
                </form>
                </div>
            </section>
        </div>
     
</div>
            