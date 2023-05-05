<?php 

// saisir des valeurs tant que la valeur de la saisie n'est pas égale à -1
// et affiché le nombre de saisie total ainsi que la somme des valeurs saisies

$valeur=0;
$compteur=-1;
$total=0;

while ($valeur!=-1) {
    $total=($total+$valeur);
    $valeur=(float)readline('Entrez votre valeur : ');
    $compteur++;
}

echo 'Le nombre de saisie était de ' . ($compteur) . PHP_EOL;
echo 'La somme des valeurs saisies est de ' . ($total) . PHP_EOL;

// SOLUTION :

$note=0;
$somme_notes=0;
$nb_saisies=0;

$valeur=(float)readline('Entrez votre valeur : ');

while ($note !=-1) {
    $somme_notes=$somme_notes+$note;
    $nb_saisies=$nb_saisies+1;
    $note=(int)readline('Saisissez une note entière (-1 termine la saisie)' . PHP_EOL);
}

echo 'Vous avez saisies '. $nb_saisies .' et la somme de celles-ci est ' .$somme_notes . PHP_EOL;

// SOLUTION OPTMISEE :

$note=0;
$somme_notes=0;
$nb_saisies=0;

$valeur=(float)readline('Entrez votre valeur : ');

while ($note !=-1) {
    $somme_notes += $note;
    $nb_saisies++;
    $note=(int)readline('Saisissez une note entière (-1 termine la saisie)' . PHP_EOL);
}

echo 'Vous avez saisies '. $nb_saisies .' et la somme de celles-ci est ' .$somme_notes . PHP_EOL;

