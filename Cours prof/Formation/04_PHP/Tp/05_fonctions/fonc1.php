<?php

// liste de films de Sony (on juge pas)
$movies = [     
    [         
        'title' => 'Pulp Fiction',  
        'year' => 1994,
        'actors' => ['Bradley Cooper', 'Zack']
    ],
    [
        'title' => 'La soupe aux choux',
        'year' => 1981,
        'actors' => ['Bradley Cooper', 'Zack']
    ],
    [
        'title' => 'Django Unchained',
        'year' => 2012,
        'actors' => ['Bradley Cooper', 'Zack']
    ],
    [
        'title' => 'Very bad trip 1',
        'year' => 2009,
        'actors' => ['Bradley Cooper', 'Zack']
    ]
];


// // ETAPE 1 - afficher tous les films
// // Methode 1 - bien pour afficher précisement les données
// echo 'Methode 1' .PHP_EOL;
// foreach($movies as $movie){

//     echo $movie['title'] . ', '.$movie['year'] .PHP_EOL;
//     foreach($movie['actors'] as $actor){
//         echo $actor .PHP_EOL;
//     }
// }


// echo PHP_EOL;
// // Methode 2 - bien pour afficher toutes les données d'un coup
// echo 'Methode 2' .PHP_EOL;

// foreach($movies as $movie){

//     foreach($movie as $label => $data){
//         // $label correspond à 'title' ou 'year' en fonction du tour de boucle
//         // $data correspond   
//         // si on veut afficher que les titres
//         // if($label === 'title'){
//         //     echo $label . ' : ' . $data .PHP_EOL;
//         // }

//         if(is_array($data)){
//             foreach($data as $value){
//                 echo '- '. $value .PHP_EOL;
//             }
//         }else{
//             echo $label . ' : ' . $data .PHP_EOL;
//         }
//     }

//     echo PHP_EOL;
    
// }


// ETAPE 2 - trier en fonction de l'année ( ici après 2000)
// $before2000 = [];
// $after2000 = [];

// foreach($movies as $movie){
//     if($movie['year'] >= 2000){
//         echo 'après 2000 : '.$movie['title'] . ', '.$movie['year'] .PHP_EOL;
//         $after2000[] = $movie; 
//     }else{
//         echo 'avant 2000 : '. $movie['title'] . ', '.$movie['year'] .PHP_EOL;
//         $before2000[] = $movie;
//     }
// }

// ETAPE 3 - on en fait 2 fonctions une qui tri avant 2000 et une apres 2000
echo "Films récents : \n";
// Fonction de tri apres 2000
function filterByRecent($movies){
    // on déclare un tableau vide pour pouvoir stocker 
    // les films qui nous intéressent
    $after2000 = [];
    // on parcours le tableau qui nous a été 
    // transmis en parametre/argument
    foreach($movies as $movie){
        // on vérifie si l'année du film parcouru 
        // est superieur ou egale à 2000
        if($movie['year'] >= 2000){
            // si superieur ou egale à 2000
            // alors on le stocke dans le tableau $after2000
            $after2000[] = $movie; 
        }
    }
    // une fois le tri effectué grace au foreach 
    // on retourne le tableau des films apres 2000
    return $after2000;
}

// on appelle la fonction en lui passant 
// en parametre/argument le tableau $movies
// qui contient tous les films
$recentMovies = filterByRecent($movies);

// on parcours le tableau que l'on vient de trier 
// pour pouvoir l'afficher
foreach($recentMovies as $movie){
    echo 'Film : '.PHP_EOL;
    echo $movie['title'] . ', '.$movie['year'] .PHP_EOL;
    echo 'Acteurs : '.PHP_EOL;
    foreach($movie['actors'] as $actor){
        echo $actor .PHP_EOL;
    }
    echo PHP_EOL;
}


echo "Films anciens : \n";
// Fonction de tri avant 2000
function filterByOld($movies){
    // on déclare un tableau vide pour pouvoir stocker 
    // les films qui nous intéressent
    $before2000 = [];
    // on parcours le tableau qui nous a été 
    // transmis en parametre/argument
    foreach($movies as $movie){
        // on vérifie si l'année du film parcouru 
        // est avant 2000
        if($movie['year'] < 2000){
            // si savant 2000
            // alors on le stocke dans le tableau $before2000
            $before2000[] = $movie; 
        }
    }
    // une fois le tri effectué grace au foreach 
    // on retourne le tableau des films avant 2000
    return $before2000;
}

// on appelle la fonction en lui passant 
// en parametre/argument le tableau $movies
// qui contient tous les films
$oldMovies = filterByold($movies);

// on parcours le tableau que l'on vient de trier 
// pour pouvoir l'afficher
foreach($oldMovies as $movie){
    echo 'Film : '.PHP_EOL;
    echo $movie['title'] . ', '.$movie['year'] .PHP_EOL;
    echo 'Acteurs : '.PHP_EOL;
    foreach($movie['actors'] as $actor){
        echo $actor .PHP_EOL;
    }
    echo PHP_EOL;
}