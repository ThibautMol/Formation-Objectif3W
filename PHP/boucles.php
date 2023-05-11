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

// FOREACH - POUR CHAQUE

// Permet de parcourir facilement les éléments d'un tableau.
// La valeur de chaque élément sera copié dans une variable
// syntaxe simple
// foreach ($tableau as $element) {
//     instructions;
// }

$fruits=['banane', 'pomme', 'kiwi', 'tomate'];

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}

$user = [
    'prenom' => 'Sony',
    'métier' => 'Chômeur',
    'passion' => 'DROP DATABASE'
];

foreach ($user as $data) {
    echo $data . PHP_EOL;
}

// syntaxe avec clef =>

// foreach($tableau as $cle => $valeur){
    // instructions;
// }

foreach ($user as $key => $data) {
    echo $key . ' : ' . $data . PHP_EOL;
}

// FOREACH dans un FOREACH

$eleves = [
    'cine1' => ['Sony', 'Benjamin', 'Anne'],
    'game1' => ['Arturo', 'Olivier', 'Thibaut']
];

foreach ($eleves as $classe => $listeEleves) {
    echo "la classe $classe : \n";
    foreach($listeEleves as $eleve) {
        echo "- $eleve \n";
    }
echo "\n";
}