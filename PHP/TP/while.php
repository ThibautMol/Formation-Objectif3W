<?php 

// saisir des valeurs tant que la valeur de la saisie n'est pas égale à -1
// et affiché le nombre de saisie total ainsi que la somme des valeurs saisies

$valeur=0;
$compteur=0;
$total=0;

while ($valeur!=-1) {
    $valeur=(float)readline('Entrez votre valeur : ');
    $compteur=($compteur+1);
    $total=($total+$valeur);
}

echo 'Le nombre de saisie était de ' . ($compteur-1) . PHP_EOL;
echo 'La somme des valeurs saisies est de ' . ($total+1) . PHP_EOL;