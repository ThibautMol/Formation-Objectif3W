<?php

// WHILE - Tant que - on pourra exécuter des instructions tant qu'une condition sera vérifiée

while ($chiffre !=10) {
    $chiffre = (int) readline ('Entrez une valeur : ');
}

echo 'Bravo vous avez trouvé le nombre 10 !';


// DO WHILE - FAIRE TANT QUE 

// do {
//      instruction 
// }while (expression)

$i=1;
do {
    echo $i;
    // $i=$1+1;
    $i++;
}while ($i<=10);


// FOR - POUR

// for (expression1; condition;expression2) {

// }
// Expression 1 : sera exécuté une seule fois à l'entrée de la boucle
// condition : sera testé à chaque passage de la boucle (y compris la première fois)
// la boucle continuera tant que la condition sera vérifiée
// Expression 2 : sera exécuté à la fin de chaque passage de boucle.

for ($i=1; $i<=10; $i++) {
    echo $i . PHP_EOL;
}

// la fonction php count permet de compter le nombre d'éléments dans un tableau.

$fruits=['banane', 'pomme', 'kiwi', 'tomate'];

for ($i=0; $i <=count($fruits)-1; $i++) {
    echo $fruits[$i] . PHP_EOL;
}

// ou on peut aussi faire : 

for ($i=0; $i <count($fruits); $i++) {
    echo $fruits[$i] . PHP_EOL;
}
