
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <title>Document</title>
</head>
<body class="d-flex flex-column justify-content-center mt-5">
    


<?php 
//  require 'C:\xampp\htdocs\Formation-Objectif3W\PHP\TP\inc\head.php'; 
//  require 'C:\xampp\htdocs\Formation-Objectif3W\PHP\TP\inc\navbar.php';


function verif () {
    if (($_POST['formule']=="/") && ((($_POST['nbr1']==0) && ($_POST['nbr2']==0)) || ($_POST['nbr2']==0))) {
    return "Division par 0 impossible petit coquin";
}
    else {
        return calcul();
    }
}

function calcul() {

    $nbr1=$_POST['nbr1'];
    $nbr2=$_POST['nbr2'];
    $formule=$_POST['formule'];

    str_replace(',' , '.',$nbr1);
    str_replace(',' , '.',$nbr2);


    if ((is_numeric($nbr1)) && (is_numeric($nbr2))) {

        (int)$nbr1=$nbr1;
        (int)$nbr2=$nbr2;

    

        switch($formule) {
            case "*" :
                $result=$nbr1*$nbr2;
                break;
            
            case "/" :
                $result=$nbr1/$nbr2;
                break;

            case "-" :
                $result=$nbr1-$nbr2;
                break;

            case "%" :
                $result=$nbr1%$nbr2;
                break;

            case "+" :
                $result=$nbr1+$nbr2;
                break;
        }
        return $result;
    }

    else {
        return 'Veuillez saisir des nombres';
    }

}

?>

<form action="" method="post" class="m-auto">
    <input type="text" name="nbr1" value="<?=(isset($_POST) && ($_POST!=NULL)) ? $_POST['nbr1'] : ""?>"/>
    <select name="formule" id="">
        <option value="<?= (isset($_POST) && ($_POST!=NULL)) ? $_POST['formule'] : "" ?>"><?= (isset($_POST) && ($_POST!=NULL)) ? $_POST['formule'] : "" ?></option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
        <option value="%">%</option>
    </select>
    <input type="text" name="nbr2" value="<?= (isset($_POST) && ($_POST!=NULL)) ? $_POST['nbr2'] : "" ?>"/>
    <button type="submit" class="btn btn-primary">=</button>
</form>
<div class="d-flex justify-content-center">
    <?php if (isset($_POST) && ($_POST!=NULL)) {
        echo 'Le résultat est : '.(verif());
    }?>
</div>

</body>
</html>