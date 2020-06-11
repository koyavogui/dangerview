
<div class="container">
    <div class=" row ml-auto mr-auto  block-forms pl-25 " style="width:90vw;">
    <h1><strong>Liste des utilisateurs  </strong><a href="ajout-utilisateur.php" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</a></h1>

        <table class="table table-striped container-fluid content-justify-center table-responsive  ">
            <thead class="thead-dark">
                <tr>
                    <th>N</th>
                    <th>Nom</th>
                    <th>Prenoms</th>
                    <th>Email</th>
                    <th>Type opérateur</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $db= Database::connect();
                    $recupUtilisateur = $db->query('SELECT * FROM  user');
                    while($user = $recupUtilisateur-> fetch())
                    {
                        echo '<tr>
                        <td>';
                        echo $user['idUtilisateur'];
                        echo '</td>
                        <td>';
                        echo $user['nomUtilisateur'];
                        echo '</td>
                        <td>';
                        echo $user['prenomUtilisateur'];
                        echo '</td>
                        <td>';
                        echo $user['emailuser'];
                        echo '</td>
                        <td>';
                        echo $user['roleUtilisateur'];
                        echo '</td>
                        <td>';
                       
                        if ($user['sexeUtilisateur'] == "M") {
                            echo 'Masculin';
                        }
                        else {
                            echo 'Féminin';
                        }
                        echo '</td><td>';
                        echo '<a class="btn btn btn-outline-dark btn-sm ml-1" href="view-utilisateur.php?id=' .$user['idUtilisateur'] .'"><i class="fa fa-eye" aria-hidden="true"></i> Voir</a>';
                        echo '<a class="btn btn-outline-primary btn-sm ml-1" href="ajout-utilisateur.php?id='.$user['idUtilisateur'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i> Modifier</a>';
                        echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#exampleModalCenter'.$user['idUtilisateur'].'"><i class="fa fa-trash" aria-hidden="true"></i> Supprimer</a>';
                      
                        echo '</td>
                         <tr>';
                        echo  '<div class="modal fade" id="exampleModalCenter'.$user['idUtilisateur'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Supprimer un utilisateur</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 Etes vous sur de vouloir supprimer '.$user['nomUtilisateur'].' '.$user['prenomUtilisateur'].'?
                             </div>
                             <div class="modal-footer">
                                 <form class="form" action="delete.php" role="form" method="post">
                                     <input type="hidden" name="id" value="'.$user['nomUtilisateur'].'"/>
                                     <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                                     <a href="traitement/delete-user.php?id='.$user['idUtilisateur'].'" class="btn btn-danger">Supprimer</a> 
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