<?php

// Tableau indexé 
$notes = [10, 12, 9];
// $notes = array(10,18);


// echo $notes[0] .', ' . $notes[1] . ', ' . $notes[2] ;

$eleve = ['Dhéya', 'Kardache', [12, 18, 20]];
// echo $eleve[2][1];

$eleve = ['Dhéya', 'Kardache', [[12,14,11], [15,16,4]]];

// echo $eleve[2][1][2];

// tableau associatif
// $tab = ['clef'=> valeur];
$eleve = [
    'prenom' => 'Dhéya',
    'nom' => 'Kardache',
    'notes' => [12,18,20]
];

echo $eleve['nom'] .' a eu  '. $eleve['notes'][2]. ' en philo' .PHP_EOL;


$eleves = [
    [
        'prenom' => 'Dhéya',
        'nom' => 'Kardache',
        'notes' => [12,18,20]
    ],
    [
        'prenom' => 'Arturo',
        'nom' => 'Collado',
        'notes' => [17,19,20]
    ],
    [
        'prenom' => 'Ryan',
        'nom' => 'Moro',
        'notes' => [1,9,2]
    ],
    [
        'prenom' => 'Sony',
        'nom' => 'Moscet',
        'notes' => [11,9,13]
    ]
];

// echo $eleves[3]['prenom'] . ' ' . $eleves[3]['nom'] .' : ' . $eleves[3]['notes'][1] ;



$eleve = [
    'prenom' => 'Dhéya',
    'nom' => 'Kardache',
    'notes' => [13,18,2]
];

$eleve['notes'][3] = 18;
$eleve['notes'][] = 14;
$eleve['notes'][] = 11;

print_r($eleve['notes']);