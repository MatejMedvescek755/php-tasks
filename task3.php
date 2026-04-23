<?php

function generiraj($st, $min_dol, $max_dol) {
    $znaki = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $dolzina_znakov = strlen($znaki);

    for ($i = 0; $i < $st; $i++) {
        $dolzina = rand($min_dol, $max_dol);

        $geslo = '';


        for ($j = 0; $j < $dolzina; $j++) {
            $index = rand(0, $dolzina_znakov - 1);
            $geslo .= $znaki[$index];
        }

        echo $geslo . "<br>";
    }
}

generiraj(100, 6, 10);

?>