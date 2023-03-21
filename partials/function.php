<?php 

    var_dump($_GET);

    // dichirare password presa dall'input
    $password = is_numeric($_GET['password']) && true;
    var_dump($password);

    // creare $psw con tutti i caratteri alfabetici inseribili
    $psw_letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var_dump(($psw_letters));

    
    $random_password = "";

    // creare ciclo per andare a prendre TOT caratteri quanti ne ha stabiliti l'utente nell'input
    for ($i = 0; $i < $_GET['password']; $i++) {
        var_dump($i +1);

        // prendere TOT indici casuali dalla stringa $psw
        $random_index = random_int(0, strlen($psw_letters) -1);
        var_dump($random_index);

        // concatenare a $random_password tutti gli indici che sono stati creati con il ciclo
        $random_password .= $psw_letters[$random_index];
    }
    
    var_dump($random_password);

?>