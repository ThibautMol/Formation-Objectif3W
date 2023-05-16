<?php

    // les arguments ou parametres sont des valeurs que l'on va fournir  à la fonction
    // function nomFonction($argument1, $argument2){
      
    //     // code de la fonction
    // }

 
    // function direBonjour($prenom){

    //     echo "Bonjour $prenom\n";

    // }


    // $prenom = 'Olivier';
    // $user = 'Guillaume';

    // direBonjour('Sony');// 
    // direBonjour($prenom);
    // direBonjour($user);




    // $a = 3;
    // $b = 4;

    // addition(8,2);

    // function addition($a, $b){
    //     echo $a+$b.PHP_EOL;
    // }


    // $resultat = addition2(11,2);
    
    
    // function addition2($a, $b){
    //     return $a+$b.PHP_EOL;
    // }

    // echo $a.PHP_EOL;
    // echo $b.PHP_EOL;

    // $valeur = 'toto';
    // echo $valeur;

    // echo $resultat;
    // echo addition2(11,2);



    // Vérifier l'age pour savoir si mineur ou majeure
    // ETAPE 1 - Logique
    // $age = 14;

    // if($age >= 18){
    //     echo "Vous êtes majeur(e) car vous avez $age ans";
    // }else{
    //     echo "Vous êtes mineur(e) car vous avez $age ans";
    // }

    // ETAPE 2 - Transforme en fonction

    // $age = (int) readline('Veuillez saisir votre age : ');
    // ageMajorite($age);
    function ageMajorite($age){

        if($age >= 18){
            echo "Vous êtes majeur(e) car vous avez $age ans";
        }else{
            echo "Vous êtes mineur(e) car vous avez $age ans";
        }

    }

    // Verifier age et mineure ou majeur par la date de naissance
    $birthDate = (int) readline('Veuillez saisir votre année de naissance : ');

    ageMajority($birthDate);

    function ageMajority($birthDate){

        $age = date("Y") - $birthDate;

        if($age >= 18){
            echo "Vous êtes majeur(e) car vous avez $age ans";
        }else{
            echo "Vous êtes mineur(e) car vous avez $age ans";
        }

    }

    // function ageMajority($birthDate){

    //     $age = 2023 - $birthDate;
    //     ageMajorite($age);

    // }