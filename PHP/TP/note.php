<?php

/* 
Saisir une valeur entière et afficher :

- "Reçu avec mention Assez bien" si une note est supérieure ou égale à 12,
- "Reçu avec mention Passable" si une note est supérieure à 10 et inférieure à 12,
- "Insuffisant" si une note est inférieure à 10

*/

$note=(int)readline('Veuillez saisir une note : ');
if ($note>=12) {
    echo 'Reçu avec mention Assez bien';
}

elseif (($note>10) && ($note<12)) {
    echo 'Reçu avec mention Passable';
}

else {
    echo 'insuffisant';
}
