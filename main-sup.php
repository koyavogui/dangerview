
<div class="container-fluid">
    <div class=" row ml-auto mr-auto  block-forms pl-25 " style="width:90vw;">
    <h1><strong>Liste des 20 dernières activités. </strong></h1>

        <table class="table table-striped container-fluid content-justify-center table-responsive  ">
            <thead class="thead-dark">
                <tr>
                    <th>N</th>
                    <th>Date d'activité</th>
                    <th>Nom de l'activité</th>
                    <th>Nom d'utilisateur</th>
                    <th>Prénom de l'utilisateur</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $db= Database::connect();
                    $recupactivite= $db->query('SELECT activite.dateActivite, activite.nomActivite,user.nomUtilisateur AS nomUtilisateur, user.prenomUtilisateur AS prenomUtilisateur FROM activite RIGHT JOIN user ON activite.idUtilisateur=user.idUtilisateur ORDER BY activite.dateActivite DESC LIMIT 20');
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
                        echo $activite['nomUtilisateur'];
                        echo '</td><td>';
                        echo $activite['prenomUtilisateur'];
                        echo'</td></tr>';               
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>