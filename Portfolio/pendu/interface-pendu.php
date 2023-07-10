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

        <p>rajouter images + affichage résultat partie</p>

        <div class="d-flex justify-content-center mt-3 <?=((isset($_SESSION['pendu']['error']))) ? "" : "d-none"?>" >
            <div class="alert alert-danger" role="alert">
                <?=$_SESSION['pendu']['error']?>
            </div>
        </div> 
        
        <div class="d-flex justify-content-center my-3 gap-3">
            <?php if ((isset($_SESSION['pendu']['word'])) && (!empty($_SESSION['pendu']['word'])) && (isset($_SESSION['pendu']['letter_guessed'])) && (!empty($_SESSION['pendu']['letter_guessed'])))  :?>
                <?php $i=0?>
                <?php foreach ($_SESSION['pendu']['word'][1] as $key => $value) :?> 
                <div class="<?=(($value==" ") || ($value=="-")) ? "" : "border-bottom border-dark"?>">
                    <p class="text-capitalize text-center" style="width:10px">
                        <?=(in_array($value,$_SESSION['pendu']['letter_guessed']) || ($value=="-")) ? $_SESSION['pendu']['word'][0][$i] : (($value==" ") ? "" : " ")?>
                        <?php $i++?>
                    </p>
                </div>
                <?php endforeach?>
            <?php endif?>
        </div> 
    

        <form action="traitement-pendu.php" method="POST">

            <div class="mx-auto w-25">
                <label class="text-capitalize" for="player_number">Lettre</label>
                <input type="text" class="form-control" name="player_letter" id="player_letter" minlength="1" maxlength="1" required> 
                <button class="btn btn-primary mt-2" type="submit">Valider</button>
            </div>
        
        </form>
       
        
        </div>
    </section>




















<?php require_once ('../assets/inc/foot.php');?>