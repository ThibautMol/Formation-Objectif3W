<?php

function buying_tickets () {

    $user_tickets=[];

    settype($_POST['buying_tickets'], "integer");

    if (($_POST['buying_tickets']>100) || ($_POST['buying_tickets']<0)){
        
        $_SESSION['loterie']['info']['error_input']="Saisie invalide nombre de tickets invalide";
        
        return;
    }

    if ($_SESSION['loterie']['tickets_available']<$_POST['buying_tickets']) {

        $_SESSION['loterie']['info']['not_enought_tickets']="Nombre de tickets restant dépassé";

        return;
    }

    if ($_SESSION['loterie']['user_money']-($_POST['buying_tickets']*2)>0){

        while (count($user_tickets)<$_POST['buying_tickets']) {
            $tickets_rand=random_int(1,100);
            
            if (!in_array($tickets_rand,$user_tickets)){
                $user_tickets[]=$tickets_rand;
            }
        }
    
        $_SESSION['loterie']['user_money']=$_SESSION['loterie']['user_money']-($_POST['buying_tickets']*2);
        $_SESSION['loterie']['tickets_available']=$_SESSION['loterie']['tickets_available']-$_POST['buying_tickets'];

        $_SESSION['loterie']['info']['successfull_purchase']="Votre achat a bien été prit en compte";

        $_SESSION['loterie']['last_purchase']=$user_tickets;
    
        return $user_tickets;

    }else {
        
        $_SESSION['loterie']['info']['poor']="Fonds insuffisants pour acheter un ticket";
       
        return;
    }

}

function tirage ($tirage=[]) {

    while (count($tirage)<=3) {

        $tirage_rand=random_int(1,100);
        
        if (!in_array($tirage_rand,$tirage)){
            $tirage[]=$tirage_rand;
        }
    }
    return $tirage;
}

?>