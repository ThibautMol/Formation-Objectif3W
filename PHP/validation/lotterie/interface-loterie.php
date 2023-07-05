<?php 
session_start();
$title='Loterie';

require_once "inc/head.php";
require_once "inc/navbar.php";
// require_once "";
// require_once "";

(!isset($_SESSION['loterie'])) && (empty($_SESSION['loterie'])) ? ($_SESSION['loterie']['user_money']=500) . ($_SESSION['loterie']['tickets_available']=100) : "";

?>

<pre>
    <h1>debug</h1>
    <?=var_dump($_SESSION)?>
</pre>

<div class="mt-1">
    <div class="d-flex justify-content-center">
        <img id="details-enlarged-image" class="img-thumbnail" src="https://media.istockphoto.com/id/1314972402/fr/vectoriel/fond-multicolore-de-vecteur-de-boules-de-loterie.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=ASqORsbqy7BFc9-UJoOZug2EYaUFimaLRjdVdpmZRKs=" alt="Test yourself" style="max-width:40rem">
    </div>

</div>


<div class="d-flex justify-content-center mt-3 <?=((!isset($_SESSION['loterie']['starting_game'])) && (empty($_SESSION['loterie']['starting_game']))) ? "" : "d-none"?>" >
    <form action="traitement.php" method="post">
        <input type="hidden" name="launch_game" value=1>
        <button type="submit" class="btn btn-primary mx-auto">Démarrer la partie</button>
    </form>
</div>



<main class=" <?=((!isset($_SESSION['loterie']['starting_game'])) && (empty($_SESSION['loterie']['starting_game'])) || ($_SESSION['loterie']['starting_game']!=1)) ? "d-none" : ""?>" >


    <div class="d-flex justify-content-center mt-3 <?=(!isset($question_number) && (empty($question_number))) ? "" : "d-none"?>" >
        <form action="traitement.php" method="post">
            <input type="hidden" name="tirage" value="1">
            <button type="submit" class="btn btn-primary mx-auto">Procéder au tirage</button>
        </form>
    </div>


    <div class="d-flex justify-content-center mt-3 <?=((isset($_SESSION['quiz']['errors']) && (!empty($_SESSION['quiz']['errors']))) && (!isset($_GET['page']) && (empty($_GET['page'])))) ? "" : "d-none"?>" >
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['quiz']['errors']?>
        </div>
    </div>  

    <div class="d-flex justify-content-around ">

        <div class="card mx-auto my-3 <?=(((isset($_SESSION['loterie']['starting_game'])) && 
            ($_SESSION['loterie']['starting_game']=1)) && (isset($_SESSION['loterie']['last_purchase']) && (!empty($_SESSION['loterie']['last_purchase'])))) ? "" : "d-none"?>" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Vos derniers tickets achetés</h5>
                <ul>
                    <?php if (isset($_SESSION['loterie']['last_purchase']) && (!empty($_SESSION['loterie']['last_purchase']))):?>
                        <?php foreach ($_SESSION['loterie']['last_purchase'] as $ticket):?>
                            <li class="text-center"><?=$ticket?></li>
                        <?php endforeach?>
                    <?php endif?>
                
                </ul>
                

                
            </div>
        </div>


        <div class="card mx-auto my-3 <?=(((isset($_SESSION['loterie']['starting_game'])) && 
            ($_SESSION['loterie']['starting_game']=1)) && 
            (($_SESSION['loterie']['tickets_available']>0)) &&
            (!isset($_SESSION['loterie']['tirage'])) && 
            (empty($_SESSION['loterie']['tirage']))) ? "" : "d-none"?>" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Acheter des tickets</h5>
                
                <p class="card-text">Combien voulez-vous de tickets? </p>

                <form action="traitement.php" method="POST">
                    <input type="number" name="buying_tickets">
                    <button class="btn btn-primary  my-2" type="submit" <?=(!isset($_SESSION['loterie']['tirage'])) && (empty($_SESSION['loterie']['tirage'])) ? "" : "disabled"?>>Acheter</button>
                </form>

                <p class="card-text">Vous pouvez encore acquérir <?=$_SESSION['loterie']['tickets_available']?> ticket<?=($_SESSION['loterie']['tickets_available']>1) ? "s" : ""?> </p>

            </div>
        </div>


        <div class="card mx-auto my-3 <?=(((isset($_SESSION['loterie']['starting_game'])) && 
            ($_SESSION['loterie']['starting_game']=1)) && 
            (($_SESSION['loterie']['tickets_available']>0)) &&
            (!isset($_SESSION['loterie']['tirage'])) && 
            (empty($_SESSION['loterie']['tirage']))) ? "" : "d-none"?>" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Acheter des tickets</h5>
                
                <p class="card-text">Combien voulez-vous de tickets? </p>

                <form action="traitement.php" method="POST">
                    <input type="number" name="buying_tickets">
                    <button class="btn btn-primary  my-2" type="submit" <?=(!isset($_SESSION['loterie']['tirage'])) && (empty($_SESSION['loterie']['tirage'])) ? "" : "disabled"?>>Acheter</button>
                </form>

                <p class="card-text">Vous pouvez encore acquérir <?=$_SESSION['loterie']['tickets_available']?> ticket<?=($_SESSION['loterie']['tickets_available']>1) ? "s" : ""?> </p>

            </div>
        </div>


    </div>
</main>


