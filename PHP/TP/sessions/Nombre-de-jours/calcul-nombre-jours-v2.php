<?php 
session_start() ;

var_dump($_POST);


$trip_start=explode("-",$_POST["trip-start"]);
$trip_end=explode("-",$_POST["trip-end"]);



function calcul_of_years ($date_start,$date_end,$month) {

    echo " etape 3 ";

    $number_of_days=NULL;

    if ($date_start['year']==$date_end['year']) {
        echo " etape 3.1 ";
        return 0;
    }

    else {

        $number_of_years=($date_start['year']-$date_end['year']);
        echo " etape 3.2 ";

        if ($number_of_years<0) {

            $number_of_years=$number_of_years*-1;
        }

        echo $number_of_years;

        if ($number_of_years>1) {
            echo " etape 3.3 ";
          
            $number_of_days=($number_of_years-1)*365;

            echo " " . $number_of_days;
        }
        
            echo " etape 3.4 ";
            if ($date_start['year']<$date_end['year']) {
                echo " etape 3.5 ";

                for ($i=$date_start['month']; $i<12; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                    echo " " . $number_of_days . " ";
                }

                echo " resultat 1er for " . $number_of_days;

                var_dump($number_of_days);

                for ($i=0; $i<$date_end['month']-1; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                }

                echo " resultat 2ieme for " . $number_of_days;

                return $number_of_days;


            }else {
                echo " etape 3.6 ";
                //($date_start['year']>$date_end['year'])

                for ($i=0; $i<$date_start['month']-1; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                }

                for ($i=11; $i>$date_end['month']-1; $i--) {
                    $number_of_days+=($month[$i]['number_of_days']);
                }

                return $number_of_days;
            }
        }
    }


function calcul_of_days_between_two_date($date_start,$date_end,$month){

    echo " etape 4 ";

    $number_of_days=NULL;

    if ($date_start['month']<$date_end['month']) {
        
        echo " etape 4.1 ";

        $number_of_days=(($month[($date_end['month']-1)]['number_of_days'])-($date_end['day']))+($date_start['day']);
        
        // for ($i=$date_start['month']-1; $i<$date_end['month']-1; $i++) {
        //     $number_of_days+=($month[$i]['number_of_days']);
        // }

        return $number_of_days;
    }

    else { 
        echo " etape 4.2 ";

        //($date_start['month']>$date_end['month']) 

        echo " date end " . ($date_end['day']);

        $value1=$month[($date_end['month']-1)]['number_of_days']-($date_end['day']);

        echo " " . $value1;



        $number_of_days=(($month[($date_start['month']-1)]['number_of_days'])-($date_start['day']))+($date_end['day']);
        
        echo " avant le for " . $number_of_days;

        // for ($i=$date_end['month']-1; $i<$date_start['month']-1; $i++) {
        //     $number_of_days+=($month[$i]['number_of_days']);
        // }

        echo "  après le for " . $number_of_days . " ";

        return $number_of_days;

    }
}


// continuer à partir d'ici les calculs années + jours devraient être bons. voir ce qu'on passe dans les fonctions

function date_calcul($trip_start,$trip_end) {

    echo " etape 1 ";

    $month = [
        ["month" => "janvier", "number_of_days" => 31], #index 0
        ["month" =>"février", "number_of_days" => 28], #index 1
        ["month" =>"mars", "number_of_days" => 31], #index 2
        ["month" =>"avril", "number_of_days" => 30], #index 3
        ["month" =>"mai", "number_of_days" => 31], #index 4
        ["month" =>"juin", "number_of_days" => 30], #index 5
        ["month" =>"juillet", "number_of_days" => 31], #index 6
        ["month" =>"aout", "number_of_days" => 31], #index 7
        ["month" =>"septembre", "number_of_days" => 30], #index 8
        ["month" =>"octobre", "number_of_days" => 31], #index 9
        ["month" =>"novembre", "number_of_days" => 30], #index 10
        ["month" =>"décembre", "number_of_days" =>31] #index 11
    ];

    var_dump($month[0]);

    $date_start['year']=$trip_start[0];
    $date_start['month']=$trip_start[1];
    $date_start['day']=$trip_start[2];

    settype($date_start['year'],"integer");
    settype($date_start['month'],"integer");
    settype($date_start['day'],"integer");

    // var_dump($trip_start);
    var_dump($date_start);


    $date_end['year']=$trip_end[0];
    $date_end['month']=$trip_end[1];
    $date_end['day']=$trip_end[2];

    settype($date_end['year'],"integer");
    settype($date_end['month'],"integer");
    settype($date_end['day'],"integer");

    // var_dump($trip_end);
    var_dump($date_end);

    // faire un if pour la vérif de l'année, si jamais c'est pas pareil on va rajouter un calculer.

    echo " etape 2 ";

    $number_of_days_year_calcul=calcul_of_years ($date_start,$date_end,$month);

    echo " valeur après calcul année " . $number_of_days_year_calcul; 

    $number_of_days_month_calcul=calcul_of_days_between_two_date($date_start,$date_end,$month);

    echo " valeur après calcul jour mois " . $number_of_days_month_calcul; 

    $number_of_days=$number_of_days_year_calcul+$number_of_days_month_calcul;



    return $number_of_days;

}

$number_of_days=date_calcul($trip_start,$trip_end);

echo " " . $number_of_days;