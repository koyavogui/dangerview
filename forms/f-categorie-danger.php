<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center"> <?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'Modification -  Categorie Danger';
                                    if(!empty($_GET['id'])) 
                                    {
                                        $id = checkInput($_GET['id']);
                                         
                                    }    
                                    $db= Database::connect();
                                    $recupUnique = $db->query("SELECT * FROM categoriedanger WHERE idCategorieDanger= $id");
                                    $cdanger = $recupUnique->fetch();
                                    Database::deconnect();
                                } else {
                                    echo 'Enregistrement -  Categorie Danger';
                                }
                                
                            ?></h3>
                </div>
            </header>
            <section class="row bg-dger-white bd-dger-white">
                <div class="monformulaire container-fluid">
                <form action="<?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'traitement/update-cdanger.php?id='.$id ;
                                } else {
                                    echo 'traitement/add-cdanger.php';
                                }
                                
                            ?>" method="POST" enctype="multipart/form-data" class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md">
                            <label for="tdanger" class="">Type de Danger</label>
                            <select name="tdanger" class="custom-select" required>
                            
                            <?php echo $_SESSION['echec']; $_SESSION['echec']="";  ?>" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo '<option value="' .$cdanger[1].'">' .$cdanger[2].'</option>';
                                } ?> 
                                <?php
                                    $db=Database::connect();
                                    $recuptdanger = $db->query("SELECT * FROM typedanger ORDER BY typeDanger ASC");
                                    while ($tdanger = $recuptdanger->fetch()) 
                                    {
                                        echo '<option value="'. $tdanger['idTypeDanger'] .'">'.$tdanger['typeDanger'] .'</option>';
                                    }
                                ?>
                            </select>
                            <div class="invalid-feedback"> <?php echo @$_SESSION['infoechec']; ?></div>
                        </div>
                        <div class="form-group col-md">
                            <label for="cdanger">Categorie de Danger</label>
                            <input type="text" name="cdanger" id="" class="form-control <?php echo $_SESSION['echec']; $_SESSION['echec']=""; echo $_SESSION['echec']; $_SESSION['echec']="";  ?>" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$cdanger['nomCategorieDanger'].'"';
                                } ?> required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-2 ml-auto"> 
                            <button type="submit" class="btn btn-warning btn-lg col-md mr-auto text-light"><?php  
                                if (isset($_GET['operation'])) {
                                    echo 'Modifier';
                                    
                                } else {
                                    echo 'Ajouter';
                                }
                                
                            ?></button>
                        </div> 
                    </div>
                </form>
                </div>
                <section class="mt-5 container-fluid">
                    <h2 class="mb-2"><strong>Liste des types de dangers  </strong></h2>
                    <table class="table table-striped container-fluid content-justify-center table-responsive w-100">
                        <thead class="thead-dark">
                            <tr>
                                <th>N</th>
                                <th>Type Parente</th>
                                <th>Categorie de danger</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $db= Database::connect();
                                $recupcDanger = $db->query('SELECT * FROM  categoriedanger ORDER BY idCategorieDanger');
                                while($cDanger = $recupcDanger-> fetch())
                                {
                                    echo '<tr>
                                    <td>';
                                    echo $cDanger['idCategorieDanger'];
                                    echo '</td>
                                    <td>';
                                    echo $cDanger['nomTypeDanger'];
                                    echo '</td>
                                    <td>';
                                    echo $cDanger['nomCategorieDanger'];
                                    echo '</td><td>';
                                    echo '<a class="btn btn-outline-primary btn-sm ml-1" href="ajout-cdanger.php?id='.$cDanger['idCategorieDanger'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i> Modifier</a>';
                                    echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#exampleModalCenter'.$cDanger['idCategorieDanger'].'"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>';
                                
                                    echo '</td>
                                    <tr>';
                                    echo  '<div class="modal fade" id="exampleModalCenter'.$cDanger['idCategorieDanger'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Supprimer un utilisateur</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Etes vous sur de vouloir supprimer  la categorie : '.$cDanger['nomCategorieDanger'].'?
                                        </div>
                                        <div class="modal-footer">
                                            <form class="form" action="delete.php" role="form" method="post">
                                                <input type="hidden" name="id" value="'.$cDanger['nomCategorieDanger'].'"/>
                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                                                <a href="traitement/delete-cdanger.php?id='.$cDanger['idCategorieDanger'].'" class="btn btn-danger">Supprimer</a> 
                                            </form>
                                        </div>

                                    </div>
                                    </div>';
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
            </section>
        </div>   
</div>
            