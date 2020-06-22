
<div class="container-fluid">
    <div class=" row ml-auto mr-auto  block-forms pl-25 " style="width:90vw;">
    <h1><strong>Liste des 20 dernières activités. </strong></h1>

        <table class="table table-striped container-fluid content-justify-center table-responsive  ">
            <thead class="thead-dark">
                <tr>
                    <th>N</th>
                    <th>Date d'activité</th>
                    <th>Activité</th>
                    <th>Utilisateur</th>
                    <th>Rôle</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $db= Database::connect();
                    $recupactivite= $db->query('SELECT user.idUtilisateur, activite.dateActivite, activite.nomActivite,user.nomUtilisateur AS nomUtilisateur, user.prenomUtilisateur AS prenomUtilisateur, user.roleUtilisateur AS fonction FROM activite RIGHT JOIN user ON activite.idUtilisateur=user.idUtilisateur ORDER BY activite.dateActivite DESC LIMIT 20');
                    $i=1;
                    foreach ( $recupactivite as $activite)
                    {
                        echo'<tr><td>';
                        echo $i++;
                        echo '</td><td>';
                        echo $activite['dateActivite'];
                        echo '</td><td>';
                        echo $activite['nomActivite'];
                        echo '</td><td>';
                        echo $activite['nomUtilisateur'].'  '.$activite['prenomUtilisateur'];
                        echo '</td><td>';
                        echo $activite['fonction'];
                        echo '</td><td>';
                        echo '<a class="btn btn btn-outline-dark btn-sm ml-1" href="view-utilisateur.php?id=' .$activite['idUtilisateur'] .'&back=superviseur"><i class="fa fa-eye" aria-hidden="true"></i> Voir</a>';
                        echo'</td></tr>';               
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>