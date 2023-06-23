<?php session_start();?>

<?php
if (isset($_POST['number_ht'])) {
    $_POST['number_ht']=str_replace(",",".",$_POST['number_ht']);
    if (is_numeric($_POST['number_ht'])){

        
        $number_ht=$_POST['number_ht'];
        
        settype($number_ht,"float");
        $_SESSION['calcul-taxe']['number_ht'][]=$number_ht;
        $number_ttc=$number_ht*1.2;
        $_SESSION['calcul-taxe']['number_ttc'][]=$number_ttc;
        unset($_SESSION['calcul-taxe']['errors']);
    }
    else {
        $_SESSION['calcul-taxe']['errors']="Veuillez rentrer un chiffre";
    }
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


        <title>Calcul de taxes</title>
    </head>

    
    
    <body class="d-flex flex-column justify-content-center mt-5 container-sm">
        <div class="d-flex gap-5 justify-content-center">
            <div class="d-flex flex-column">
                <?php if (isset($_SESSION['calcul-taxe']['number_ttc'])) :?>
                    <?php foreach ($_SESSION['calcul-taxe']['number_ht'] as $value) :?>
                    <p class="flex column">Prix HT : <?=$value?></p>
                    <?php endforeach?>
            </div>
            <div class="d-flex flex-column">
                    <?php foreach ($_SESSION['calcul-taxe']['number_ttc'] as $value) :?>
                    <p class="flex column">Prix TTC : <?=$value?></p>
                    <?php endforeach?>
                <?php endif?>
            </div>
        </div>
      

        <form class="mx-auto" action="" method="POST">
            
            <input type="text" name="number_ht" placeholder="Nombre HT">
            <button class="btn btn-primary" type="submit">Calculer</button>

        </form>

        <button class="btn btn-danger mx-auto"><a class="text-primary text-decoration-none" href="session-killer.php">Reset</a></button>

    </body>


</html>
