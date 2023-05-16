<?php 

// En fonction d'un nombre d'itérations saisies, faire la somme 
// des entiers saisis et afficher le résultat ainsi que le nombre
// d'itérations saisies  

// Demander le nombre de factures à saisir, puis faire la somme 
// des dépenses saisis et afficher la somme totale des dépenses ainsi que le nombre
// de factures saisies 

$nombreFactures = (int) readline('Combien de factures voulez-vous saisir ?');
$totalDepenses = 0;

for($i = 1; $i <= $nombreFactures; $i++){

    $depense = (int) readline('Veuillez saisir la dépense de votre facture n°'. $i .' : (arrondissez) ');
    $totalDepenses = $totalDepenses + $depense;

}

// echo "Vous avez saisi $nombreFactures factures, pour un montant de $totalDepenses €.";
echo 'Vous avez saisi '. $nombreFactures.' facture'. ($nombreFactures > 1 ? 's' : '') .', pour un montant de ' .$totalDepenses.' €.';





