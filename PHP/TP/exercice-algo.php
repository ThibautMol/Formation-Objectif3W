<?php

// EXERCICE 0

$a=2;
$b=5;
$c=0;


$c=$a;
$a=$b;
$b=$c;

// $b=$a;
// $a=($b*5)/2;


echo $a . ' ' . $b . PHP_EOL;


// if $a==2 and $b==5;
//     $a=5;
//     $b=2;

// echo $a . ' ' . $b;

// EXERCICE 1

// V1

echo 'Exercice 1 V1' . PHP_EOL;
$a=(int)readline('entrez votre a :');
$b=(int)readline('entrez votre b :');

    if ($a*$b>=0) {
        echo 'le résultat est positif' . PHP_EOL;
    }

    if ($a*$b<0) {
        echo 'le résultat est négatif' . PHP_EOL;
    }

// V2
echo 'Exercice 1 V2' . PHP_EOL;
$a=(int)readline('entrez votre a :');
$b=(int)readline('entrez votre b :');

    if ($a*$b>=0) {
        echo 'le résultat est positif' . PHP_EOL;
    }

    else {
        echo 'le résultat est négatif' . PHP_EOL;
    }

// V3
echo 'Exercice 1 V3' . PHP_EOL;
$a=(int)readline('entrez votre a :');
$b=(int)readline('entrez votre b :');

    if ((($a>=0) and ($b>=0)) or (($a<=0) and ($b<=0))) {
        echo 'le résultat est positif' . PHP_EOL;
    }

    else {
        echo 'le résultat est négatif' . PHP_EOL;
    }

// EXERCICE 2 

$nbr=0;

while (($nbr>20) or ($nbr<10)) {

    $nbr=(int)readline('entrez votre nombre :');

    if ($nbr>20) {
        echo 'Plus petit !' . PHP_EOL;
    }

    elseif ($nbr<10) {
        echo 'Plus grand !' . PHP_EOL;
    }

    else {
        echo 'C\'est gagné !' . PHP_EOL;
    }
}
