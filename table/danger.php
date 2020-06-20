
<div class="container-fluid">
    <div class=" row ml-auto mr-auto  block-forms pl-25 " style="width:90vw;">
    <h1><strong>Liste des dangers </strong><a href="ajout-danger.php" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</a></h1>

        <table class="table container-fluid content-justify-center table-sm table-responsive table-hover table-borderless">
            <thead class="border-bottom border-top border-warning">
                <tr class="table-warning">
                    <th>N</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>categorie </th>
                    <th>bourreau</th>
                    <th>Victime</th>
                    <th>Date</th>
                    <th>Zone</th>
                    <th>Source</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $db= Database::connect();
                    @$iduser = $_SESSION['idUtilisateur'];
                    if ($_SESSION['typeUtilisateur'] == 'Super Administrateur') {
                        @$user= $db->prepare("SELECT * FROM  dangertable");
                    }else{
                        @$user= $db->prepare("SELECT * FROM  dangertable WHERE idoperateur=?");
                    }                  
                    @$recupDanger= $user->execute([$iduser]);
                    @$recuptdanger= $db->query("SELECT idTypeDanger,typeDanger FROM  typeDanger")->fetchAll();
                    @$recupcdanger= $db->query("SELECT idCategorieDanger, nomCategorieDanger FROM  categorieDanger")->fetchAll();
                    @$recupadanger= $db->query("SELECT idAuteur, nomAuteur FROM auteur")->fetchAll();
                    @$recupldanger= $db->query("SELECT idLieu, nomLieu FROM lieu")->fetchAll();
                    @$rnomb= $user->rowCount();
                    @$i=1;
                    foreach($user as $danger)
                    {
                        echo '<tr>
                        <td>';
                        echo  $i++;
                        echo '</td>
                        <td>';
                        echo $danger['descriptionDanger'];
                        echo '</td>
                        <td>';
                        foreach($recuptdanger as $tdanger)
                        {
                            if ($danger['typeDanger'] == $tdanger['idTypeDanger']) {
                                echo $tdanger['typeDanger'];
                            }
                        }
                        echo '</td>
                        <td>';
                        foreach($recupcdanger as $cdanger)
                        {
                            if ($danger['categorieDanger'] == $cdanger['idCategorieDanger']) {
                                echo $cdanger['nomCategorieDanger'];
                            }
                        }
                        echo '</td>
                        <td>';
                        foreach($recupadanger as $adanger)
                        {
                            if ($danger['bourreauDanger'] == $adanger['idAuteur']) {
                                echo $adanger['nomAuteur'];
                            }
                        }
                        echo '</td>
                        <td>';
                        foreach($recupadanger as $adanger)
                        {
                            if ($danger['victimeDanger'] == $adanger['idAuteur']) {
                                echo $adanger['nomAuteur'];
                            }
                        }
                        echo '</td><td>';
                        echo $danger['dateDanger'];
                        echo '</td><td>';
                        foreach($recupldanger as $ldanger)
                        {
                            if ($danger['lieu'] == $ldanger['idLieu']) {
                                echo $ldanger['nomLieu'];
                            }
                        }
                        echo $danger['lieu'];
                        echo '</td><td>';
                        echo '<em><a href="'.$danger['sourceDanger'].'" target="_blank">'.$danger['sourceDanger'].'<a></em>';
                        echo '</td><td>';
                        echo '<a class=" ml-1" href="ajout-danger.php?id='.$danger['idDanger'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i> </a>';
                        echo '<a class="text-danger" data-toggle="modal" data-target="#exampleModalCenter'.$danger['idDanger'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                      
                        echo '</td>
                         <tr>';
                        echo  '<div class="modal fade" id="exampleModalCenter'.$danger['idDanger'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Supprimer un utilisateur</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 Etes vous sur de vouloir supprimer ce danger?
                             </div>
                             <div class="modal-footer">
                                 <form class="form" action="delete.php" role="form" method="post">
                                     <input type="hidden" name="id" value="'.$danger['idDanger'].'"/>
                                     <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                                     <a href="traitement/delete-danger.php?id='.$danger['idDanger'].'" class="btn btn-danger">Supprimer</a> 
                                 </form>
                             </div>

                         </div>
                        </div>';
                    }
                    $db= Database::deconnect();
                ?>
            </tbody>
        </table>
    </div>
</div>