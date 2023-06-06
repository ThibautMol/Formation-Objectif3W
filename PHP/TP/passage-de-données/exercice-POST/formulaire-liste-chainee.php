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

$index=NULL;

function written_path ($index) {
        $index=$_POST['goto'];
        $result=NULL;

    if (($index<-1) || ($index>12)){
        return '<div class="alert alert-danger mt-3" role="alert">Numéro saisi incorrect. Veuillez entrer un chiffre supérieur ou égal -1 et inférieur ou égal 12</div>';
    }
    else {
        
        $datas= [
            ['letter' => 'a', 'goto'=>10], //index 0 
            ['letter' => 'e', 'goto'=>-1], // index 1
            ['letter' => 'e', 'goto'=>6],  // index 2
            ['letter' => 'l', 'goto'=>1], // index 3
            ['letter' => 'p', 'goto'=>8], // index 4  
            ['letter' => 'o', 'goto'=>11], // index 5  
            ['letter' => 'x', 'goto'=>12], // index 6
            ['letter' => 'p', 'goto'=>3], // index 7
            ['letter' => 'r', 'goto'=>5], // index 8 
            ['letter' => 'm', 'goto'=>7], // index 9
            ['letter' => 'b', 'goto'=>3], // index 10 
            ['letter' => 'b', 'goto'=>0], // index 11 
            ['letter' => 'a', 'goto'=>9], // index 12
        ];

        
            while ($index!=-1){
                
                ($datas[$index]['goto']==$index);             
                $result.=$datas[$index]['letter'];
                $index=$datas[$index]['goto'];
                    
            }

        return $result;
    }
}
?>

<form action="" method="post" class="m-auto">
    <input type="number" name="goto"/>
    <button type="submit" class="btn btn-primary" >Validez</button>
</form>
<div class="d-flex justify-content-center">
    <?php if (isset($_POST) && ($_POST!=NULL)) {
        echo(written_path($index));
    }?>
</div>

</body>
</html>