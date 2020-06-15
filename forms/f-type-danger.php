<div class="container-fluid">
        <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
            <header class="row bg-warning">
                <div class="col-md-10 col-lg-10 ml-auto mr-auto">
                    <h3 class="text-center"> 
                    <?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'Modification -  Type Danger';
                                    if(!empty($_GET['id'])) 
                                    {
                                        $id = checkInput($_GET['id']);
                                         
                                    }    
                                    $db= Database::connect();
                                    $recupUnique = $db->query("SELECT * FROM typedanger WHERE idTypeDanger= $id");
                                    $tdanger = $recupUnique->fetch();
                                    Database::deconnect();
                                } else {
                                    echo 'Enregistrement -  Type Danger';
                                }
                                
                            ?>
                    </h3>
                </div>
            </header>
            <section class="row bg-dger-white bd-dger-white">
                <div class="monformulaire container-fluid">
                <form action="<?php  
                                if (isset($_GET['operation']) && ($_GET['operation'] == 'modification') ) {
                                    echo 'traitement/update-tdanger.php?id='.$id ;
                                } else {
                                    echo 'traitement/add-tdanger.php';
                                }
                                
                            ?>" method="POST" enctype="multipart/form-data" class="container-fluid">
                        <div class="form-group row mt-2">
                            <label for="tdanger" class="col-lg-3 col-md-2 ">Type de Danger</label>
                            <div class="col-lg col-md col-sm">
                                <input type="text" name="tdanger" id="" class="form-control <?php echo $_SESSION['echec']; $_SESSION['echec']="";  ?>" <?php  if (@$_GET['operation'] == 'modification') {
                                    echo 'value="' .$tdanger['typeDanger'].'"';
                                } ?> required>
                                <div class="invalid-feedback"> <?php echo @$_SESSION['infoechec']; ?></div>
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
                                <th>Type de danger</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $db= Database::connect();
                                $recuptDanger = $db->query('SELECT * FROM  typedanger ORDER BY idTypeDanger DESC');
                                while($tDanger = $recuptDanger-> fetch())
                                {
                                    echo '<tr>
                                    <td>';
                                    echo $tDanger['idTypeDanger'];
                                    echo '</td>
                                    <td>';
                                    echo $tDanger['typeDanger'];
                                    echo '</td><td>';
                                    echo '<a class="btn btn-outline-primary btn-sm ml-1" href="ajout-tdanger.php?id='.$tDanger['idTypeDanger'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i> Modifier</a>';
                                    echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#exampleModalCenter'.$tDanger['idTypeDanger'].'"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>';
                                
                                    echo '</td>
                                    <tr>';
                                    echo  '<div class="modal fade" id="exampleModalCenter'.$tDanger['idTypeDanger'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Supprimer un utilisateur</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Etes vous sur de vouloir supprimer  le type : '.$tDanger['typeDanger'].'?
                                        </div>
                                        <div class="modal-footer">
                                            <form class="form" action="delete.php" role="form" method="post">
                                                <input type="hidden" name="id" value="'.$tDanger['typeDanger'].'"/>
                                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                                                <a href="traitement/delete-tdanger.php?id='.$tDanger['idTypeDanger'].'" class="btn btn-danger">Supprimer</a> 
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
            