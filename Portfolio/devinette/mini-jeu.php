<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <title>Mini-jeu</title>
</head>

    
    <body class="d-flex flex-column justify-content-center mt-5 container-sm">

        <h1 class="text-center">Devinez le nombre</h1>

        <p class="text-center">Proposez un nombre entre 0 et 15. Essayez de deviner le bon numéro</p>

        <form action="function-mini-game.php" method="POST">
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
                    <?=(isset($_SESSION['guessing_game']['player_number']) && !empty($_SESSION['guessing_game']['player_number'])) ? (($_SESSION['guessing_game']['result']=="C'est gagné") ? $_SESSION['guessing_game']['result']. " en " . count($_SESSION['guessing_game']['player_number']) . " essais" : $_SESSION['guessing_game']['result']) : ""?></h5>
                <p class="card-text">Votre dernier chiffre : <?= end($_SESSION['guessing_game']['player_number'])?></p>
                <p class="card-text">Votre historique chiffre : 
                    <?php foreach ($_SESSION['guessing_game']['player_number'] as $number) {
                        echo $number . " , ";}?>
                </p>
                
                <div class="d-flex justify-content-center mb-2">
                    <a class="btn btn-primary mt-3 text-capitalize <?=(isset($_SESSION['guessing_game']['result'])) ? (($_SESSION['guessing_game']['result']=="C'est gagné") ? "" : "d-none") : ""?>" href="session-killer.php">Rejouer une partie</a>
                </div>
        </div>
</div>
        



    </body>

</html>
