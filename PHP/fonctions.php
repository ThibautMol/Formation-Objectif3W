<?php

// les arguments ou parametres sont des aleurs que l'on va fournir à la fonction

// function nomFonction1 ($argument1,$argument2) {
//     // code de la fonction
// }

// function nomFonction2 ($parametre1,$parametre2) {
//     // code de la fonction
// }

// function direBonjour($prenom){
//     echo "Bonjour $prenom";
// }

// direBonjour('Sony');

$guess=NULL;
function devinette($guess) {
    $number=random_int(0,15);
    while ($number!=$guess) {
        $guess=readline("Entrez votre chiffre : ");
        if ($guess<$number) {
            echo "Raté trop petit, try again \n";
        }
        elseif ($guess>$number) {
            echo "Raté trop grand, try again \n";
    }
    }
    return "c'est gagné, le chiffre était $guess \n";
}

// echo devinette($guess);

// l'utilisateur saisi son âge, je veux vérifier s'il est majeur ou mineur et qui renvoie s'il est majeur ou mineur

const LEGAL_AGE=18 ;
$age=NULL;
function majeur_ou_mineur($age) {
    $age=readline('Saisissez votre age : ');
    if (($age<LEGAL_AGE) && ($age>=0)) {
        echo 'vous êtes mineur vous rentrez pas' . PHP_EOL;
    }
    elseif ($age<0) {
        echo 'vous n\'êtes pas encore né, dommage!'. PHP_EOL;
    }
    else {
        echo 'c\'est bon vous pouvez entrer'. PHP_EOL;
    }
}

// majeur_ou_mineur($age);

// vérifier age et mineure ou majeur par la date de naissance

$birth_date=NULL;
function majority_test($birth_date){

    $age_majority=18;
    $current_year=2023;
    $birth_date=(int)readline('Veuillez saisir votre année de naissance : ');
    $age=($current_year)-($birth_date);
        if ($age>=$age_majority) {
            echo "vous êtes majeur et votre âge est de $age";
        }
        else {
            echo "Bien tenté, tu n'as que $age, reviens plus tard, p'tit con";
        }
}


// majority_test($birth_date);


// Cherche 4 films, créer un tableau en stockant le nom du film et l'année de parution. 
// Un tableau pour les films et un tableau par film. Deux films avant 2000 et deux après.
// On créé une fonction qui n'affiche que les films après 2000. 
// (ou une fonction qui permet de choisir quelle année nous intéresse avant ou après 2000)
// afficher avec un return les films retenus. 

// EXERCICE V1
function find_movie_by_date() {
   
    $movie_list=[
        ['name'=> 'Fight Club',
        'date' => '1999'],
        ['name'=> 'Ex Machina',
        'date'=> '2014'],
        ['name'=> 'Donnie Darko',
        'date'=> '2001'],
        ['name'=> 'Toy Story',
        'date'=> '1995']
    ];
 
    foreach ($movie_list as $movie) {
        if ($movie['date']>'2000') {
            echo 'le nom du film est : ' . $movie['name'] . PHP_EOL . 'et sa date est ' . $movie['date'] . PHP_EOL;
        }
    }
}

// echo find_movie_by_date();

// EXERCICE V2

$movie_list=[
    ['name'=> 'Fight Club',
    'date' => '1999'],
    ['name'=> 'Ex Machina',
    'date'=> '2014'],
    ['name'=> 'Donnie Darko',
    'date'=> '2001'],
    ['name'=> 'Toy Story',
    'date'=> '1995']
];

function find_movie_by_date_v2($movie_list) {
   $choice=(int)readline("Tapez 1 pour un film supérieur aux années 2000 et 2 pour l'inverse : ");
 
   if (($choice==1) || ($choice==2)) {
        foreach ($movie_list as $movie) {
            if (($choice==1) && ($movie['date']>'2000')) {
                echo 'le nom du film est : ' . $movie['name'] . PHP_EOL . 'et sa date est ' . $movie['date'] . PHP_EOL;
            }
            elseif (($choice==2) && ($movie['date']<'2000')) {
                echo 'le nom du film est : ' . $movie['name'] . PHP_EOL . 'et sa date est ' . $movie['date'] . PHP_EOL;}
        }
    }
    else {
        echo "Choix incorrect";
    }
}

echo find_movie_by_date_v2($movie_list);