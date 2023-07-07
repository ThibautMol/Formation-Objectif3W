<?php
session_start();
$current_page='calculateurs';
$title='Calcul de taxes';
require_once ('../assets/inc/head.php');
require_once ('../assets/inc/navbar.php');



?>

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

    
    
<section class="d-flex flex-column justify-content-center mt-5 container-sm">
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

    <button class="btn btn-danger mx-auto"><a class="text-primary text-decoration-none" href="../assets/session-killer.php">Reset</a></button>

</section>

<?php require_once ('../assets/inc/foot.php');?>


