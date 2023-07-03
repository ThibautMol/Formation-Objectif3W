<?php 

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

?>