<?php
// exercice
// Saisir des données et s'arrêter dès que leurs sommes dépasse 500

$valeur=NULL;
$somme=NULL;
$compteur=NULL;

do {
    $valeur=(int)readline('Entrez une valeur :');
    $somme+=$valeur;
    $compteur++;
    echo 'La somme est de ' . $somme . PHP_EOL;
}while ($somme<500);

echo 'Le seuil était de 500, vous l\'avez atteint en ' . $compteur . ' essais';