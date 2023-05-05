<?php

// Saisir la civilité , et afficher selon la civilité le bon message :
// - Bonjour Mademoiselle
// - Bonjour Madame
// - Bonjour Monsieur
// - Bonjour inconnu(e)

echo('Choisissez votre genre :' . PHP_EOL . '1: Femme' . PHP_EOL . '2: Homme' . PHP_EOL . '3: Indéterminé' . PHP_EOL);

$gender = (int)readline();

if (($gender<1) || ($gender>3)) {
    echo 'Proposition incorrecte';
}

switch ($gender) {
    case 1 : 
        echo 'Bonjour Mademoiselle';
        break;
    case 2 : 
        echo 'Bonjour Monsieur';
        break;
    case 3 :
        echo 'Bonjour inconnu(e)';
        break;
}
