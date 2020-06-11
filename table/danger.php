
<div class="container-fluid">
    <div class=" row ml-auto mr-auto  block-forms pl-25 " style="width:90vw;">
    <h1><strong>Liste des dangers </strong><a href="ajout-danger.php" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</a></h1>

        <table class="table table-striped container-fluid content-justify-center table-responsive  ">
            <thead class="thead-dark">
                <tr>
                    <th>N</th>
                    <th>Description</th>
                    <th>Type de danger</th>
                    <th>categorie de danger</th>
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
                    $recupDanger= $db->query('SELECT * FROM  dangertable');
                    while($danger = $recupDanger-> fetch())
                    {
                        echo '<tr>
                        <td>';
                        echo $danger['idDanger'];
                        echo '</td>
                        <td>';
                        echo $danger['descriptionDanger'];
                        echo '</td>
                        <td>';
                        echo $danger['typeDanger'];
                        echo '</td>
                        <td>';
                        echo $danger['categorieDanger'];
                        echo '</td>
                        <td>';
                        echo $danger['bourreauDanger'];
                        echo '</td>
                        <td>';
                        echo $danger['victimeDanger'];
                        echo '</td><td>';
                        echo $danger['dateDanger'];
                        echo '</td><td>';
                        echo $danger['lieu'];
                        echo '</td><td>';
                        echo '<em><a href="'.$danger['sourceDanger'].'">'.$danger['sourceDanger'].'<a></em>';
                        echo '</td><td>';
                        echo '<a class="btn btn-outline-primary btn-sm ml-1" href="update-danger.php?id='.$danger['idDanger'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i> Modifier</a>';
                        echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#exampleModalCenter'.$danger['idDanger'].'"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>';
                      
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
                ?>
            </tbody>
        </table>
    </div>
</div>