<?php
  session_start();

  


if (!isset($_SESSION['guessing_game']['player_number'])) {

    $_SESSION['guessing_game']['number']=rand(1,15);


}


function guessing_number_game ($guess) {

    settype($guess,"integer");
    $number_to_guess=$_SESSION['guessing_game']['number'];
    settype($number_to_guess,"integer");

    unset($_SESSION['guessing_game']['error']);
   

    if ($guess==$number_to_guess) {
        return "C'est gagné";
    }
    elseif ($guess>$number_to_guess) {
        return "Nombre trop grand";
    }
    else {
        return "Nombre trop petit";
    }

}


if (isset($_POST['player_number']) && !empty($_POST['player_number'])) {
    if (is_numeric($_POST['player_number'])) {

        $guess=$_POST['player_number'];
        $_SESSION['guessing_game']['player_number'][]=$guess;

        $_SESSION['guessing_game']['result']=guessing_number_game($guess);
    }
    else {
        $_SESSION['guessing_game']['error']="Merci de rentrer un chiffre";
    }
   
}

header('Location: devinette.php');
exit;