<?php session_start();
$current_page='mini-jeux';
$title='Devinette';
require_once ('../assets/functions.php');
require_once ('../assets/inc/head.php');
require_once ('../assets/inc/navbar.php');?>



    
    <section class="d-flex flex-column justify-content-center mt-5 container-sm">

        <h1 class="text-center">Devinez le nombre</h1>

        <p class="text-center">Proposez un nombre entre 0 et 15. Essayez de deviner le bon numéro</p>

        <form action="function-devinette.php" method="POST">

            <div class="mx-auto w-25">
                <label class="text-capitalize" for="player_number">Nombre</label>
                <input type="number" class="form-control" name="player_number" id="player_number" required> 
            </div>
        
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3 text-capitalize <?=(isset($_SESSION['guessing_game']['result'])) ? (($_SESSION['guessing_game']['result']=="C'est gagné") ? "disabled" : "") : ""?>" type="submit" href="#">valider</button>
            </div>

        </form>

        
        <div class="alert alert-danger mx-auto mt-2 <?=(isset($_SESSION['guessing_game']['error'])) ? "" :"d-none"?>" role="alert">
            <?=$_SESSION['guessing_game']['error']?>
        </div>

        <div class="card mw-50 mx-auto mt-2 <?=(!isset($_SESSION['guessing_game']['player_number']))? "d-none" : ""?>">
            <h5 class="card-header text-center">Votre résultat</h5>
            <div class="card-body">
                <h5 class="card-title">
                    <?=(isset($_SESSION['guessing_game']['player_number']) && !empty($_SESSION['guessing_game']['player_number'])) ? (($_SESSION['guessing_game']['result']=="C'est gagné") ? $_SESSION['guessing_game']['result']. " en " . count($_SESSION['guessing_game']['player_number']) . " essais" : $_SESSION['guessing_game']['result']) : ""?>
                </h5>
                <p class="card-text">Votre dernier chiffre : 
                    <?= end($_SESSION['guessing_game']['player_number'])?>
                </p>
                <p class="card-text">Votre historique chiffre : 
                    <?php foreach ($_SESSION['guessing_game']['player_number'] as $number) {echo $number . " , ";}?>
                </p>
                
                <div class="d-flex justify-content-center mb-2">
                    <a class="btn btn-primary mt-3 text-capitalize <?=(isset($_SESSION['guessing_game']['result'])) ? (($_SESSION['guessing_game']['result']=="C'est gagné") ? "" : "d-none") : ""?>" href="<?=isset($_SESSION['guessing_game']['result']) ? "../assets/session-killer.php": ""?>">Rejouer une partie</a>
                </div>
            </div>
        </div>
    </section>
    

<?php require_once ('../assets/inc/foot.php');?>