<?php
session_start();

const NUMBER_OF_QUESTIONS=4; #this constante is based on the number of questions in the $questions array.

var_dump($_POST);

$_SESSION['quiz']['user_answers'][]=$_POST['user_answers'];



if ((isset($_POST)) && (!empty($_POST))) {

    if ($_SESSION['quiz']['number_of_question_answered']<NUMBER_OF_QUESTIONS) {
        $_SESSION['quiz']['number_of_question_answered']++;
    }
}

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
<pre><?php var_dump($_SESSION['quiz']['user_answers']);?></pre>
<pre></pre>


<?php 

unset($_SESSION['quiz']['user_answer_result']);

for ($i=0; $i<($_SESSION['quiz']['number_of_question_answered']);$i++) {
    
   if ($_SESSION['quiz']['user_answers'][$i]==$questions[$i]['answer']) {
    $_SESSION['quiz']['user_answer_result'][]="good";
   } else {
    $_SESSION['quiz']['user_answer_result'][]="bad";
   }
}

   var_dump($_SESSION['quiz']['user_answer_result']);


?>
<br>
<hr>
<br>
<?php
for ($i=0; $i<(count($_SESSION['quiz']['number_of_question_answered']));$i++) {
    // var_dump($_SESSION['quiz']['answered_questions'][$i]);
    // echo $_SESSION['quiz']['answered_questions'][$i]['question'];

    // echo $_SESSION['quiz']['answered_questions'][$i]['options'][$i];

    foreach ($_SESSION['quiz']['answered_questions'][$i]['options'] as $choice) {
        var_dump($choice);
        // var_dump($choice['options']);
        // // $test=$choice['options'][$i];
        // var_dump($test);
    } 
}
// var_dump($_SESSION['quiz']['answered_questions'][0]['options'][0]);

?>