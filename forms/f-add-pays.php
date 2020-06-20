<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center"> 
                            <?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'Modification pays';
                                    if(!empty($_GET['id'])) 
                                    {
                                        $id = strip_tags($_GET['id']);
                                         
                                    }    
                                    $db= Database::connect();
                                    $recupUnique = $db->query("SELECT * FROM pays WHERE idPays= $id");
                                    $pays = $recupUnique->fetch();
                                    Database::deconnect();
                                } else {
                                    echo 'Enregistrement pays';
                                }
                                
                            ?>
                    </h3>
                </div>
            </header>
           <section class="row bg-dger-white bd-dger-white">
               <div class="monformulaire container-fluid">
                <form action="<?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'traitement/update-pays.php?id='.$id ;
                                } else {
                                    echo 'traitement/add-pays.php ';
                                }
                                
                            ?>" method="post" enctype="multipart/form-data" >
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="nomlieu">Nom du Pays</label>
                            <input type="text" name="nomlieu" id="" class="form-control" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$pays['nomPays'].'"';
                                } ?> required>
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="long">Longitude</label>
                            <input type="number" name="lng" id="" class="form-control" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$pays['lng'].'"';
                                } ?> required> 
                        </div>
                        <div class="form-group col-md">
                            <label for="lat">Latitude</label>
                            <input type="number" name="lat" id="" class="form-control" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$pays['lat'].'"';
                                } ?> required>
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="descriptionlieu">Description</label>
                            <textarea class="form-control" name="descriptionlieu" id="" rows="3" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$pays['descriptionPays'].'"';
                                } ?> required></textarea>
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col">
                        <?php 
                                    if (@$_GET['operation'] == 'modification') 
                                    {
                                        echo'<label for="image">Nom Image:</label>
                                        <p>'.$pays['imagePays'].'</p>
                                        <div classe="form-group">
                                        <label for="image">Sélectionner une nouvelle image:</label>
                                        <input type="file" id="image" name="image"> </div>';
                                    }
                                    else{
                                        echo'<div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" required>
                                        <label class="custom-file-label" for="image">Choisir un fichier</label>
                                        <div class="invalid-feedback"> <?php?></div>
                                        <span class="help-inline"><?php echo $imageError;?></span>
                                        </div>';
                                    }
                                    ?>
                          </div>
                    </section>
                    <section class="row form-group">
                        <section class="col-md-8"></section>
                        <section class="col-md-2">
                            <button type="reset" class="btn btn-danger col-md"> Annuler</button>
                        </section>
                        <section class="col-md-2">
                            <button type="submit" class="btn btn-outline-secondary col-md"><?php if (isset($_GET['operation'])) {
                                    echo 'Modifier';
                                    
                                } else {
                                    echo 'Ajouter';
                                }?></button>
                        </section>
                    </section>
                </form>
               </div>
           </section>
       </div>
</div>
