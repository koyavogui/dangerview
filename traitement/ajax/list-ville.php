 <?php
 session_start();
     require '../../bd/connexion-bd.php' ; 
    $i = 1;
    $db= Database::connect();
    @$idVille= strip_tags($_GET['id']);                    
    @$recupVille= $db->prepare("SELECT * FROM  ville WHERE idPays=? ORDER by dernieremodif");
    @$villeTotal=$recupVille->execute([$idVille]);
    
    $nombreligne = $recupVille->fetchColumn(); //verifier si l'on trouve une valeur après la requette  
    if ($nombreligne) {
        foreach($recupVille as $ville)
        {
            //var_dump($ville);
            echo '<tr>
            <th scope="row">';
            echo $i++;
            echo '</td>
            <td>';
            echo $ville['1'];
            echo '</td>
            <td>';
            echo $ville['lng'];
            echo '</td>
            <td>';
            echo $ville['lat'];
            echo '</td>
            <td>';
            echo $ville['descriptionVille'];
            echo '</td>
            <td>';
            echo $ville['imageVille'];
            echo '</td><td>';
            if ($_SESSION['idUtilisateur'] == $ville['idUtilisateur'] || $_SESSION['typeUtilisateur'] == 'Super Administrateur') {
                echo '<a class="btn btn-outline-primary btn-sm ml-1" href="ajout-Ville.php?id='.$ville['idVille'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i></a>';
                echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#villeModalCenter'.$ville['idVille'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            }
        
            echo '</td>
            <tr>';
            echo  '<div class="modal fade" id="villeModalCenter'.$ville['idVille'].'" tabindex="-1" role="dialog" aria-labelledby="villeModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="villeModalLongTitle">Supprimer une Ville</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Etes vous sur de vouloir supprimer '.$ville['nomVille'].'?
                </div>
                <div class="modal-footer">
                    <form class="form" action="delete.php" role="form" method="post">
                        <input type="hidden" name="id" value="'.$ville['nomVille'].'"/>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                        <a href="traitement/delete-Ville.php?id='.$ville['idVille'].'" class="btn btn-danger">Supprimer</a> 
                    </form>
                </div>
    
            </div>
            </div>';
        }
    }else {
            echo '<p><em>Pas de ville enregister pour ce pays</em></p>';
    }
?>