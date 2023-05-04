<?php 

echo "bonjour tout le monde \n";
echo "le paramétrage c'est pour les faibles\n";

// Pour déclarer une variable il faut toujours mettre $
// quand on nomme une variable, PHP est semble aux majuscules, ça peut rendre unique chaque variable.
// Pas d'accents et toujours en anglais les variables
// = est un caractère d'affectation de valeur à une variable
// Les constantes sont toujours en majuscule comme dans python
// premier caractère après ton $ c'est une lettre ou un underscore

// Commentaire une ligne

/*
commentaire multiligne
*/

// Pascal case
$MaVariable='toto';

// Camel Case
$maVariablePomme='tata';

// Snake Case
$ma_variable='tutu';

/*Principaux types de nos valeurs

    Les chaines de caractères (string): zadazdzadad
    Les chaînes de nombres entiers (int) : 1257141
    Les chaîne de nombres décimaux (float) : 10.25
    Les booléens (bool) : ça renvoi true ou false
    rien (null)
*/

echo "$ma_variable";

// la virgule permet d'ajouter les variables entre elles. 

$prenom='Thibaut';
$age='32';
echo "Bonjour, je m'appelle $prenom et j'ai $age ans \n";

// la " est utilisée pour Echo pour afficher le texte 
// mais ne prennent pas en compte les calculs.

echo $prenom . ' à ' . $age . ' ans' . "\n";

// le . permet de concaténation des éléments.

echo "j'aime la choucroute \n";

$note1=15;
$note2=12;

echo $prenom . ' a ' . (($note1 + $note2)/2) . ' de moyenne'. PHP_EOL;

/* Les constantes (elles n'ont pas de dollar car elles sont définies avant)
par convention les constantes sont écrites en majuscule. */

// define est une fonction permet de définir une constante avec son contenue

define('MACONSTANTE','girafe');
const MACONSTANTE2 = 'pouple';

echo MACONSTANTE . PHP_EOL;
echo MACONSTANTE2 . PHP_EOL;

// une variable ne demarre jamais par un chiffre après le $

function toto ($p1, $p2) {};

// Mixed signifie que l'on peut mettre à la fois du string, bool, ou int/float

// Une constante peut être aussi un tableau depuis PHP7

// Operateurs : 
// + addition - calcule la somme - $a+$b
// - soustraction - calcule la différence - $a - $b
// * multiplication - calcule le produit - $a*$b
// ** puissance - calcule la puissance - $a**$b
// / division - calcule le quotient - $a/$b
//  % modulo - calcule du reste - $a%$b


// echo $a+$b donnera 5
// on peut faire une somme avec une variable $B='3adae'
// le calcul sera quand même fait, il mettra un warning en plus


