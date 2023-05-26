<?php

function decrement($num) {
    if ($num === 0) {
        echo 'Terminé';
    }else {
        echo $num . ', ';
        decrement($num-1);
    }
}

// decrement (6);

function factorielle(int $n) : int{
    if($n===0) {
        $resultat=1;
    }else{
        $resultat = factorielle ($n-1)*$n;
        echo $resultat . PHP_EOL;
    }
    return $resultat;
}

echo factorielle(5);