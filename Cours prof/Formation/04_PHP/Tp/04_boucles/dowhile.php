<?php
// exercice
// Saisir des données et s'arreter des que leur somme dépasse 500

// REPETER 
//     REQUETE "saisissez une valeur", val
//     somme = somme + val
// TANT QUE somme <= 500

$somme = 0;

do{
    $val = (int) readline("saisissez une valeur : ");
// exemple : 1er tour 0 = 0 + 250(valeur saisie);
// exemple : 2eme tour 250 = 250 + 50(valeur saisie) 
    $somme = $somme + $val;

}while($somme <= 500);

echo "la somme de toutes les valeurs saisies est de $somme";


// exercice 2 pdf algo
// ecrire un code qui demande un nombre compris entre 10 et 20.
// jusqu'à ce que la réponse connvienne
// en cas de reponse superieur a 20 afficher plus petit
// en cas de reponse inferieur a 10 afficher plus grand

do{

    $nombre = (int) readline("Veuillez saisir un nombre entre 10 et 20 : ");
    if( $nombre < 10 ){
        echo "Plus grand ! \n";
    }elseif( $nombre > 20 ){
        echo "Plus petit ! \n";
    }

}while( $nombre < 10 || $nombre > 20 );

echo "Bravo";

