<?php

// saisir des valeurs tant que la valeur de la saisie n'est pas égale à -1
// et affiché le nombre de saisie total ainsi que la somme des valeurs saisies

// $sommeNotes = 0;
// $note = 0;
// $nbSaisies = 0;

// solution 1 Micka la meilleur pour vous 
// while($note != -1){
//     $note = (int) readline('Saisissez une note entiere (-1 termine la saisie)');
//     if($note != -1){
//         $sommeNotes = $sommeNotes + $note;
//         $nbSaisies = $nbSaisies + 1;
//     }
// }
// echo "vous avez saisies $nbSaisies notes et la somme de celles-ci est $sommeNotes";

// solution 2 Ryan la méthode pas propre et pas optimisé 
// while($note != -1){
//     $note = (int) readline('Saisissez une note entiere (-1 termine la saisie)');
//     $sommeNotes = $sommeNotes + $note;
//     $nbSaisies = $nbSaisies + 1;
// }
// echo 'vous avez saisies'.$nbSaisies-1 . ' notes et la somme de celles-ci est' .$sommeNotes+1;

// solution 3 
$nbSaisies = 0;
$sommeNotes = 0;
$note = (int) readline('Saisissez une note entiere (-1 termine la saisie)');

while($note != -1){
    $sommeNotes = $sommeNotes + $note;
    $nbSaisies = $nbSaisies + 1;
    $note = (int) readline('Saisissez une note entiere (-1 termine la saisie)');
}
echo "vous avez saisies $nbSaisies notes et la somme de celles-ci est $sommeNotes";


// Solution 3 optimisée
$nbSaisies = 0;
$sommeNotes = 0;
$note = (int) readline('Saisissez une note entiere (-1 termine la saisie)');

while($note != -1){
    $sommeNotes += $note; // $sommeNotes = $sommeNotes + $note
    $nbSaisies++; // $nbSaisies = $nbSaisies + 1
    $note = (int) readline('Saisissez une note entiere (-1 termine la saisie)');
}
echo "vous avez saisies $nbSaisies notes et la somme de celles-ci est $sommeNotes";