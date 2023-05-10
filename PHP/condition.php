<?php

// == : permet de tester l'égalité (à pas confondre avec le = simple qui attribu une valeur)
// != : permet de tester l'inégalité
// < : strictement inférieur
// > : strictement supérieur
// => : supérieur ou égal
// <= : inférieur ou égal
// && (AND) : l'opérateur ET, permet de préciser une condition en association
// || (OR) : l'opérateur OU
// === : permet de tester l'égalité sur un même type de donnée (int, float, string) mais aussi si les éléments sont égaux

// ET
// VRAI && VRAI = VRAI
// FAUX && VRAI = FAUX
// FAUX && FAUX = FAUX

// OU
// VRAI || VRAI = VRAI
// FAUX || VRAI = VRAI
// FAUX || FAUX = FAUX


// if (condition){
//     //instruction si la condition est vérifiée
// }
// else {
    // Instruction si la condition n'est pas vérifiée
// }
// elseif {}

$age=19;
if ($age >18 && $age<35);


$age = (int)readline ('saisissez votre age : ');

if ($age <18) {
    echo 'Vous êtes trop jeune pour rentrer' . PHP_EOL;
}

else {
    echo 'vous pouvez rentrer' . PHP_EOL;
}

$temps = 'pluvieux';
if ($temps==='ensoleillé') {
    echo 'il fait beau' . PHP_EOL;
}
else {
    echo 'il fait pas beau' . PHP_EOL;
}

$roleUser= 'gamer';

if ($roleUser==='admin') {
    echo 'accès à l\'espace admin' . PHP_EOL;
}

else {
    echo 'renvoie sur la page de connexion' . PHP_EOL;
}

// condition?'verifiée:'pas verifié'=ternaire

$temps = 'pluvieux';
echo $temps=== 'ensoleillé' ? 'il fait beau' : 'il fait pas beau' . PHP_EOL;

$roleUser= 'gamer';
echo $roleUser === 'admin' ? 'accès a l\'espace admin' : 'renvoie sur la page connexion' . PHP_EOL;


// SWITCH - SELON

// Si on a plus de 3 conditions il faut utiliser un switch

$coup = (int)readline('entrez votre coup : (1: lancer un sort, 2:attaquer, 3: passer son tour');

switch ($coup) {
    case 1 : 
        echo 'Sort lancé';
        break;
    
    case 2 :
        echo 'Attaque lancée';
        break;
    
    case 3 :
        echo 'Tour passé';
        break;
}