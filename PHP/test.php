<?php
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlentities($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}


$donnees = "a\dza47!!!!<php>";

echo valid_donnees($donnees);