<?php

//commentaire une ligne
# commentaire une ligne

/*
 commentaire multiligne
*/

// pascal case
$MaVariable = 'toto';

// camel case
$maVariable = 'tata';

// snake case
$ma_variable = 'tutu';


// les chaînes de caracteres (string)
$maChaine = 'une chaine de caracteres';
// les nombres entiers (int)
$monNombre = 12;

// les nombres décimaux (float): nombre à virgule
$monFloatant = 1.2;

// les booléens (bool) : ça vous renverra true ou false
$monBool = true; 

// rien (null)
$monRien = null;

// echo $maChaine,$monNombre;

$prenom = 'Dhéya';
$age = 21;


// echo "$prenom à $age ans aujourd'hui \n";
// echo $prenom . ' à ' . $age . ' ans aujourd\'hui';

$note1 = 10;
$note2 = 7;
$moyenne = ($note1 + $note2) /2;
// echo $note2 . PHP_EOL;
// echo $prenom . ' a ' . (($note1 + $note2)/2) . ' de moyenne' . PHP_EOL; 

$note2 = 18;
// echo $note2;
// Les constantes 
define('MACONSTANTE','girafe');
const MACONSTANTE2 = 'poulpe';

// echo MACONSTANTE;
// echo MACONSTANTE2;


// operateurs
// + addition - calcule la somme - $a+$b
// - soustraction - calcule la différence - $a-$b
// * multiplication - calcule le produit - $a*$b 
// ** puissance - calcule la puissance - $a**$b
// / division - calcule la quotient - $a/$b
// % modulo - calcule du reste - $a%$b


$a = 2;
$b = 3;

echo $a+$b;