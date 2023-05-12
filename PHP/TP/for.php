<?php

// // en fonction d'un nombre d'itérations saisies, faire la somme 
// // des entiers saisis et afficher le résultat ainsi que le nombre d'itérations.

// echo 'Exercice Damien' . PHP_EOL;

// $nbr_saisies=(int)readline('Combien de saisies voulez-vous faire ? ');
// $somme=NULL;
// for ($saisie=0; $saisie<$nbr_saisies; $saisie++) {
//     $valeur=(int) readline('Saisissez l\'entier choisi a additionner ');
//     $somme+=$valeur;
// }

// echo 'Vous avez fait ' . $nbr_saisies . ' saisies' . ' et l\'addition de ces dernières représente : ' . $somme . PHP_EOL;


// // Boucle FOR tableau numéroté
// echo PHP_EOL;
// echo 'Boucle FOR Tableau numéroté :' . PHP_EOL;

// $i=0;
// $bob=['Bob Dylan', 'ggmail@kikou.fr', 34];
// $kevin=['Kevin Spacy', 'kkmail@kikou.fr', 22];
// $lorie=['Lorie Tameilleureamie', 'lolomail@kikou.fr', 15];

// $students=[$bob,$kevin,$lorie];

// for ($i=0; $i<=count($students)-1; $i++)
// {
//     echo 'je m\'appelle ' . $students[$i][0] . ', mon adresse email est ' . $students[$i][1] . ' et j\'ai ' . $students[$i][2] . " ans" . PHP_EOL ;
// }


// // Boucle FOREACH tableau numéroté
// echo PHP_EOL;
// echo 'Boucle FOREACH Tableau numéroté :' . PHP_EOL;

// $bob=['Bob Dylan', 'ggmail@kikou.fr', 34];
// $kevin=['Kevin Spacy', 'kkmail@kikou.fr', 22];
// $lorie=['Lorie Tameilleureamie', 'lolomail@kikou.fr', 15];

// $students=[$bob,$kevin,$lorie];

// foreach ($students as $student) {
//     echo 'je m\'appelle ' . $student[0] . ', mon adresse email est ' . $student[1] . ' et j\'ai ' . $student[2] . " ans" . PHP_EOL ;
// }


// // Boucle Tableau associatif
// echo PHP_EOL;
// echo 'Boucle Tableau associatif :' . PHP_EOL;

// $bob=[
//     'name' => 'Bob Dylan', 
//     'email'=> 'ggmail@kikou.fr', 
//     'age' => 34];
// $kevin=[
//     'name' => 'Kevin Spacy', 
//     'email'=> 'kkmail@kikou.fr', 
//     'age' => 22];
// $lorie=[
//     'name' => 'Lorie Tameilleureamie', 
//     'email'=> 'lolomail@kikou.fr', 
//     'age' =>15];

// foreach ($bob as $bb) {
//     echo $bb . PHP_EOL;
// }

// foreach ($kevin as $kk) {
//     echo $kk . PHP_EOL;
// }

// foreach ($lorie as $lolo) {
//     echo $lolo . PHP_EOL;
// }

// // Boucle Tableau associatif dans tableau
// echo PHP_EOL;
// echo 'Boucle Tableau associatif dans tableau:' . PHP_EOL;

// $bob=[
//     'name' => 'Bob Dylan', 
//     'email'=> 'ggmail@kikou.fr', 
//     'age' => 34];
// $kevin=[
//     'name' => 'Kevin Spacy', 
//     'email'=> 'kkmail@kikou.fr', 
//     'age' => 22];
// $lorie=[
//     'name' => 'Lorie Tameilleureamie', 
//     'email'=> 'lolomail@kikou.fr', 
//     'age' =>15];

// $students=[$bob,$kevin,$lorie];

// foreach ($students as $student) {
//     echo 'je m\'appelle ' . $student['name'] . ', mon adresse email est ' . $student['email'] . ' et j\'ai ' . $student['age'] . " ans" . PHP_EOL ;
// }

// // Boucle Tableau associatif avec property et propertyValue
// echo PHP_EOL;
// echo 'Boucle Tableau associatif avec property et propertyValue :' . PHP_EOL;

// $bob=[
//     'name' => 'Bob Dylan', 
//     'email'=> 'ggmail@kikou.fr', 
//     'age' => 34];
// $kevin=[
//     'name' => 'Kevin Spacy', 
//     'email'=> 'kkmail@kikou.fr', 
//     'age' => 22];
// $lorie=[
//     'name' => 'Lorie Tameilleureamie', 
//     'email'=> 'lolomail@kikou.fr', 
//     'age' =>15];

// foreach ($bob as $property => $propertyValue) {
//     echo $property . ' : ' . $propertyValue . PHP_EOL;
// }

// foreach ($kevin as $property => $propertyValue) {
//     echo $property . ' : ' . $propertyValue . PHP_EOL;
// }

// foreach ($lorie as $property => $propertyValue) {
//     echo $property . ' : ' . $propertyValue . PHP_EOL;
// }

// // Tableau associatif avec array_key_exists, in_array et _array_search
// echo PHP_EOL;
// echo 'Boucle Tableau associatif avec array_key_exists, in_array et _array_search :' . PHP_EOL;

// $bob=[
//     'name' => 'Bob Dylan', 
//     'email'=> 'ggmail@kikou.fr', 
//     'age' => 34];
// $kevin=[
//     'name' => 'Kevin Spacy', 
//     'email'=> 'kkmail@kikou.fr', 
//     'age' => 22];
// $lorie=[
//     'name' => 'Lorie Tameilleureamie', 
//     'email'=> 'lolomail@kikou.fr', 
//     'age' =>15];

// #Vérifie qu'une clef existe dans le tableau bob
// if (array_key_exists('age', $bob)) {
//     echo 'Bob a bien un âge dans son tableau' . PHP_EOL;
// }

// else {
//     echo 'la commande array key exists n\'a pas marchée' . PHP_EOL;
// }

// #Vérifie que la donnée '22' est bien dans le tableau kevin
// if (in_array('22',$kevin)) {
//     echo 'Kévin à bien inscrit 22 ans dans son tableau' . PHP_EOL;
// }

// else {
//     echo 'la commande in array n\'a pas marchée' . PHP_EOL;
// }

// #Vérifie que la donné email est bien contenue dans le tableau lorie
// if (array_search('lolomail@kikou.fr', $lorie)) {
//     echo 'L\'email de Lorie a été trouvé' . PHP_EOL;
// }

// else {
//     echo 'la commande array search n\'a pas marchée' . PHP_EOL;
// }


// Tableau associatif avec recherche dans le tableau et impression tableau correspondant
// utilisation de l'élément $$ pour transformer le readline en variable
echo PHP_EOL;
echo 'Tableau associatif avec recherche dans le tableau et impression tableau correspondant :' . PHP_EOL;

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

$student_pick=readline('Choisissez quel élève vous voulez consulter entre bob, kevin et lorie : ');

if (isset($$student_pick)) {
    if (in_array($$student_pick, $students)) {
        echo 'c\'est bon, l\'entrée ' .$student_pick . ' existe, voici son contenue : ' . PHP_EOL;
    
        foreach ($$student_pick as $key => $key_value) {
        echo $key . ' : ' . $key_value . PHP_EOL;
    }
    }
}

else {
    echo 'Cette personne n\'est pas présente dans la liste';
}







