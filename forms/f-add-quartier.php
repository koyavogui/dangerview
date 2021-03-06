<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center">
                            <?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'Modification quartier';
                                } else {
                                    echo 'Enregistrement quartier';
                                }
                                
                            ?>
                            </h3>
                </div>
            </header>
           <section class="row bg-dger-white bd-dger-white">
               <div class="monformulaire container-fluid">
                   <p>Veuillez fournir quelques informations sur ce lieu. Ce lieu sera visible publiquement.</p>
                <form action="<?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'traitement/update-quartier.php?id='.$id ;
                                } else {
                                    echo 'traitement/add-quartier.php';
                                }
                                
                            ?>" method="post" enctype="multipart/form-data" >
                    <section class="row">
                        <section class="col-md-3">
                            <p>veuillez indiquer le lieu principal.</p>
                        </section>
                        <section class="col-md-9 row">
                            <div class="form-group col-md">
                                <label for="pays" >Pays  </label>
                                <select name="pays" class="custom-select"  onchange="recupVilleCombo(this.value)" required>
                                    <option value="">-- Pays --</option>
                                    <?php
                                        if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                            $recuppays = $db->query("SELECT * FROM pays ORDER BY nomPays ASC")->fetchAll();
                                            foreach ($recuppays as $pays)
                                            {
                                                if ($pays['idPays'] == $quartier['idPays']) {
                                                    echo '<option value="'.$pays['idPays'] .'" selected>'.$pays['nomPays'] .'</option>';
                                                }else {
                                                    echo '<option value="'.$pays['idPays'] .'">'.$pays['nomPays'] .'</option>';
                                                }
                                            }
                                        } else {
                                            $recuppays = $db->query("SELECT * FROM pays ORDER BY nomPays ASC")->fetchAll();
                                            foreach ($recuppays as $pays)
                                            {
                                                echo '<option value="'.$pays['idPays'] .'">'.$pays['nomPays'] .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md">
                                <label for="ville">Ville</label>
                                <select name="ville" class="custom-select" id="comboville" required>
                                    <option value="">-- Choisir Ville --</option>
                                    <?php
                                        if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                            $recupville = $db->query("SELECT * FROM ville ORDER BY nomVille ASC")->fetchAll();
                                            foreach ($recupville as $ville)
                                            {
                                                if ($ville['idVille'] == $quartier['idVille']) {
                                                    echo '<option value="'.$ville['idVille'] .'" selected>'.$ville['nomVille'] .'</option>';
                                                }else {
                                                    echo '<option value="'.$ville['idVille'] .'">'.$ville['nomVille'] .'</option>';
                                                }
                                            }
                                        } else {
                                            $recupville = $db->query("SELECT * FROM ville ORDER BY nomVille ASC")->fetchAll();
                                            foreach ($recupville as $ville)
                                            {
                                                echo '<option value="'.$ville['idVille'] .'">'.$ville['nomVille'] .'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </section>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="nomlieu">Nom du quartier</label>
                            <input type="text" name="nomlieu" id="" class="form-control" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$quartier['nomQuartier'].'"';
                                } ?>>
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="longlieu">Longitude</label>
                            <input type="text" name="longlieu" id="" class="form-control" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$quartier['lng'].'"';
                                } ?>>
                        </div>
                        <div class="form-group col-md">
                            <label for="latlieu">Latitude</label>
                            <input type="text" name="latlieu" id="" class="form-control" placeholder="" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$quartier['lat'].'"';
                                } ?>>
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                            <label for="descriptionlieu">Description</label>
                            <textarea class="form-control" name="descriptionlieu" id="" rows="3" ><?php  if (@$_GET['operation'] == 'modification') {
                                    echo $quartier['descriptionQuatier'];
                                } ?></textarea>
                        </div>
                    </section>
                    <section class="row">
                        <div class="form-group col-md">
                        <?php if (@$_GET['operation'] == 'modification') 
                                    {
                                        echo'<label for="image">Nom Image:</label>
                                        <p>'.$quartier['imageQuartier'].'</p>
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
                            <button type="submit" class="btn btn-outline-secondary col-md">
                            <?php if (isset($_GET['operation'])) {
                                    echo 'Modifier';
                                    
                                } else {
                                    echo 'Ajouter';
                                }?>
                            </button>
                        </section>
                    </section>
                </form>
               </div>
           </section>
       </div>
</div>
