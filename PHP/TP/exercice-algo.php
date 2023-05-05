<?php

// EXERCICE 0 v1

echo 'Exercice 0 v1' . PHP_EOL;
$a=2;
$b=5;
$c=0;


$c=$a;
$a=$b;
$b=$c;

echo 'a = ' . $a . ' ' . 'b = ' . $b . PHP_EOL;

// EXERCICE 0 v2

echo 'Exercice 0 v2' . PHP_EOL;

$a=2;
$b=5;

$b=$a;
$a=($b*5)/2;

echo 'a = ' . $a . ' ' . 'b = ' . $b . PHP_EOL;

// EXERCICE 0 v3

echo 'Exercice 0 v3' . PHP_EOL;

$a=2;
$b=5;

if ($a==2 and $b==5){
    $a=5;
    $b=2;
}
echo 'a = ' . $a . ' ' . 'b = ' . $b . PHP_EOL;

// EXERCICE 1

// EXERCICE 1 v1

echo 'Exercice 1 V1' . PHP_EOL;
$a=(int)readline('Entrez votre a :');
$b=(int)readline('Entrez votre b :');

    if ($a*$b>=0) {
        echo 'Le résultat est positif' . PHP_EOL;
    }

    if ($a*$b<0) {
        echo 'Le résultat est négatif' . PHP_EOL;
    }


// EXERCICE 1 v2

echo 'Exercice 1 V2' . PHP_EOL;
$a=(int)readline('entrez votre a :');
$b=(int)readline('entrez votre b :');

    if ($a*$b>=0) {
        echo 'Le résultat est positif' . PHP_EOL;
    }

    else {
        echo 'Le résultat est négatif' . PHP_EOL;
    }


// EXERCICE 1 V3-1

echo 'Exercice 1 V3' . PHP_EOL;
$a=(int)readline('Entrez votre a :');
$b=(int)readline('Entrez votre b :');

    if (($a>=0 && $b>=0) || ($a<=0 && $b<=0)) {
        echo 'le résultat est positif' . PHP_EOL;
    }

    else {
        echo 'le résultat est négatif' . PHP_EOL;
    }


// EXERCICE 1 v3-2

echo 'Exercice 1 V3-2 ternaire' . PHP_EOL;

$a=(int)readline('Entrez votre a :');
$b=(int)readline('Entrez votre b :');

echo (($a>=0 && $b>=0) || ($a<=0 && $b<=0)) ? 'Le résultat est positif' .PHP_EOL : 'Le résultat est négatif' .PHP_EOL;


// EXERCICE 2 

// EXERCICE 2 v1

echo 'Exercice 2 V1' . PHP_EOL;

$nbr=0;

while ($nbr>20 || $nbr<10) {

    $nbr=(int)readline('Entrez votre nombre :');

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

// EXERCICE 2 v2

echo 'Exercice 2 V2' . PHP_EOL;

$nbr=0;

do {
    $nbr=(int)readline('Entrez votre nombre :');
    
    if ($nbr>20) {
        echo 'Plus petit !' . PHP_EOL;
    }

    elseif ($nbr<10) {
        echo 'Plus grand !' . PHP_EOL;
    }

} while ($nbr>20 || $nbr<10);


// EXERCICE 2 v3 Ternaire

echo 'Exercice 2 V3 Ternaire' . PHP_EOL;

$nbr=0;

do {
    $nbr=(int)readline('Entrez votre nombre :');
    
     echo ($nbr>20) ? 'Plus petit !' .PHP_EOL : ($nbr<10 ? 'Plus grand !' .PHP_EOL :('Bien joué' . PHP_EOL));

} while ($nbr>20 || $nbr<10);


// EXERCICE BONUS

/*
saisir utilisateur des notes tant qu'il n'a pas rentré la valeur -1 ça n'arrête pas la saisie
stocker les valeurs dans un tableau
calculer la moyenne des notes et en fonction de la moyenne des notes 
si c'est en dessous de 6 afficher message "naze", 
si en dessous de 10 afficher "peux mieux faire", 
si en dessous de 14 afficher "insiste un peu plus", 
si au dessus de 14 afficher "Lèche-botte"
*/

// v1 Sans tableau

$i=0;
$note=0;
$notes=0;
$moyenne=0;

do {
    $note=(float)readline('Entrez une note :');

    if (($note>=0) && ($note<=20)) {
        if  ($note!=-1) { 
            $notes=($note+$notes);
            $i++;
        }
    }

    elseif ($note!=-1) {
        echo "Saisie incorrecte" . PHP_EOL;
    }
   
} while ($note!=-1);

$moyenne=$notes/$i;

if ($moyenne<=6) {
    echo $moyenne .' T\'es naze' . PHP_EOL;
}

elseif (($moyenne>6) && ($moyenne<=10)) {
    echo $moyenne . ' Peux mieux faire' . PHP_EOL;
}
elseif (($moyenne>10) && ($moyenne<=14)) {
    echo $moyenne . ' Insiste encore un peu' . PHP_EOL;
}

else {
    echo $moyenne . ' Lèche-botte' . PHP_EOL;
}

// v1 sans tableau avec ternaire 

$i=0;
$note=0;
$notes=0;
$moyenne=0;

do {
    $note=(float)readline('Entrez une note : ');
    if (($note>=0) && ($note<=20)) {
        if  ($note!=-1) { 
            $notes=($note+$notes);
            $i++;
        }
    }
    elseif ($note!=-1){
        echo "Saisie incorrecte" . PHP_EOL;
    }
   
} while ($note!=-1);

echo $moyenne=$notes/$i;

echo (($moyenne>=0) && ($moyenne<=10) ? (($moyenne<=6) ? ' T\'es naze' : ' Peux mieux faire') : (($moyenne<=14) ? ' Insiste encore un peu': ' Lèche-botte'));

// v2 avec tableau

$i=0;
$note=0;
$notes=[];
$moyenne=0;

do {
    $note=(float)readline('Entrez une note :');

    if (($note>=0) && ($note<=20)) {
        if  ($note!=-1) { 
            $notes[]=$note;
            $i++;
        }
    }

    elseif ($note!=-1) {
        echo "Saisie incorrecte" . PHP_EOL;
    }
   
} while ($note!=-1);


$moyenne=array_sum($notes)/$i;

if ($moyenne<=6) {
    echo $moyenne .' T\'es naze' . PHP_EOL;
}

elseif (($moyenne>6) && ($moyenne<=10)) {
    echo $moyenne . ' Peux mieux faire' . PHP_EOL;
}
elseif (($moyenne>10) && ($moyenne<=14)) {
    echo $moyenne . ' Insiste encore un peu' . PHP_EOL;
}

else {
    echo $moyenne . ' Lèche-botte' . PHP_EOL;
}