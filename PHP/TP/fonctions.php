<?php

// Exercice 1 v1 :


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

// Exercice 1 v2 :

// $user_num=readline('Saisir un entier : ');
// $num_abs=abs($user_num);
// echo "la valeur absolue de $user_num est $num_abs";


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
    $word_to_count=mb_strtolower($word_to_count);
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
    $j=count($new_string_array);
    $new_string=NULL;
    
    if ($string !== "") {
        for($j--; $j >= 0; $j--) {
                $new_string .= trim($new_string_array[$j])." ";
            } 
        
        return ($new_string);
    } else {
        return ($error='Phrase incorrecte' . PHP_EOL);
    }
    }

// echo 'votre phrase inversée est : ' . reverse_sentence_v1() . PHP_EOL;

// Exercice 4 v2 : 


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


// Exercice 5 v1: 

function random_password_v1(){
    $random_characters = (int)readline('Choisissez combien vous-voulez de caractères pour chaque catégorie (majuscules, minuscules, chiffres et symboles) : ');
  
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";
  
    $lower_case = str_shuffle($lower_case);
    $upper_case = str_shuffle($upper_case);
    $numbers = str_shuffle($numbers);
    $symbols = str_shuffle($symbols);
  
    $random_password = substr($lower_case, 0, $random_characters);
    $random_password .= substr($upper_case, 0, $random_characters);
    $random_password .= substr($numbers, 0, $random_characters);
    $random_password .= substr($symbols, 0, $random_characters);
  
    return  str_shuffle($random_password);
 }

//  echo 'votre mot de passe est : ' . random_password_v1() . PHP_EOL;


// Exercice 5 v2: 

 function random_password_v2(){
    $random_lower_case = (int)readline('Choisissez combien vous-voulez de caractères en minuscule : ');
    $random_upper_case = (int)readline('Choisissez combien vous-voulez de caractères en Majuscule : ');
    $random_numbers = (int)readline('Choisissez combien vous-voulez de caractères en chiffres : ');
    $nbr_symbols = (int)readline('Choisissez combien vous-voulez de symboles : ');

    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";
    $random_symbols = NULL;
  
    $lower_case = strtolower(str_shuffle($upper_case));
    $upper_case = str_shuffle($upper_case);
    $numbers = str_shuffle($numbers);

    $repeat=($nbr_symbols)/strlen($symbols);

    while ($repeat>0) {
        $random_symbols .= str_shuffle($symbols);
        $repeat--;
    }
 
    $random_password = substr($lower_case, 0, $random_lower_case);
    $random_password .= substr($upper_case, 0, $random_upper_case);
    $random_password .= substr($numbers, 0, $random_numbers);
    $random_password .= substr($random_symbols, 0, $nbr_symbols);
  
    return  str_shuffle($random_password);
 }

//  echo 'votre mot de passe est : ' . random_password_v2() . PHP_EOL;

// Exercice 6 :

function finding_book_by_author_v1() {
    $books = [
        ['name'=>'nom du livre1',
        'author'=>'Bob',
        'release_year'=> 1995,
        'purchase_url'=>'http://example1.com'],
        ['name'=>'nom du livre2',
        'author'=>'Bob',
        'release_year'=> 1802,
        'purchase_url'=>'http://example2.com'],
        ['name'=>'nom du livre3',
        'author'=>'Sophie',
        'release_year'=> 2023,
        'purchase_url'=>'http://example3.com'],
        ['name'=>'nom du livre4',
        'author'=>'Sophie',
        'release_year'=> 2002,
        'purchase_url'=>'http://example4.com'],
        ['name'=>'nom du livre5',
        'author'=>'Bob',
        'release_year'=> 1923,
        'purchase_url'=>'http://example5.com'],
        ['name'=>'nom du livre6',
        'author'=>'Alex',
        'release_year'=> 2018,
        'purchase_url'=>'http://example6.com']
    ];

    $author_pick=readline('Choisissez les oeuvres parmi les auteurs suivants Bob, Sophie et Alex : ');
    $i=0;

    while ($i<count($books)){
        if (array_search($author_pick, $books[$i])){
            // echo 'c\'est bon ';
            print_r($books[$i]);
        }
        $i++;
    }
}

// echo finding_book_by_author_v1();


function finding_book_by_author_v2($author_pick) {
    $books = [
        ['name'=>'nom du livre1',
        'author'=>'Bob',
        'release_year'=> 1995,
        'purchase_url'=>'http://example1.com'],
        ['name'=>'nom du livre2',
        'author'=>'Bob',
        'release_year'=> 1802,
        'purchase_url'=>'http://example2.com'],
        ['name'=>'nom du livre3',
        'author'=>'Sophie',
        'release_year'=> 2023,
        'purchase_url'=>'http://example3.com'],
        ['name'=>'nom du livre4',
        'author'=>'Sophie',
        'release_year'=> 2002,
        'purchase_url'=>'http://example4.com'],
        ['name'=>'nom du livre5',
        'author'=>'Bob',
        'release_year'=> 1923,
        'purchase_url'=>'http://example5.com'],
        ['name'=>'nom du livre6',
        'author'=>'Alex',
        'release_year'=> 2018,
        'purchase_url'=>'http://example6.com']
    ];

    $author_pick=readline('Choisissez les oeuvres parmi les auteurs suivants Bob, Sophie et Alex : ');

    foreach ($books as $book) {
        if (array_search($author_pick, $book)){
            print_r($book);
            }
        }
}

