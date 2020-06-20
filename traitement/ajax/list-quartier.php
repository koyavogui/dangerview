<?php
 session_start();
     require '../../bd/connexion-bd.php' ; 
    $i = 1;
    $db= Database::connect();
    @$idQuartier= strip_tags($_GET['id']);                    
    @$recupQuartier= $db->prepare("SELECT * FROM  quartier WHERE idVille=? ORDER by dernieremodif");
    @$quartierTotal=$recupQuartier->execute([$idQuartier]);
      //verifier si l'on trouve une valeur après la requette
    $quartierTotal= $recupQuartier->fetchAll(PDO::FETCH_ASSOC); //permet de stocker le contenu du tableau retourné dans la variable.
    //var_export($quartierTotal);
    
    $deleted = $recupQuartier->rowCount();
   

    if ($deleted>0) {
      

      
        foreach($quartierTotal as $quartier)
        {
            echo '<tr>
            <th scope="row">';
            echo $i++;
            echo '</td>
            <td>';
            echo $quartier['nomQuartier'];
            echo '</td>
            <td>';
            echo $quartier['lng'];
            echo '</td>
            <td>';
            echo $quartier['lat'];
            echo '</td>
            <td>';
            echo $quartier['descriptionQuatier'];
            echo '</td>
            <td>';
            echo $quartier['imageQuartier'];
            echo '</td><td>';
            if ($_SESSION['idUtilisateur'] == $quartier['idUtilisateur'] || $_SESSION['typeUtilisateur'] == 'Super Administrateur') {
                echo '<a class="btn btn-outline-primary btn-sm ml-1" href="ajout-Quartier.php?id='.$quartier['idQuartier'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i></a>';
                echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#quartierModalCenter'.$quartier['idQuartier'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            }
        
            echo '</td>
            <tr>';
            echo  '<div class="modal fade" id="quartierModalCenter'.$quartier['idQuartier'].'" tabindex="-1" role="dialog" aria-labelledby="quartierModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quartierModalLongTitle">Supprimer un Quartier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Etes vous sur de vouloir supprimer '.$quartier['nomQuartier'].'?
                </div>
                <div class="modal-footer">
                    <form class="form" action="delete.php" role="form" method="post">
                        <input type="hidden" name="id" value="'.$quartier['nomQuartier'].'"/>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                        <a href="traitement/delete-quartier.php?id='.$quartier['idQuartier'].'" class="btn btn-danger">Supprimer</a> 
                    </form>
                </div>
    
            </div>
            </div>';
        }
    }else {
            echo '<p><em>Pas de Quartier enregister pour cette ville</em></p>';
    }
?>