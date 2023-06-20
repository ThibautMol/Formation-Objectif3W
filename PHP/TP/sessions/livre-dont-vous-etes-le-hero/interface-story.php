<?php session_start();
require_once('story.php');

    if (isset($_GET['reset'])) {
        unset($_SESSION['book']['chapter']);
    }

    else { 
        $_SESSION['book']['chapter']=$_GET['chapter'];
    }
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


        <title>le livre dont vous êtes le héro</title>
    </head>

    
    <body class="d-flex flex-column justify-content-center container-sm mt-2">
        <div>
            <div class="card mx-auto mb-3" style="width: 40rem;">
                <img class="card-img-top" src="https://i.pinimg.com/474x/51/60/c6/5160c64e3d4bcce739d0a30e96495a94.jpg" alt="Card image cap">
                <div class="card-body">

                    <h2 class="text-center">Histoire</h2>
                    <p>
                        <?=$story[(isset($_SESSION['book']['chapter'])) ? $_SESSION['book']['chapter'] : "0"]['text']?>    
                    </p>
                    <hr>
                    <h2 class="text-center">Choix</h2>
                    <div class="d-flex justify-content-center gap-5">
                        <?php foreach ($story[(isset($_SESSION['book']['chapter'])) ? $_SESSION['book']['chapter'] : "0"]['choice'] as $choice) :?>
                            <button class="btn <?=(($choice['text']=='Paniquer') ? 'btn-warning' : (($choice['text']=='Supplier') ? 'btn-secondary' : ((($choice['text']=='Pleurer')) ? 'btn-info' :'btn-primary'))) ?> my-2"><a class="text-decoration-none text-white" href="?chapter=<?=$choice['goto']?>"><?=$choice['text']?></a></button>
                        <?php endforeach?>
                </div>
            </div>
        </div>   
         
        <div class="d-flex justify-content-center mb-3">
            <a class="btn btn-danger" href="?reset=1">Recommencer l'histoire</a>
        </div>
    </body>
    

</html>