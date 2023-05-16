<?php 

// WHILE - Tant que - 
// on pourra exécuter des instructions tant qu'une condition sera vérifiée

// $chiffre = null;


// while($chiffre != 10){

//     $chiffre = (int) readline('Entrez une valeur : ');
    
// }

// echo "Bravo vous avez trouvé le nombre 10 !";


// $chiffre = null;


// while($chiffre != 10){

//     $chiffre = (int) readline('Entrez une valeur : ');
    
// }

// echo "Bravo vous avez trouvé le nombre 10 !";



// DO WHILE - FAIRE TANT QUE

// do {
//     instruction
// } while(expression);

// $i = 1;
// do{
//     echo $i .PHP_EOL;
//     // $i = $i +1;
//     $i++;
// }while($i <= 10);



// FOR - POUR
// for(expression1; condition; expression2){

// }
// Expression 1 : sera éxécuté  une seule fois à l'entrée de la boucle 
// condition : sera testé à chaque passage de la boucle (y compris la premiere fois)
// la boucle continuera tant la condition sera vérifiée
// Expression 2 : sera éxécuté  à la fin de chaque passage dans la boucle 

// for($i=1; $i <= 10; $i++){

//     echo $i . PHP_EOL;
    
// }

// $fruits = ['pomme', 'banane', 'pêche', 'kiwi'];

// echo $fruits[0] .PHP_EOL;
// echo $fruits[1] .PHP_EOL;
// echo $fruits[2] .PHP_EOL;
// echo $fruits[3] .PHP_EOL;

// for($i=0; $i <= 3; $i++){
//     echo $fruits[$i] . PHP_EOL;
//     // 1er tour $fruits[0]
//     // 2eme tour $fruits[1]
//     // 3eme tour $fruits[2]
//     // 4eme tour $fruits[3]
// }


// echo count($fruits);

// for($i=0; $i < count($fruits); $i++){
//     echo $fruits[$i] . PHP_EOL;
//     // 1er tour $fruits[0]
//     // 2eme tour $fruits[1]
//     // 3eme tour $fruits[2]
//     // 4eme tour $fruits[3]
// }

// for($i=0; $i <= count($fruits)-1; $i++){
//     echo $fruits[$i] . PHP_EOL;
//     // 1er tour $fruits[0]
//     // 2eme tour $fruits[1]
//     // 3eme tour $fruits[2]
//     // 4eme tour $fruits[3]
// }

// FOREACH - POUR CHAQUE

// permet de de parcourir facilement les éléments d'un tableau. la valeur de chaque 
// elément sera copié dans une variable

// Syntaxe simple
// foreach($tableau as $element){
//     instructions;
// }

// $fruits = ['pomme', 'banane', 'pêche', 'kiwi'];

// foreach($fruits as $element){

//     echo $element .PHP_EOL;

// }

// foreach($fruits as $fruit){

//     echo $fruit .PHP_EOL;
//     // au premier tour $fruit = $fruits[0]

// }

// $user = [
//     'prenom' => 'Sony',
//     'métier' => 'Chômeur',
//     'passion' => 'DROP DATABASE'
// ];

// foreach($user as $data){
//     echo $data .PHP_EOL;
// }

// Syntaxe avec clé => valeur
// foreach($tableau as $cle => $valeur){
//     instructions;
// }

// foreach($user as $key => $value){
//     echo $key . ' : ' . $value .PHP_EOL;
// }


$eleves = [
    'cine1' => ['Sony', 'Benjamin', 'Anne'],
    'game1' => ['Arturo', 'Olivier', 'Thibaut']
];

foreach($eleves as $classe => $listeEleves){

    echo "la classe $classe : \n";
    foreach($listeEleves as $eleve){
        echo "- $eleve\n";
    }

    echo "\n";
}
