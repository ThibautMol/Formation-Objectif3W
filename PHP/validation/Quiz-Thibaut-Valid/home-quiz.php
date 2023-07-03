<?php 
session_start();
$title='Quiz';

require_once "inc/head.php";
require_once "inc/navbar.php";
require_once "inc/data.php";
require_once "functions/functions.php";


?>

<div class="mt-1">
    <div class="d-flex justify-content-center">
        <img id="details-enlarged-image" class="img-thumbnail" src="https://as1.ftcdn.net/v2/jpg/02/41/97/54/1000_F_241975440_QIlN2sSPiJ8l2vs8v8cdNfP2Tr2BQnPh.jpg" alt="Test yourself" style="max-width:50rem">
    </div>

</div>



<div class="d-flex justify-content-center mt-3 <?=(!isset($question_number) && (empty($question_number))) ? "" : "d-none"?>" >
    <button class="btn btn-primary mx-auto"><a class="text-decoration-none text-white" href="?page=<?=0?>">Débuter le quizz</a></button>
</div>
    

<main class="<?=(!isset($_GET['page']) && (empty($_GET['page']))) ? "d-none" : ""?>">
    
    <div class="d-flex flex-column justify-content-center mt-3 mb-3">

        <div class="d-flex flex-column justify-content-center mb-5 gap-5">

            <div class="card mx-auto <?=((isset($_SESSION['quiz']['answers_counting'])) && ($_SESSION['quiz']['answers_counting']==5)) ? "" : "d-none" ?>" style="width: 18rem;">

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

                            <!-- la ternaire ci-dessus contient les éléments suivants : --
                                - si $_GET['user_answers existe et s'il n'est pas vide]
                                    - Alors le bouton aura la couleur secondary  
                                    - Sinon :
                                        - Si le choix (nom du champ présent dans le $questions) est égal à la valeur de answers du tableau $questions à l'index $question_number (voir page functions)
                                        - alors  la couleur du bouton sera success 
                                        - Sinon la couleur sera warning
                                - Sinon la couleur sera primary-->

                    <?php endforeach?>
                </div>

                
            </div>


            <div class="d-flex justify-content-center" >                    
                <a class="btn btn-primary my-2 <?=($_GET['page']==4) ? "disabled" : "";?>" href="?page=<?=($_GET['page']<4) ? $question_number+1 : $question_number?>">Question suivante</a>
            </div>
     
        </div>
    <div>
</main>













<?php require_once "inc/foot.php"?>