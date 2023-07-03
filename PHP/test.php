<?php


// function valid_donnees($donnees){
//     $donnees = trim($donnees);
//     $donnees = stripslashes($donnees);
//     $donnees = htmlentities($donnees);
//     $donnees = htmlspecialchars($donnees);
//     return $donnees;
// }


// $donnees = "agent de traitement";

// //echo valid_donnees($donnees);

// $data="bob@mail.com";
// $datas=['jean','bobinou','bobo@mail.com','emilie'];

// if (in_array($data,$datas)) {
//         echo 'yolo';
//     $creation_user_error="Email déjà utilisé";
// }
// else {
//     echo 'try again';
// }

// $UserPwd='bob';
// $UserPwd=password_hash($UserPwd,PASSWORD_BCRYPT);
// echo $UserPwd;

// $test= str_repeat("m",5);
// echo $test;



$questions = [
    [
    'question' => 'Que signifie PHP ?',
    'options' => ['Page Helper Process', 'Programming Home Pages', 'PHP: Hypertext Preprocessor',
     'Pitié Help us Please !'],
    'answer' => 'PHP: Hypertext Preprocessor',
    ],
    [
    'question' => 'Quelle fonction retourne la longueur d\'une chaîne de
    texte ?',
    'options' => ['strlen', 'strlength', 'length', 'substr'],
    'answer' => 'strlen',
    ],
    [
    'question' => 'Comment accède-t-on au 1er élément chaton dans le tableau
    suivant : $tableau = [\'chaton\' , \'ornithorynque\', \'dauphin\']; ?',
    'options' => ['$tableau[1]', '$tableau[0]', '$tableau{0}',
    '$tableau.get(1)'],
    'answer' => '$tableau[0]',
    ],
    [
    'question' => 'Comment vérifie-t-on l\'égalité de deux variables : $a et
    $b ?',
    'options' => ['$a = $b', '$a == $b', '$a != $b', 'if($a,$b)'],
    'answer' => '$a == $b',
    ],
    [
    'question' => 'La boucle for ($i=0 ; $i<=3 ; $i++ ) { echo $i; }...',
    'options' => ['Sera éxécutée 2 fois', 'Sera éxécutée 3 fois', 'Sera éxécutée 4 fois'],
    'answer'=>'Sera éxécutée 3 fois',
    ]
];


$donnees='Sera éxécutée 3 fois';


function valid_donnees($donnees){
    
    // Cette fonction utilise la variable $donnes qui récupère à chaque get la valeur de la réponse de l'utilisateur.
    // Cette fonction va vérifier, contrôler, et formater les données pour éviter les injections de code. 


    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

echo valid_donnees($donnees);
// for ($i=0; $i<count($questions); $i++)
//     foreach ($questions[$i]['options'] as $choice)

//     if ($user_answer==$choice) {
//         $test=1;
//         echo $test . " ";
//     }
//     else {
//         $test1=0;
//     }

// echo $test . " ";
// echo $test1 . " ";
?>