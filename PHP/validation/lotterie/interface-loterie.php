<?php 
session_start();
$title='Loterie';

require_once "inc/head.php";
require_once "inc/navbar.php";
// require_once "";
// require_once "";

(!isset($_SESSION['loterie'])) && (empty($_SESSION['loterie'])) ? ($_SESSION['loterie']['user_money']=500) . ($_SESSION['loterie']['tickets_available']=100) . ($_SESSION['loterie']['gains']=[100,50,20]) : "";

?>

<pre>
    <h1>debug</h1>
    <?=var_dump($_SESSION['loterie']['tirage'])?>
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


    <div class="d-flex justify-content-center mt-3 <?=((isset($_SESSION['loterie']['info']['errors']['not_enought_tickets']) && (!empty($_SESSION['loterie']['info']['errors']['not_enought_tickets']))) && (isset($_SESSION['loterie']['starting_game']) && ($_SESSION['loterie']['starting_game']=1))) ? "" : "d-none"?>" >
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['loterie']['info']['errors']['not_enought_tickets']?>
        </div>
    </div>
    
    <div class="d-flex justify-content-center mt-3 <?=((isset($_SESSION['loterie']['info']['errors']['error_input']) && (!empty($_SESSION['loterie']['info']['errors']['error_input']))) && (isset($_SESSION['loterie']['starting_game']) && ($_SESSION['loterie']['starting_game']=1))) ? "" : "d-none"?>" >
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['loterie']['info']['errors']['error_input']?>
        </div>
    </div> 
    
    <div class="d-flex justify-content-center mt-3 <?=((isset($_SESSION['loterie']['info']['successfull_purchase']) && (!empty($_SESSION['loterie']['info']['successfull_purchase']))) && (isset($_SESSION['loterie']['starting_game']) && ($_SESSION['loterie']['starting_game']=1))) ? "" : "d-none"?>" >
        <div class="alert alert-success" role="alert">
            <?=$_SESSION['loterie']['info']['successfull_purchase']?>
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
                <p class="card-text">Votre solde est de : <?=$_SESSION['loterie']['user_money']?> € </p>
                <p class="card-text">Le prix du ticket est de : 2 € </p>
                <p class="card-text">Combien voulez-vous de tickets? </p>

                <form action="traitement.php" method="POST">
                    <input type="number" name="buying_tickets">
                    <button class="btn btn-primary  my-2" type="submit" <?=(!isset($_SESSION['loterie']['tirage'])) && (empty($_SESSION['loterie']['tirage'])) ? "" : "disabled"?>>Acheter</button>
                </form>

                <p class="card-text">Vous pouvez encore acquérir <?=$_SESSION['loterie']['tickets_available']?> ticket<?=($_SESSION['loterie']['tickets_available']>1) ? "s" : ""?> </p>

            </div>
        </div>

        <div class="card mx-auto my-3 <?=((isset($_SESSION['loterie']['tirage'])) && 
            (!empty($_SESSION['loterie']['tirage']))) ? "" : "d-none"?>" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Résultats</h5>
                <h6>Le tirage était :</h6>
                <ul>
                    <?php if ((isset($_SESSION['loterie']['tirage'])) && (!empty($_SESSION['loterie']['tirage']))):?>
                        <?php for ($i=0; $i<count($_SESSION['loterie']['tirage']); $i++):?>
                            <li class="text-center"> le <?=$i+1?>er prix était de : <?=$_SESSION['loterie']['gains'][$i]?> €  et le bon numéro était <?=$_SESSION['loterie']['tirage'][$i]?></li>
                        <?php endfor?>
                    <?php endif?>
                </ul>
                <h6 class="<?=((isset($_SESSION['loterie']['user_gains'])) && (!empty($_SESSION['loterie']['user_gains']))) ? "" : "d-none"?>">Vos gains sont de : </h6>
                <p><?=$_SESSION['loterie']['user_gains']?> €</p>
            </div>
        </div>
        


        <div class="card mx-auto my-3 <?=(((isset($_SESSION['loterie']['starting_game'])) && 
            ($_SESSION['loterie']['starting_game']=1)) && (isset($_SESSION['loterie']['last_purchase']) && (!empty($_SESSION['loterie']['last_purchase'])))) ? "" : "d-none"?>" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Tous vos tickets achetés</h5>
                <ul>
                    <?php if (isset($_SESSION['loterie']['user_tickets']) && (!empty($_SESSION['loterie']['user_tickets']))):?>
                        <?php foreach ($_SESSION['loterie']['user_tickets'] as $ticket):?>
                            <li class="text-center"><?=$ticket?></li>
                        <?php endforeach?>
                    <?php endif?>
                
                </ul>
            </div>
        </div>


    </div>
</main>


