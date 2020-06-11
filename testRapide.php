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
?>