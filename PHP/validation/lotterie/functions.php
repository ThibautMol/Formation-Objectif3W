<?php

function buying_tickets () {

    $user_tickets=[];

    settype($_POST['buying_tickets'], "integer");

    if (($_POST['buying_tickets']>100) || ($_POST['buying_tickets']<0)){
        
        $_SESSION['loterie']['info']['errors']['error_input']="Saisie invalide nombre de tickets invalide";
        
        return;
    }

    if ($_SESSION['loterie']['tickets_available']<$_POST['buying_tickets']) {

        $_SESSION['loterie']['info']['errors']['not_enought_tickets']="Nombre de tickets restant dépassé";

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

        unset($_SESSION['loterie']['info']['errors']);
    
        return $user_tickets;

    }else {
        
        $_SESSION['loterie']['info']['poor']="Fonds insuffisants pour acheter un ticket";
       
        return;
    }

}

function tirage ($tirage=[]) {

    while (count($tirage)<3) {

        $tirage_rand=random_int(1,100);
        
        if (!in_array($tirage_rand,$tirage)){
            $tirage[]=$tirage_rand;
        }
    }
    return $tirage;
}

function result() {

    $_SESSION['loterie']['user_gains']=null;

    for ($i=0;$i<count($_SESSION['loterie']['tirage']);$i++) {
        
        foreach ($_SESSION['loterie']['user_tickets'] as $ticket) {

            if (in_array($ticket,$_SESSION['loterie']['tirage'])) {

                $_SESSION['loterie']['user_gains']=$_SESSION['loterie']['user_gains']+$_SESSION['loterie']['gains'][$i];
                
                
            }
           
            if ($_SESSION['loterie']['user_gains']==NULL || (empty($_SESSION['loterie']['user_gains']))) {
                
                $_SESSION['loterie']['user_gains']=0;
            }

           
        
        }
    }
    $_SESSION['loterie']['user_money']=$_SESSION['loterie']['user_money']+$_SESSION['loterie']['user_gains'];
    return;
}
?>