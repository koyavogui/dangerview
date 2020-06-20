<?php
    
     function createPassword($nbCaractere)
        {
            return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, $nbCaracter); 
        }
        function passgen2($nbChar){
            return substr(str_shuffle(
        'abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, $nbChar); }
        var_dump(passgen2(15));

        $pass = passgen2(15);
        $admin ='simplonci';
        $pass_hash = password_hash($admin, PASSWORD_BCRYPT);
        var_dump($pass_hash);
        if (password_verify($pass, $pass_hash))
        {
          echo "Mot de passe correct";
        }
        else
        {
          echo "Mot de passe incorrect";
        }
    echo 'je suis entrain de faire un essaie';
?>

<div class="form-group">
    <label for="ville">Ville</label>
    <select name="ville" class="custom-select" required> 
            <?php
                require 'bd/connexion-bd.php' ; 
                if (@$_GET['operation'] == 'modification') {echo '<option value="'.$dangertable[11].'" >'.$dangertable[11].'</option>';} 
                $db =Database::connect();
                $recupville = $db->query("SELECT * FROM ville ORDER BY nomVille ASC")->fetchAll();
                foreach ($recupville as $ville)
                {
                    echo '<option value="'.$ville['idVille'] .'">'.$ville['nomVille'] .'</option>';
                } 
                
            ?>
    </select>
    <em class="text-danger"><?php echo @$_SESSION['vilDangerError'] ; ?></em>
</div>

<?php
     
    $count = $db->query("SELECT count(*) FROM  user")->fetchColumn();
    echo 'La table contient '.$count;
     
    Database::deconnect();
?>
