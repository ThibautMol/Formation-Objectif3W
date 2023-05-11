<?php

// en fonction d'un nombre d'itérations saisies, faire la somme 
// des entiers saisis et afficher le résultat ainsi que le nombre d'itérations.

echo 'Exercice Damien' . PHP_EOL;

$nbr_saisies=(int)readline('Combien de saisies voulez-vous faire ? ');
$somme=NULL;
for ($saisie=0; $saisie<$nbr_saisies; $saisie++) {
    $valeur=(int) readline('Saisissez l\'entier choisi a additionner ');
    $somme+=$valeur;
}

echo 'Vous avez fait ' . $nbr_saisies . ' saisies' . ' et l\'addition de ces dernières représente : ' . $somme . PHP_EOL;


// Boucle FOR tableau numéroté
echo PHP_EOL;
echo 'Boucle FOR Tableau numéroté :' . PHP_EOL;

$i=0;
$bob=['Bob Dylan', 'ggmail@kikou.fr', 34];
$kevin=['Kevin Spacy', 'kkmail@kikou.fr', 22];
$lorie=['Lorie Tameilleureamie', 'lolomail@kikou.fr', 15];

$students=[$bob,$kevin,$lorie];

for ($i=0; $i<=count($students)-1; $i++)
{
    echo 'je m\'appelle ' . $students[$i][0] . ', mon adresse email est ' . $students[$i][1] . ' et j\'ai ' . $students[$i][2] . " ans" . PHP_EOL ;
}


// Boucle FOREACH tableau numéroté
echo PHP_EOL;
echo 'Boucle FOREACH Tableau numéroté :' . PHP_EOL;

$bob=['Bob Dylan', 'ggmail@kikou.fr', 34];
$kevin=['Kevin Spacy', 'kkmail@kikou.fr', 22];
$lorie=['Lorie Tameilleureamie', 'lolomail@kikou.fr', 15];

$students=[$bob,$kevin,$lorie];

foreach ($students as $student) {
    echo 'je m\'appelle ' . $student[0] . ', mon adresse email est ' . $student[1] . ' et j\'ai ' . $student[2] . " ans" . PHP_EOL ;
}


// Boucle Tableau associatif
echo PHP_EOL;
echo 'Boucle Tableau associatif :' . PHP_EOL;

$bob=[
    'name' => 'Bob Dylan', 
    'email'=> 'ggmail@kikou.fr', 
    'age' => 34];
$kevin=[
    'name' => 'Kevin Spacy', 
    'email'=> 'kkmail@kikou.fr', 
    'age' => 22];
$lorie=[
    'name' => 'Lorie Tameilleureamie', 
    'email'=> 'lolomail@kikou.fr', 
    'age' =>15];

foreach ($bob as $bb) {
    echo $bb . PHP_EOL;
}

foreach ($kevin as $kk) {
    echo $kk . PHP_EOL;
}

foreach ($lorie as $lolo) {
    echo $lolo . PHP_EOL;
}

// Boucle Tableau associatif dans tableau
echo PHP_EOL;
echo 'Boucle Tableau associatif dans tableau:' . PHP_EOL;

$bob=[
    'name' => 'Bob Dylan', 
    'email'=> 'ggmail@kikou.fr', 
    'age' => 34];
$kevin=[
    'name' => 'Kevin Spacy', 
    'email'=> 'kkmail@kikou.fr', 
    'age' => 22];
$lorie=[
    'name' => 'Lorie Tameilleureamie', 
    'email'=> 'lolomail@kikou.fr', 
    'age' =>15];

$students=[$bob,$kevin,$lorie];

foreach ($students as $student) {
    echo 'je m\'appelle ' . $student['name'] . ', mon adresse email est ' . $student['email'] . ' et j\'ai ' . $student['age'] . " ans" . PHP_EOL ;
}

// Boucle Tableau associatif avec property et propertyValue
echo PHP_EOL;
echo 'Boucle Tableau associatif avec property et propertyValue :' . PHP_EOL;

$bob=[
    'name' => 'Bob Dylan', 
    'email'=> 'ggmail@kikou.fr', 
    'age' => 34];
$kevin=[
    'name' => 'Kevin Spacy', 
    'email'=> 'kkmail@kikou.fr', 
    'age' => 22];
$lorie=[
    'name' => 'Lorie Tameilleureamie', 
    'email'=> 'lolomail@kikou.fr', 
    'age' =>15];

foreach ($bob as $property => $propertyValue) {
    echo $property . ' : ' . $propertyValue . PHP_EOL;
}

foreach ($kevin as $property => $propertyValue) {
    echo $property . ' : ' . $propertyValue . PHP_EOL;
}

foreach ($lorie as $property => $propertyValue) {
    echo $property . ' : ' . $propertyValue . PHP_EOL;
}