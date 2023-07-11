<?php
session_start();
$current_page='mini-jeux';
$title='Jeu du pendu';
require_once ('../assets/functions.php');
require_once ('../assets/inc/head.php');
require_once ('../assets/inc/navbar.php');?>



<section class="d-flex flex-column justify-content-center mt-5 container-sm">

        <h1 class="text-center">Jeu du pendu</h1>

        <p class="text-center">Devinez un mot</p>

        <pre><?=var_dump($_SESSION)?></pre>

        <p>
            créer un moyen pour proposer un mot complet (qui reprends les lettres déjà affichées?)
        </p>

        <div class="d-flex my-2 justify-content-evenly">
            <button class="btn btn-primary <?=(!isset($_SESSION['pendu']['game']['result'])) ? "d-none" : ""?>">
                <a class="nav-link text-white" href="<?=(!isset($_SESSION['pendu']['game']['result'])) ? "" : "../assets/session-killer.php"?>">Relancer une partie</a>
            </button>
        </div>

        <div class="d-flex flex-column my-2 mx-auto <?=(!isset($_SESSION['pendu']['game']['result'])) ? "d-none" : ""?>">
            <div class="text-center <?=($_SESSION['pendu']['game']['result']=='Vous avez gagné') ? "text-success" : "text-danger"?>"><?=$_SESSION['pendu']['game']['result']?></div>
            <div class="d-flex">
                <p class="me-1">Le mot était :</p>
                <p class="text-capitalize">
                    <?php if ($_SESSION['pendu']['game']['result']=='Vous avez perdu'):?>
                        <?php foreach ($_SESSION['pendu']['game']['word_to_guess_split'] as $letter):?>
                            <?=$letter?>
                        <?php endforeach?>
                    <?php endif?>
                </p>
            </div>
            
        </div>

        <div class="d-flex justify-content-center mt-3 <?=((isset($_SESSION['pendu']['game']['error']))) ? "" : "d-none"?>" >
            <div class="alert <?=($_SESSION['pendu']['game']['error']=="La lettre n'est pas dans le mot") ? "alert-warning" : "alert-danger"?>" role="alert">
                <?=$_SESSION['pendu']['game']['error']?>
            </div>
        </div> 

        <div class="d-flex justify-content-center mt-3 <?=((!isset($_SESSION['pendu']['game'])) && (empty($_SESSION['loterie']['game']))) ? "" : "d-none"?>" >
            <form action="traitement-pendu.php" method="post">
                <input type="hidden" name="launch_game" value=1>
                <button type="submit" class="btn btn-primary mx-auto">Démarrer la partie</button>
            </form>
        </div>
        
        

        <div class="d-flex justify-content-center my-3 gap-3">
            <?php if ((isset($_SESSION['pendu']['game']['word'])) && (!empty($_SESSION['pendu']['game']['word'])))  :?>
                <?php $i=0?>
                <?php foreach ($_SESSION['pendu']['game']['word'][1] as $key => $value) :?> 
                <div class="<?=(($value==" ") || ($value=="-")) ? "" : "border-bottom border-dark"?>">
                    <p class="text-capitalize text-center" style="width:10px">
                        <?=((isset($_SESSION['pendu']['game']['letter_guessed'])) && (in_array($value,$_SESSION['pendu']['game']['letter_guessed']))) || ($value=="-") ? $_SESSION['pendu']['game']['word'][0][$i] : (($value==" ") ? "" : " ")?>
                        <?php $i++?>
                    </p>
                </div>
                <?php endforeach?>
            <?php endif?>
        </div> 
    

        <form class="<?=((!isset($_SESSION['pendu']['game']['launch_game'])) && 
            (empty($_SESSION['pendu']['game']['launch_game'])) && 
            (!isset($_SESSION['pendu']['game']['result'])) && 
            (empty($_SESSION['pendu']['game']['result']))) ? "d-none" : ""?>" action="<?=((!isset($_SESSION['pendu']['game']['launch_game'])) && 
            (empty($_SESSION['pendu']['game']['launch_game'])) && 
            (!isset($_SESSION['pendu']['game']['result'])) && 
            (empty($_SESSION['pendu']['game']['result']))) ? "" : "traitement-pendu.php"?>" method="POST">

            <div class="mx-auto w-25 <?=((!isset($_SESSION['pendu']['game']['result'])) && (empty($_SESSION['pendu']['game']['result']))) ? "" : "d-none"?>">
                <label class="text-capitalize" for="player_number">Lettre</label>
                <input type="text" class="form-control" name="player_letter" id="player_letter" minlength="1" maxlength="1" required> 
                <button class="btn btn-primary mt-2" type="submit">Valider</button>
            </div>
        
        </form>
        
        
        <h4 class="mx-auto">Lettres proposées</h4>
        <div class="d-flex justify-content-center my-3 gap-3">
           
            <?php if ((isset($_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'])) && (!empty($_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'])))  :?>
                <?php foreach ($_SESSION['pendu']['game']['all_letter_proposed_without_spe_char'] as $key => $value) :?> 
                
                    <div class="text-capitalize border rounded border-dark rounded text-center <?=(in_array($value,$_SESSION['pendu']['game']['word_split_without_spe_char'])) ? "bg-success" . " " . "text-white" : ""?>" style="width:20px">
                        <?=$value?>
                    </div>
                
                <?php endforeach?>
            <?php endif?>
        </div> 
       
        
        </div>
    </section>




















<?php require_once ('../assets/inc/foot.php');?>