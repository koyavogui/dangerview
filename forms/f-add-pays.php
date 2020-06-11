<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center"> Ajouter une pays</h3>
                </div>
            </header>
           <section class="row bg-dger-white bd-dger-white">
               <div class="monformulaire container-fluid">
                <form action="traitement/add-pays.php" method="post" enctype="multipart/form-data" >
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="nomlieu">Nom du Pays</label>
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
