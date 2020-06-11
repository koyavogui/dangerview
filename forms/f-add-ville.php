<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center"> Ajouter une ville</h3>
                </div>
            </header>
           <section class="row bg-dger-white bd-dger-white">
               <div class="monformulaire container-fluid">
                   <p>Veuillez fournir quelques informations sur ce lieu. Ce lieu sera visible publiquement.</p>
                <form action="traitement/add-ville.php" method="post" enctype="multipart/form-data" >
                    <section class="row">
                        <section class="col-md-3">
                            <p>veuillez indiquer le lieu principal.</p>
                        </section>
                        <section class="col-md-9 row">
                            <div class="form-group col-md">
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
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="nomlieu">Nom de la ville</label>
                            <input type="text" name="nomlieu" id="" class="form-control" placeholder="">
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="descriptionlieu">Description</label>
                            <textarea class="form-control" name="descriptionlieu" id="" rows="3"></textarea>
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choisir un fichier</label>
                                    <div class="invalid-feedback"> <?php echo @$_SESSION["imageInvalid"]; ?></div>
                                </div>
                          </div>
                    </section>
                    <section class="row">
                        <section class="col-md-8"></section>
                        <section class="col-md-2">
                            <button type="reset" class="btn btn-danger col-md"> Annuler</button>
                        </section>
                        <section class="col-md-2">
                            <button type="submit" class="btn btn-outline-secondary col-md">Valider</button>
                        </section>
                    </section>
                </form>
               </div>
           </section>
       </div>
</div>
