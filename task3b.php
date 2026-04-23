<?php

function generiraj($st, $min_dol, $max_dol) {
    $znaki = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $dolzina_znakov = strlen($znaki);

    $i = 0;
    while ($i < $st) {
        $dolzina = rand($min_dol, $max_dol);

        $geslo = '';
        $j = 0;

        while ($j < $dolzina) {
            $index = rand(0, $dolzina_znakov - 1);
            $geslo .= $znaki[$index];
            $j++;
        }

        echo $geslo . "<br>";

        $i++;
    }
}

generiraj(100, 6, 10);

?>