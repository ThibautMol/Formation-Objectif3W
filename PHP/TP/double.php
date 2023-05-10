<?php

/*
Saisir une valeur entière et afficher son double si cette
valeur donnée est infèrieure à un seuil donné.
seuil = 20

*/

// EXERCICE V1

echo 'Exercice Double V1' . PHP_EOL;

$SEUIL=20;

$nbr=(int)readline('entrez votre nombre :') . PHP_EOL;

if (($nbr*2)<$SEUIL) {
    echo $nbr*2 . PHP_EOL;
}

else {
    echo 'Seuil dépassé' . PHP_EOL;
}

// EXERCICE V2

echo 'Exercice Double V2 ternaire' . PHP_EOL;

$SEUIL=20;
$nbr=(int)readline('entrez votre nombre :') . PHP_EOL;

echo (($nbr*2)<$SEUIL) ? $nbr*2 . PHP_EOL : 'Seuil dépassé' . PHP_EOL;


// EXERCICE V3

echo 'Exercice Double V3 ternaire + boucle' . PHP_EOL;

$SEUIL=20;

do {
$nbr=(int)readline('entrez votre nombre :') . PHP_EOL;

echo(($nbr*2)<$SEUIL) ? ($nbr*2) .PHP_EOL :'Seuil dépassé' . PHP_EOL;

} while (($nbr*2)<$SEUIL) ;
