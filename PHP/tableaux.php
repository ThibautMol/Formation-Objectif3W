<?php 

// Tableau indexés

$notes = [10,12,9];
// $notes = array(10,18); ancienne version des tableaux



echo $notes [1] . PHP_EOL;
echo $notes [0] . PHP_EOL;

$eleve=['Thibaut' , 'Molinié', [13,18,14]];
// on cible élève
echo $eleve [0] . PHP_EOL;
// on cible 18
echo $eleve [2][1] . PHP_EOL;

$eleve = ['Thibaut', 'Molinié', [[12,14,11],[15,16,4]]];
// on cible 14
echo $eleve [2] [0] [1] . PHP_EOL;
// on cible 4
echo $eleve [2] [1] [2] . PHP_EOL;

$eleve = ['Thibaut', 'Molinié', [[12,14,11, ['bernard','bianca',['edouard']]]]];
// on vise edouard
echo $eleve[2][0][3][2][0] . PHP_EOL;

// tableau associatif 

$eleve = [
    'prenom' => 'Thibaut',
    'nom'=>'Molinié',
    'notes'=>[12,18,20]
];

echo $eleve['prenom'] . PHP_EOL;
echo $eleve['notes'][2] . PHP_EOL;


$eleves = [
    [
        'nom' => 'Molinié', 'prenom' => 'Thibaut', 'note' => [12,13,15] 
    ],
    [
        'nom' => 'Collado', 'prenom' => 'Arturo', 'note' => [17,16,18] 
    ],
    [
        'nom' => 'Moro', 'prenom' => 'Ryan', 'note' => [20,11,9] 
    ]
];

// On vise MORO

echo $eleves [2]['nom'] . PHP_EOL;

// On vise les données de Thibaut

echo $eleves [0] ['nom'] . ' ' . $eleves [0] ['prenom'] . ' ' . $eleves [1] ['note'] [1] . PHP_EOL;

// On mixe des données

echo $eleves [1] ['nom'] . ' ' . $eleves [0] ['prenom'] . ' ' . $eleves [2] ['note'] [1] . PHP_EOL;


// Si on veut ajouter une note : 

$eleve = [
    'prenom' => 'Thibaut',
    'nom'=>'Molinié',
    'notes'=>[12,18,20]
];

$eleve ['notes'] [3]=18; #ajoute une note en position 3.
$eleve['notes'] []=2; #ajoute une note à la fin du tableau automatiquement.
$eleve['notes'] []=4; #ajoute une note à la fin du tableau automatiquement.

print_r ($eleve['notes']);