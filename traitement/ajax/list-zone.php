<?php
 session_start();
     require '../../bd/connexion-bd.php' ; 
    $i = 1;
    $db= Database::connect();
    @$idLieu= strip_tags($_GET['id']);                    
    @$recupLieu= $db->prepare("SELECT * FROM  lieu WHERE idQuartier=? ORDER by dernieremodif");
    @$LieuTotal=$recupLieu->execute([$idLieu]);
    $nombreligne = $recupLieu->rowCount(); //verifier si l'on trouve une valeur après la requette
    $LieuTotal = $recupLieu->fetchAll(); //permet de stocker le contenu du tableau retourné dans la variable.
    if ($nombreligne>0) {
        //echo 'Je suis dans la structure conditionnel <hr> Voici le contenu de la variable $recupLieu ';
       // var_dump($nombreligne2);

        foreach($LieuTotal as $Lieu)
        {
            echo '<tr>
            <th scope="row">';
            echo $i++;
            echo '</td>
            <td>';
            echo $Lieu['nomLieu'];
            echo '</td>
            <td>';
            echo $Lieu['categorieLieu'];
            echo '</td>
            <td>';
            echo $Lieu['lng'];
            echo '</td>
            <td>';
            echo $Lieu['lat'];
            echo '</td>
            <td>';
            echo $Lieu['descriptionLieu'];
            echo '</td>
            <td>';
            echo $Lieu['imageLieu'];
            echo '</td><td>';
            if ($_SESSION['idUtilisateur'] == $Lieu['idUtilisateur'] || $_SESSION['typeUtilisateur'] == 'Super Administrateur') {
                echo '<a class="btn btn-outline-primary btn-sm ml-1" href="ajout-Lieu.php?id='.$Lieu['idLieu'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i></a>';
                echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#zonneModalCenter'.$Lieu['idLieu'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
            }
        
            echo '</td>
            <tr>';
            echo  '<div class="modal fade" id="zonneModalCenter'.$Lieu['idLieu'].'" tabindex="-1" role="dialog" aria-labelledby="zonneModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="zonneModalLongTitle">Supprimer une Lieu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Etes vous sur de vouloir supprimer la zone <strong>'.$Lieu['nomLieu'].'</strong>?
                </div>
                <div class="modal-footer">
                    <form class="form" action="delete.php" role="form" method="post">
                        <input type="hidden" name="id" value="'.$Lieu['nomLieu'].'"/>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                        <a href="traitement/delete-Lieu.php?id='.$Lieu['idLieu'].'" class="btn btn-danger">Supprimer</a> 
                    </form>
                </div>
    
            </div>
            </div>';
        }
    }else {
            echo '<p><em>Pas de Lieu enregister pour cette ville</em></p>';
    }
?>