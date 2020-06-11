
   <?php
   session_start();
     require '../bd/connexion-bd.php' ;
     #require '../function/motdepasse.php' ;
     $db= Database::connect();
    var_dump($db);
     $newActivite = [
        ':activite'     => 'Connexion',
        ':dateactivite' => date("Y-m-d H:i:s"),
        ':iduser'       => $_SESSION['idUtilisateur']
    ];
    var_dump($newActivite);
    $activite = "INSERT  INTO activite (nomActivite,dateActivite,idUtilisateur) VALUES ( :activite,:dateactivite,:iduser)";
    var_dump($activite);
        $sql = "INSERT INTO users (nomActivite, dateActivite, idUtilisateur) VALUES (?,?,?)";
        $activite = 'connecion';
        $date = date("Y-m-d H:i:s");
        $idUser = $_SESSION['idUtilisateur'];
        $rActivite = $db->prepare($sql)->execute([$activite, $date, $idUser]);
    
    var_dump($rActivite);
   ?>