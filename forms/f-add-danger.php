<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center"> 
                        <?php  
                            if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                echo 'Modification Danger';
                                require 'fonction/fonctionverif.php';
                                if(!empty($_GET['id'])) 
                                {
                                    $id = checkInput($_GET['id']);
                                        
                                }    
                                $db= Database::connect();
                                $recupUnique = $db->query("SELECT * FROM dangertable WHERE idDanger= $id LIMIT 1");
                                $dangertable = $recupUnique->fetch();
                                Database::deconnect();
                            } else {
                                echo 'Enregistrement danger';
                            }
                            
                        ?>
                    </h3>
                </div>
            </header>
            <section class="row bg-dger-white bd-dger-white">
                <div class="monformulaire container-fluid">
                <form action="<?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'traitement/update-danger.php?id='.$id ;
                                } else {
                                    echo 'traitement/add-danger.php';
                                }
                                
                            ?>" method="POST" enctype="multipart/form-data" class="container-fluid">
                        <div class="row">
                            
                            <section class="col-lg-4">
                            <div class="form-group">
                                <label for="tDanger">Type de Danger </label>
                                <select name="tDanger" class="custom-select" required >
                                    <?php  if (@$_GET['operation'] == 'modification') {
                                        echo '<option value="'.$dangertable['typeDanger'].'" >'.$dangertable['typeDanger'].'</option>';
                                    }  
                                        $recuptdanger = $db->query("SELECT * FROM typedanger ORDER BY typeDanger ASC");
                                        while ($tdanger = $recuptdanger->fetch()) 
                                        {
                                            echo '<option value="'. $tdanger['typeDanger'] .'">'.$tdanger['typeDanger'] .'<option>';
                                        }
                                         Database::deconnect();
                                    ?>
                                </select>
                                <em class="text-danger"><?php echo @$_SESSION['tDangerError'] ; ?></em>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="cDanger">Catégorie de Danger</label>
                                <select name="cDanger" class="custom-select" required>
                                    <?php
                                        if (@$_GET['operation'] == 'modification') {echo '<option value="'.$dangertable['categorieDanger'].'" >'.$dangertable['categorieDanger'].'</option>';}
                                        Database::connect();
                                        $recupcdanger = $db->query("SELECT * FROM categoriedanger ORDER BY nomCategorieDanger ASC");
                                        while ($cdanger = $recupcdanger->fetch()) 
                                        {
                                            echo '<option value="'. $cdanger['nomCategorieDanger'] .'">'.$cdanger['nomCategorieDanger'] .'<option>';
                                        }
                                        Database::deconnect();
                                    ?>
                                </select>
                                <em class="text-danger"><?php echo @$_SESSION['cDangerError'] ; ?></em>
                            </div>
                            <div class="form-group">
                                <label for="bDanger">Bourreau du danger</label>
                                <select name="bDanger" class="custom-select" required>
                                    <?php if (@$_GET['operation'] == 'modification') {echo '<option value="'.$dangertable['bourreauDanger'].'" >'.$dangertable['bourreauDanger'].'</option>';}?>
                                    <option value="Enfant">Enfant</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Fille">Fille</option>
                                    <option value="Fillette">Fillette</option>
                                    <option value="Garçon">Garçon</option>
                                    <option value="Groupe de personne">Groupe de personne</option>
                                    <option value="Homme">Homme</option>
                                </select>
                                <em class="text-danger"><?php echo @$_SESSION['bDangerError'] ; ?></em>
                            </div>
                            <div class="form-group">
                                <label for="">Victime du danger</label>
                                <select name="vDanger" class="custom-select" >
                                    <?php if (@$_GET['operation'] == 'modification') {echo '<option value="'.$dangertable['bourreauDanger'].'" >'.$dangertable['bourreauDanger'].'</option>';}?>
                                    <option value="Enfant">Enfant</option>
                                    <option value="Femme">Femme</option>
                                    <option value="Fille">Fille</option>
                                    <option value="Fillette">Fillette</option>
                                    <option value="Garçon">Garçon</option>
                                    <option value="Groupe de personne">Groupe de personne</option>
                                    <option value="Homme">Homme</option>
                                </select>
                                <em class="text-danger"><?php echo @$_SESSION['vDangerError'] ; ?></em>
                            </div>
                            </section>
                            <section class="col-lg-4">
                            <div class="form-group">
                                <label for="descDanger">Description</label>
                                <textarea class="form-control" name="descDanger" id="" rows="" required value=""><?php if (@$_GET['operation'] == 'modification') {echo $dangertable['descriptionDanger']; }?></textarea>
                                <em class="text-danger"><?php echo @$_SESSION['descDangerError'] ; ?></em>
                            </div>
                            <div class="form-group">
                                <label for="nomSource">Source</label>
                                <input type="text" name="nomSource" id="" class="form-control" placeholder="" required value="<?php if (@$_GET['operation'] == 'modification') {echo $dangertable['sourceDanger']; }?>">
                                <em class="text-danger"><?php echo @$_SESSION['sourceDangerError'] ; ?></em>
                            </div>
                            <div class="form-group">
                                <label for="dateDanger">Date du danger</label>
                                <input type="date" name="dateDanger" id="" class="form-control" placeholder="" required  value="<?php if (@$_GET['operation'] == 'modification') {echo $dangertable['dateDanger']; }?>">
                                <em class="text-danger"><?php echo @$_SESSION['dateDangerError'] ; ?></em>
                            </div>
                            <div class="form-group">
                                <label for="pays">Pays</label>
                                <select name="pays" class="custom-select" required>
                                        <?php if (@$_GET['operation'] == 'modification') {echo '<option value="'.$dangertable['pays'].'" >'.$dangertable['pays'].'</option>';} 
                                        Database::connect();
                                        @$recuppays = $db->query("SELECT * FROM pays ORDER BY nomPays ASC")->fetchAll();
                                        foreach ($recuppays as $pays)
                                        {
                                            echo '<option value="'.$pays['nomPays'] .'">'.$pays['nomPays'] .'<option>';
                                        }      
                                    Database::deconnect();
                                    ?>
                                </select>
                                <em class="text-danger"><?php echo @$_SESSION['paysDangerError'] ; ?></em>
                            </div>
                            </section>
                            <section class="col-lg-4">
                            <div class="form-group">
                                <label for="ville">Ville</label>
                                <select name="ville" class="custom-select" required> 
                                        <?php if (@$_GET['operation'] == 'modification') {echo '<option value="'.$dangertable[11].'" >'.$dangertable[11].'</option>';} 
                                        Database::connect();
                                        @$recupville = $db->query("SELECT * FROM ville ORDER BY nomVille ASC")->fetchAll();
                                        foreach ($recupville as $ville)
                                        {
                                            echo '<option value="'.$ville['nomVille'] .'">'.$ville['nomVille'] .'<option>';
                                        } 
                                        Database::deconnect();
                                    ?>
                                </select>
                                <em class="text-danger"><?php echo @$_SESSION['vilDangerError'] ; ?></em>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="quartier">Quartier</label>
                                <select name="quartier" class="custom-select" required>
                                <?php if (@$_GET['operation'] == 'modification') {echo '<option value="'.$dangertable['quartier'].'" >'.$dangertable['quartier'].'</option>';} 
                                        Database::connect();
                                        @$recupquartier = $db->query("SELECT * FROM quartier ORDER BY nomQuartier ASC")->fetchAll();
                                        foreach ($recupquartier as $quartier)
                                        {
                                            echo '<option value="'.$quartier['nomQuartier'] .'">'.$quartier['nomQuartier'] .'<option>';
                                        }
                                        Database::deconnect();
                                    ?>
                                </select>
                                <em class="text-danger"><?php echo @$_SESSION['qDangerError'] ; ?></em>
                            </div>
                            <div class="form-group">
                                <label for="lieu">Zone</label>
                                <input type="text" name="lieu" id="" class="form-control" required value="<?php if (@$_GET['operation'] == 'modification') {echo $dangertable['lieu']; }?>">
                                <em class="text-danger"><?php echo @$_SESSION['zDangerError'] ; ?></em>
                            </div>
                            
                             
                            <div class="form-group">
                                    <?php 
                                    if (@$_GET['operation'] == 'modification') 
                                    {
                                        echo'<label for="image">Image:</label>
                                        <p>'.$dangertable['imageDanger'].'</p>
                                        <label for="image">Sélectionner une nouvelle image:</label>
                                        <input type="file" id="image" name="image"> ';
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
                            
                        </div>
                        <div class="row form-group">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-outline-warning col-md"><?php if (isset($_GET['operation'])) {
                                    echo 'Modifier';
                                    
                                } else {
                                    echo 'Ajouter';
                                }?></button>
                        </div>
                        <div class="col-lg-3"></div>
                        </div>
                </form>
                </div>
            </section>
        </div>
     
</div>
            