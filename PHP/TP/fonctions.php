<?php

// Exercice 1 :


function valeur_abolue () {
 
    $a=(int)readline('Donnez votre nombre pour le calcul de la valeur absolue : ');
    if ($a>=0){
        return ($a);
    }
    else {
        return ($a*(-1));
    }
}

// echo valeur_abolue();

// Exercice 2 :


function vowels_remplacement() {

    $word=(string)readline('Donnez votre mot : ');

    $vowels = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
    $onlyconsonants = str_replace($vowels, "", $word);

     return $onlyconsonants;
}

// echo vowels_remplacement() . PHP_EOL;

// Exercice 3 :

function vowels_count () {
    $word_to_count=(string)readline('Donnez votre mot : ');
    $list=[];
    $number_vowels=NULL;
    $vowels = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");

    $list=preg_split("//",$word_to_count,-1,PREG_SPLIT_NO_EMPTY);

    foreach ($list as $element) {
        if (in_array($element,$vowels)) {
            $number_vowels++;
        }
    }

    return $number_vowels;
}

// echo'Le nombre de voyelles est de : ' . vowels_count() . PHP_EOL;

// Exercice 4 v1 : 


function reverse_sentence_v1 () {
    $string = readline('Donnez votre phrase à inverser : ');
    $new_string_array = explode(" ",$string);
    $total=count($new_string_array);
    $new_string=NULL;
    
    if ($string !== "") {
        for($j=$total-1; $j >= 0; $j--) {
                $new_string .= trim($new_string_array[$j])." ";
            } 
        
        return ($new_string);
    } else {
        return ($error='Phrase incorrecte' . PHP_EOL);
    }
    }

// echo 'votre phrase inversée est : ' . reverse_sentence_v1() . PHP_EOL;

// Exercice 4 v1 : 


function reverse_sentence_v2 () {
    $string = readline('Donnez votre phrase à inverser : ');
    $new_string_array = explode(" ",$string);
    $array_reversed=[];
    $reversed_sentence=NULL;

    $array_reversed=array_reverse($new_string_array);

    foreach ($array_reversed as $word) {
        $reversed_sentence.=$word . " ";
    }

    return $reversed_sentence;
}

// echo 'votre phrase inversée est : ' . reverse_sentence_v2() . PHP_EOL;


// Exercice 5 : 

