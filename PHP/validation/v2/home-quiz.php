<?php 
session_start();
$title='Quiz';

require_once "inc/head.php";
require_once "inc/navbar.php";

(isset($_GET['start']) && (!empty($_GET['start'])) && ($_GET['start']==1)) ? $_SESSION['quiz']['set']=$_GET['start'] : "";

(!isset($_SESSION['quiz']['number_of_question_answered']) && (empty($_SESSION['quiz']['number_of_question_answered']))) ? $_SESSION['quiz']['number_of_question_answered']=0 : "";

if (isset($_GET['page'])) {
$question_number=$_GET['page'];
settype($question_number, "integer");
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

if ((isset($_GET['user_answers'])) && (!empty($_GET['user_answers']))) {
    $_SESSION['answers_counting']++;
    if ($_GET['user_answers']==$questions[$question_number]['answer']) {
        $result="Bonne réponse";
        $_SESSION['quiz']['user_score']++;
    }else {
        $result="Mauvaise réponse";
    }
}


?>

<div class="d-flex justify-content-center mt-1">
    <img id="details-enlarged-image" class="" src="https://as1.ftcdn.net/v2/jpg/02/41/97/54/1000_F_241975440_QIlN2sSPiJ8l2vs8v8cdNfP2Tr2BQnPh.jpg" alt="Test yourself">
</div>

<pre>
    <h5>DEBUG</h5>
    <?=var_dump($_SESSION['quiz']['user_score'])?>


</pre>


<div class="d-flex justify-content-center mt-3 <?=(!isset($question_number) && (empty($question_number))) ? "" : "d-none"?>" >
    <button class="btn btn-primary mx-auto"><a class="text-decoration-none text-white" href="?page=<?=0?>">Débuter le quizz</a></button>
</div>

<main class="<?=(!isset($_GET['page']) && (empty($_GET['page']))) ? "d-none" : ""?>">
    
    <div class="d-flex flex-column justify-content-center mt-3 mb-3">

        <div class="mx-auto mb-3">
            <button class="btn btn-danger"><a class="btn btn-danger" href="inc/session-killer.php">Recommencer le test</a></button>
        </div>
    


        <div class="d-flex flex-column justify-content-center mb-5 gap-5">
            
            
            <div class="card mx-auto" style="width: 35rem;">

                <div class="card-body">
                    <h5 class="card-title text-center">Question <?=$question_number?> : </h5>
                    <h6 class="card-subtitle text-center mb-2 <?=(isset($result)) ? (($result=="Bonne réponse") ? "text-success" : "text-danger" ) : "d-none"?> text-success"><?=$result?></h6>
                    <p class="card-text text-center"><?=$questions[$question_number]['question']?></p>
                </div>


                <div class="d-flex flex-wrap" >
                    <?php foreach ($questions[$question_number]['options'] as $choice) :?>
                            <a class="btn my-2 mx-auto 
                            <?=((isset($_GET['user_answers'])) && (!empty($_GET['user_answers']))) ? 
                                ((($choice==$_GET['user_answers'])&& $_GET['user_answers']!=$questions[$question_number]['answer']) ? 
                                    "btn-secondary"  : (($choice==$questions[$question_number]['answer']) ? 
                                        "btn-success" : "btn-warning")) : "btn-primary"?> "
                                         
                            href="?page=<?=$question_number?>&user_answers=<?=$choice?>"><?=$choice?></a>
                    <?php endforeach?>
                </div>

                
            </div>


            <div class="d-flex justify-content-center" >                    
                <a class="btn btn-primary my-2 <?=($_GET['page']==4) ? "disabled" : "";?>" href="?page=<?=$question_number+1?>">Question suivante</a>
            </div>
            
            <div class="card mx-auto <?=($_SESSION['answers_counting']==5) ? "" : "d-none" ?>" style="width: 18rem;">

                <img class="card-img-top <?=((isset($_SESSION['quiz']['user_score'])) && $_SESSION['quiz']['user_score']==5) ? "" : "d-none"?>" src="https://ih1.redbubble.net/image.980358996.2852/flat,750x,075,f-pad,750x1000,f8f8f8.jpg" alt="hackerman">
                <img class="card-img-top <?=((isset($_SESSION['quiz']['user_score'])) && $_SESSION['quiz']['user_score']==4) ? "" : "d-none"?>" src="https://i.kym-cdn.com/entries/icons/original/000/012/982/039.jpg" alt="thumb-up">
                <img class="card-img-top <?=((isset($_SESSION['quiz']['user_score'])) && $_SESSION['quiz']['user_score']==3) ? "" : "d-none"?>" src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-760w,f_auto,q_auto:best/rockcms/2022-05/220504-kailia-posey-mjf-1355-bfa39c.jpg" alt="almost-perfect">
                <img class="card-img-top <?=((isset($_SESSION['quiz']['user_score'])) && $_SESSION['quiz']['user_score']==2) ? "" : "d-none"?>" src="https://www.meme-arsenal.com/memes/5c013c9237a245c0a33c4b614de475b9.jpg" alt="average-result">
                <img class="card-img-top <?=((isset($_SESSION['quiz']['user_score'])) && $_SESSION['quiz']['user_score']==1) ? "" : "d-none"?>" src="https://i.kym-cdn.com/photos/images/newsfeed/000/004/987/potential.jpg" alt="potential-not-everyone-getting-it">
                <img class="card-img-top <?=((!isset($_SESSION['quiz']['user_score'])) || $_SESSION['quiz']['user_score']==0) ? "" : "d-none"?>" src="https://www.todayifoundout.com/wp-content/uploads/2010/03/demotivatorsite-com-448-e1268137263315.jpg" alt="at-leat-you-tried">


                <div class="card-body">
                    <p class="card-text">Votre score est de <?=((isset($_SESSION['quiz']['user_score'])) && (!empty($_SESSION['quiz']['user_score']))) ? $_SESSION['quiz']['user_score'] : "0" ?> 
                    bonne<?=((isset($_SESSION['quiz']['user_score'])) && (!empty($_SESSION['quiz']['user_score'])) && ($_SESSION['quiz']['user_score']>1)) ? "s" : "" ?> 
                    réponse<?=((isset($_SESSION['quiz']['user_score'])) && (!empty($_SESSION['quiz']['user_score'])) && ($_SESSION['quiz']['user_score']>1)) ? "s" : "" ?> sur 5</p>
                </div>
            </div>
            
            



            
        </div>
    <div>
</main>













<?php require_once "inc/foot.php"?>