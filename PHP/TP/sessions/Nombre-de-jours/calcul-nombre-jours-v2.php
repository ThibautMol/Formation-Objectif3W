<?php 
session_start() ;

var_dump($_POST);


$trip_start=explode("-",$_POST["trip-start"]);
$trip_end=explode("-",$_POST["trip-end"]);

function calcul_of_days_between_two_date(){

    if ($date_start['month']<$date_end['month']) {

        $number_of_days=(($month[($date_start['month']-1)]['number_of_days'])-($date_start['day']))+($date_end['day']);
        
        for ($i=$date_start['month']-1; $i<$date_end['month']-1; $i++) {
            $number_of_days+=($month[$i]['number_of_days']);
        }

        return $number_of_days;
    }

    else ($date_start['month']>$date_end['month']) { 

        $number_of_days=(($month[($date_end['month']-1)]['number_of_days'])-($date_end['day']))+($date_start['day']);
        
        for ($i=$date_end['month']-1; $i<$date_start['month']-1; $i++) {
            $number_of_days+=($month[$i]['number_of_days']);
        }

        return $number_of_days;

    }
}

function calcul_of_years () {

    if ($date_start['year']==$date_end['year']) {

        return 0;
    }

    else {

        $number_of_years=($date_start['year']-$date_end['year'])*-1;

        if ($number_of_years>1) {
            
            $number_of_days=$number_of_years*365;

        }
        else {
            if ($date_start['year']<$date_end['year']) {

                for ($i=$date_start['month']; $i<11; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                }
                for ($i=0; $i<$date_end['month']; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                }


            }else ($date_start['year']>$date_end['year']){

                for ($i=0; $i<$date_start['month']; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                }

                for ($i=11; $i>$date_end['month']; $i--) {
                    $number_of_days+=($month[$i]['number_of_days']);
                }
            }
        }
    }
}


// continuer à partir d'ici les calculs années + jours devraient être bons. voir ce qu'on passe dans les fonctions

function date_calcul($trip_start,$trip_end) {

    $month = [
        ["month" => "janvier", "number_of_days" => 31],
        ["month" =>"février", "number_of_days" => 28],
        ["month" =>"mars", "number_of_days" => 31],
        ["month" =>"avril", "number_of_days" => 30],
        ["month" =>"mai", "number_of_days" => 31],
        ["month" =>"juin", "number_of_days" => 30],
        ["month" =>"juillet", "number_of_days" => 31],
        ["month" =>"aout", "number_of_days" => 31],
        ["month" =>"septembre", "number_of_days" => 30],
        ["month" =>"octobre", "number_of_days" => 31],
        ["month" =>"novembre", "number_of_days" => 30],
        ["month" =>"décembre", "number_of_days" =>31]
    ];

    var_dump($month[0]);

    $date_start['year']=$trip_start[0];
    $date_start['month']=$trip_start[1];
    $date_start['day']=$trip_start[2];

    settype($date_start['year'],"integer");
    settype($date_start['month'],"integer");
    settype($date_start['day'],"integer");

    var_dump($trip_start);
    var_dump($date_start);


    $date_end['year']=$trip_end[0];
    $date_end['month']=$trip_end[1];
    $date_end['day']=$trip_end[2];

    settype($date_end['year'],"integer");
    settype($date_end['month'],"integer");
    settype($date_end['day'],"integer");

    var_dump($trip_end);
    var_dump($date_end);

    // faire un if pour la vérif de l'année, si jamais c'est pas pareil on va rajouter un calculer.





}