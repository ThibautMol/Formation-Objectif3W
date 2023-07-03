<?php 
session_start();
$title='Quiz';
require_once "inc/head.php";
require_once "inc/navbar.php";

(isset($_GET['start']) && (!empty($_GET['start'])) && ($_GET['start']==1)) ? $_SESSION['quiz']['set']=$_GET['start'] : "";

(!isset($_SESSION['quiz']['number_of_question_answered']) && (empty($_SESSION['quiz']['number_of_question_answered']))) ? $_SESSION['quiz']['number_of_question_answered']=0 : "";

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

<div class="d-flex justify-content-center mt-1">
    <img id="details-enlarged-image" class="" src="https://as1.ftcdn.net/v2/jpg/02/41/97/54/1000_F_241975440_QIlN2sSPiJ8l2vs8v8cdNfP2Tr2BQnPh.jpg" alt="Test yourself">
</div>

<pre>
    <h5>DEBUG</h5>
    <?=var_dump($_SESSION['quiz']['answered_questions']);?>
</pre>


<div class="d-flex justify-content-center mt-5 mb-3 <?=(!isset($_SESSION['quiz']['set']) && (empty($_SESSION['quiz']['set']))) ? "" : "d-none"?>">
    <a class="btn btn-primary" href="?start=1">Débuter le quizz</a>
</div>

<main class="<?=(isset($_SESSION['quiz']['set']) && (!empty($_SESSION['quiz']['set'])) && ($_SESSION['quiz']['set']==1)) ? "" : "d-none"?>">
    
<div class="d-flex justify-content-center mt-3 mb-3">
        <a class="btn btn-danger" href="inc/session-killer.php">Recommencer le test</a>
    </div>


    <div class="d-flex flex-column justify-content-center gap-5">
        
        <?php for ($i=0; $i<(count($_SESSION['quiz']['answered_questions']));$i++):?>
            <div class="card mx-auto" style="width: 35rem;">

                <div class="card-body">
                    <h5 class="card-title text-center">Question <?=$i?> : </h5>
                    <p class="card-text text-center"><?=$_SESSION['quiz']['answered_questions'][$i]['question']?></p>
                </div>

                <div class="d-flex flex-wrap" >
                    <?php foreach ($_SESSION['quiz']['answered_questions'][$i]['options'] as $choice) :?>
                        <form action="validation-quiz.php" method="POST" class="mx-auto">
                            <input type="hidden" name="answer-question<?=$i?>" value="<?=$choice?>">
                            <button type='submit' class="btn btn-primary my-2 mx-auto" ><?=$choice?></button>
                        </form>
                    <?php endforeach?>
                </div>
            </div>
        <?php endfor?>
        
    </div>
</main>













<?php require_once "inc/foot.php"?>