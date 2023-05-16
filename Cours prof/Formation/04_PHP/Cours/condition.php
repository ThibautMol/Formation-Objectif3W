<?php
// == : permet de tester l'égalité (à pas confondre avec le = simple qui sert a l'affectation des variable)
// != : permet de tester l'inégalité
// < : strictement inférieur  
// <= : inférieur ou égale 
// > : strictement supérieur
// >= : supérieur ou égale 
// && (AND) : l'opérateur ET, permet de préciser une condition en associant des cas logiques
// || (OR) : l'opérateur OU
// === : permet de tester l'égalité sur un même type de donnée

// ET 
// VRAI && VRAI = VRAI
// FAUX && VRAI = FAUX
// FAUX && FAUX = FAUX

// OU 
// VRAI || VRAI = VRAI
// FAUX || VRAI = VRAI
// FAUX || FAUX = FAUX


// IF

// if(condition){
//     // instruction si la condition est vérifiée
// }

// $age = 19;
// if($age < 18){
//     // instruction si la condition est vérifiée
//     echo 'Vous êtes trop jeune pour rentrer' .PHP_EOL;
// }

// $age = 19;
// if($age > 18 && $age < 35){
//     // instruction si la condition est vérifiée
//     echo 'Vous êtes plus ou moins jeune';
// }

// IF ELSE
// $age = (int) readline('saisissez votre age : ');
// if($age === 18){
//     // instruction si la condition est vérifiée
//     echo 'égale';
// }else{
//     echo 'pas égale';
// }

// if(condition){
//     // instruction si la condition est vérifiée
// }else{
//     // instruction si la condition n'est pas vérifiée
// }

// $temps = 'ensoleillé';

// if($temps === 'ensoleillé'){
//     echo 'il fait beau';
// }else{
//     echo 'il fait pas beau';
// }



// $roleUser = 'gamer';

// if($roleUser === 'admin'){
//     echo 'Accès a l\'espace admin'.PHP_EOL;
// }else{
//     echo 'renvoie sur la page de connexion'.PHP_EOL;
// }

// condition ? 'verifiée' : 'pas verifié'  = ternaire
// $temps = 'pluvieux';
// echo $temps === 'ensoleillé' ? 'il fait beau'.PHP_EOL : 'il fait pas beau'.PHP_EOL;


// IF ELSEIF ELSE

// if(condition1){
//     // instruction si la condition est vérifiée
// }elseif(condition2){
//     // instruction si la condition1 n'est pas vérifiée
// }else{
//     // instruction si aucune condition n'est pas vérifiée
// }

// $salaire = (int) readline('Saisissez votre salaire : ');

// if($salaire < 1200){
//     echo 'Vous êtes payé en dessous du SMIC';
// }elseif ($salaire < 1800){
//     echo 'tu survie';
// }elseif($salaire < 2500){
//     echo 'Vous êtes payé raisonnablement bien';
// }else{
//     echo 'Je veux ton travail';
// }


// SWITCH - SELON
$coup = (int) readline('entrez votre coup : (1: lancer un sort, 2: attaquer, 3: passer son tour )' );

switch($coup){
    case 1:
        echo 'Sort lancer';
        break;
    case 2: 
        echo 'Attaque lancer';
        break;
    case 3: 
        echo 'Passe son tour';
        break;
    default:
        echo 'action inconnue';
}
