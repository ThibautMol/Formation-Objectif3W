<?php

// EXERCICE 0
// Afficher le contenu du tableau.
$vehicules=[
    'voitures' => ['C3 aircross', 'Passat', 'Dacia Sandero'],
    'Camions' => ['Renault truck', 'Mercedes-Benz Unimog']
];

foreach ($vehicules as $type_vehicule => $liste_vehicule) {
    echo "Le type de véhicule est : $type_vehicule \n";
    echo 'Cette liste contient : ' . PHP_EOL ;
    foreach($liste_vehicule as $vehicule) {
        echo "- $vehicule \n";
    }
echo "\n";
}


// EXERCICE 1

// Demandez à l'utilisateur de saisir une note une par une jusqu'à saisir -1 pour terminer la
// saisie. Chaque note est stockée dans un tableau notes, et on affichera a la fin les notes
// saisies.

$note_saisie=NULL;
$bulletin=[];

// on peut également définir le -1 comme une constante :
// const STOP = -1;
// ou
// define('STOP')=-1;
// on remplacera $note_saisie!=-1 par $note_saisie!=$STOP

$note_saisie=(int)readline('Saissez une note, saisissez -1 pour arrêter la saisie : ');

if (($note_saisie!=-1) && ($note_saisie>=0 && $note_saisie<=20)){
    while (($note_saisie!=-1) && ($note_saisie>=0 && $note_saisie<=20)) {
    
        $bulletin[]=$note_saisie;
        $note_saisie=(int)readline('Saissez une note, saisissez -1 pour arrêter la saisie : ');
    }
    }
else {
    echo 'vous n\'avez rien saisi';}

foreach($bulletin as $note) {
    echo 'La note est de ' . $note . PHP_EOL;
}



// EXERCICE 1 bis v1
// faire la somme des notes saisie et calculer la moyenne attention vous aurez besoin de
// savoir le nombre d'élément qu'il y a dans le tableau de notes ( on la déjà vu si vous
// avez oublié regardez dans la doc php).

$note_saisie=NULL;
$bulletin=[];
$total_notes=NULL;

$note_saisie=(int)readline('Saissez une note, saisissez -1 pour arrêter la saisie : ');


while (($note_saisie!=-1) && ($note_saisie>=0 && $note_saisie<=20)) {

    if (($note_saisie>=0 && $note_saisie<=20)){
    $bulletin[]=$note_saisie;
    $note_saisie=(int)readline('Saissez une note, saisissez -1 pour arrêter la saisie : ');
    }
    
    else {
        echo 'Note saisie incorrecte';
    }
}

foreach($bulletin as $note) {
    $total_notes+=$note;
}

if ($note_saisie!=-1) {
    echo 'La moyenne est de ' . $total_notes/count($bulletin) . '/20' . PHP_EOL;
}

else {
    echo 'Vous n\'avez rien saisi';
}


// EXERCICE 1 bis v2
// faire la somme des notes saisie et calculer la moyenne attention vous aurez besoin de
// savoir le nombre d'élément qu'il y a dans le tableau de notes ( on la déjà vu si vous
// avez oublié regardez dans la doc php).

$note_saisie=NULL;
$bulletin=[];

$note_saisie=(int)readline('Saissez une note, saisissez -1 pour arrêter la saisie : ');


while (($note_saisie!=-1) && ($note_saisie>=0 && $note_saisie<=20)) {

    if (($note_saisie>=0 && $note_saisie<=20)){
    $bulletin[]=$note_saisie;
    $note_saisie=(int)readline('Saissez une note, saisissez -1 pour arrêter la saisie : ');
    }
    
    else {
        echo 'Note saisie incorrecte';
    }
}

if ($note_saisie!=-1) {
    echo 'La moyenne est de ' . array_sum($bulletin)/count($bulletin) . PHP_EOL;
}

else {
    echo 'Vous n\'avez rien saisi';
}

// EXERCICE 2
// En utilisant la fonction rand(), remplir un tableau avec 20 nombres aléatoires.
// Trier ces nombres dans deux tableaux distincts.
// Le premier contiendra les valeurs positives et le second contiendra les valeurs
// négatives.
// Enfin, afficher le contenu des deux tableaux.

$compteur=NULL;
$tableau_total_nbr=[];
$tableau_nbr_negatif=[];
$tableau_nbr_positif=[];

while($compteur!=10) {
    $compteur++;
    $tableau_total_nbr[]=rand(-11,-1);
    $tableau_total_nbr[]=rand(0,9);
}

foreach ($tableau_total_nbr as $nbr) {
    if ($nbr<0) {
        $tableau_nbr_negatif[]=$nbr;
    }
    else {
        $tableau_nbr_positif[]=$nbr;
    }
}

print_r($tableau_nbr_negatif) . PHP_EOL;
print_r($tableau_nbr_positif) . PHP_EOL;


