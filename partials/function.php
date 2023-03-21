<?php 

var_dump($_GET);

    function getPassword($lenght) {
        // creare $psw con tutti i caratteri alfabetici, numerici e speciali inseribili
        $psw_letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $psw_numbers = '1234567890';
        $psw_specials = '><!"$%&/()=?^;,:._-#+';

        // inizializzare $psw a sringa vuota
        $psw = '';

        // salvare in variabile gli input se sono stati selezionati
        $letters = isset($_GET['letters']);
        $numbers = isset($_GET['numbers']);
        $specials = isset($_GET['specials']);

        // condizione per cui concateno a $psw le $psw selezionate
        if ($letters && $numbers && $specials) {
            $psw .= $psw_letters . $psw_numbers . $psw_specials;
        } elseif ($letters && $numbers) {
            $psw .= $psw_letters . $psw_numbers;
        } elseif ($letters && $specials) {
            $psw .= $psw_letters . $psw_specials;
        } elseif ($numbers && $specials) {
            $psw .= $psw_numbers . $psw_specials;
        } elseif ($letters) {
            $psw .= $psw_letters;
        } elseif ($numbers) {
            $psw .= $psw_numbers;
        } elseif ($specials) {
            $psw .= $psw_specials;
        }
        

        // dichiarare $random_password a stringa vuota
        $random_password = "";

        // creare ciclo per andare a prendre TOT caratteri quanti ne ha stabiliti l'utente nell'input
        for ($i = 0; $i < $lenght; $i++) {

            // prendere TOT indici DIFFERENTI dalla stringa $psw
            // dichiarare array dove verificare se gli indici sono già stati inseriti
            $different_index = [];

            // prendere TOT indici CASUALI dalla stringa $psw
            $random_index = random_int(0, strlen($psw) -1);
            var_dump($random_index);

            // concatenare a $random_password tutti gli indici che sono stati creati con il ciclo
            $random_password .= $psw[$random_index];
        }

        // ritornare alla funzione $random_password
        return $random_password;
        var_dump($random_password);
    }

?>