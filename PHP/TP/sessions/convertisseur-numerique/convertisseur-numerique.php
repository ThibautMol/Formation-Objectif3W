<?php session_start();?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


        <title>Convertisseur</title>
    </head>

    
    
    <body class="d-flex flex-column justify-content-center mt-5 container-sm">
        <div class="d-flex gap-5 justify-content-center">
        

        </div>
      

        <form class="mx-auto" action="convert-page.php" method="POST">
            
            <input type="text" name="element_to_convert" placeholder="Elément à convertir">
            <button class="btn btn-primary" type="submit">Convertir</button>

        </form>

        <button class="btn btn-danger mx-auto"><a class="text-primary text-decoration-none" href="session-killer.php">Reset</a></button>

        <div class=" <?=((isset($_SESSION['result'])) && (!empty($_SESSION['result']))) ? "" : "d-none" ?> ">
            <p>Le résultat est : <?=((isset($_SESSION['result'])) && (!empty($_SESSION['result']))) ? $_SESSION['result'] : "" ?></p>
        </div>


        <div>
           <h2>Historique</h2>
           <?php if (isset($_SESSION['historic'])) :?>
                <?php foreach ($_SESSION['historic'] as $history) :?>
                    <p>L'élement envoyé était <?=$history?> et le résultat était  <?=$history?></p>
                <?php endforeach?>
            <?php endif?>
        </div>

        
        <spe><?=var_dump($_SESSION['historic'])?></spe>


    </body>


</html>
