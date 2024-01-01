<?php

function pgcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function ppcm($a, $b) {
    
}

echo "Entrez le premier entier : ";



echo "Entrez le deuxième entier : ";


?>