// finding_book_by_author_v2($author_pick);


// Version 3 php affichage : 

$books = [
    ['cover' => 'https://m.media-amazon.com/images/I/41gr3r3FSWL.jpg',
    'name'=>'nom du livre1',
    'author'=>'Bob',
    'release_year'=> 1995,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://cdn.vox-cdn.com/thumbor/p-gGrwlaU4rLikEAgYhupMUhIJc=/0x0:1650x2475/1200x0/filters:focal(0x0:1650x2475):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/13757614/817BsplxI9L.jpg',
    'name'=>'nom du livre2',
    'author'=>'Bob',
    'release_year'=> 1802,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://edit.org/images/cat/book-covers-big-2019101610.jpg',
    'name'=>'nom du livre3',
    'author'=>'Sophie',
    'release_year'=> 2023,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://miblart.com/wp-content/uploads/2020/01/crime-and-mystery-cover-scaled-1.jpeg',
    'name'=>'nom du livre4',
    'author'=>'Sophie',
    'release_year'=> 2002,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://designforwriters.com/wp-content/uploads/2017/10/design-for-writers-book-cover-tf-2-a-million-to-one.jpg',
    'name'=>'nom du livre5',
    'author'=>'Bob',
    'release_year'=> 1923,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://marketplace.canva.com/EAFBN69UM-A/1/0/1003w/canva-black-red-vintage-time-book-cover-N4kq526KmFo.jpg',
    'name'=>'nom du livre6',
    'author'=>'Alex',
    'release_year'=> 2018,
    'purchase_url'=>'http://google.com']
];

function finding_book_by_author_v3($author_pick, $books) {

    $author_pick=strtolower($author_pick);
    $author_pick=ucfirst($author_pick);
    
    foreach ($books as $book) {
        if (str_word_count($author_pick)>1) {
            if (array_search($author_pick, $book)){
                echo '<img class="rounded mx-auto d-block w-25 h-25 mt-5" src="'.$book['cover'].'" />';
                echo '<div class="d-flex justify-content-center">' . 'Titre : ' . $book['name'] . '</div>';
                echo '<div class="d-flex justify-content-center">' . 'Auteur : ' . $book['author'] . '</div>';
                echo '<div class="d-flex justify-content-center">' . 'Année d\'édition : ' . $book['release_year'] . '</div>';
                echo '<a class="d-flex justify-content-center" href="'.$book['purchase_url'].'" target="_BLANK">' . 'Achetez-moi'  . "</a>";
            }
        }
        else {
            implode($book);
            var_dump($book);
        }
    }

}

if(isset($_POST['book_author'])){
    $author_pick= $_POST['book_author'];
    finding_book_by_author_v3($author_pick, $books);
}


// Exercice v2 

$books = [
    ['cover' => 'https://m.media-amazon.com/images/I/41gr3r3FSWL.jpg',
    'name'=>'nom du livre1',
    'author'=>'Bob Dilan',
    'release_year'=> 1995,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://cdn.vox-cdn.com/thumbor/p-gGrwlaU4rLikEAgYhupMUhIJc=/0x0:1650x2475/1200x0/filters:focal(0x0:1650x2475):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/13757614/817BsplxI9L.jpg',
    'name'=>'nom du livre2',
    'author'=>'Bob',
    'release_year'=> 1802,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://edit.org/images/cat/book-covers-big-2019101610.jpg',
    'name'=>'nom du livre3',
    'author'=>'Sophie jean',
    'release_year'=> 2023,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://miblart.com/wp-content/uploads/2020/01/crime-and-mystery-cover-scaled-1.jpeg',
    'name'=>'nom du livre4',
    'author'=>'Sophie',
    'release_year'=> 2002,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://designforwriters.com/wp-content/uploads/2017/10/design-for-writers-book-cover-tf-2-a-million-to-one.jpg',
    'name'=>'nom du livre5',
    'author'=>'Bob',
    'release_year'=> 1923,
    'purchase_url'=>'http://google.com'],
    ['cover' => 'https://marketplace.canva.com/EAFBN69UM-A/1/0/1003w/canva-black-red-vintage-time-book-cover-N4kq526KmFo.jpg',
    'name'=>'nom du livre6',
    'author'=>'Alex',
    'release_year'=> 2018,
    'purchase_url'=>'http://google.com']
];

function finding_book_by_author_v4($author_pick, $books) {
    
    foreach ($books as $book) {
        foreach ($book as $values){
            if (str_contains(strtolower($values), strtolower($author_pick))) {

                echo '<img class="rounded mx-auto d-block w-25 h-25 mt-5" src="'.$book['cover'].'" />';
                echo '<div class="d-flex justify-content-center">' . 'Titre : ' . $book['name'] . '</div>';
                echo '<div class="d-flex justify-content-center">' . 'Auteur : ' . $book['author'] . '</div>';
                echo '<div class="d-flex justify-content-center">' . 'Année d\'édition : ' . $book['release_year'] . '</div>';
                echo '<a class="d-flex justify-content-center" href="'.$book['purchase_url'].'" target="_BLANK">' . 'Achetez-moi'  . "</a>";
        
            }
        }
    }               
}

if(isset($_POST['book_author'])){
    $author_pick= $_POST['book_author'];
    finding_book_by_author_v4($author_pick, $books);
}