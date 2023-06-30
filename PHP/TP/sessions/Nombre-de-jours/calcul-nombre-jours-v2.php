<?php 
session_start() ;

$trip_start=explode("-",$_POST["trip-start"]);
$trip_end=explode("-",$_POST["trip-end"]);

$_SESSION['calendar']['date_start']=$_POST["trip-start"];
$_SESSION['calendar']['date_end']=$_POST["trip-end"];


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



        if ($number_of_years>=1) {
            echo " etape 3.3 ";

            if ($date_start['month']==$date_end['month']) {

                $number_of_days=365*$number_of_years;
                return $number_of_days;
            }
          
            $number_of_days=($number_of_years-1)*365;

        }
        
        echo " etape 3.4 ";
        
        if ($date_start['year']<$date_end['year']) {
            echo " etape 3.5 ";

            for ($i=$date_start['month']; $i<12; $i++) {
                $number_of_days+=($month[$i]['number_of_days']);  
            }

            for ($i=0; $i<$date_end['month']-1; $i++) {
                $number_of_days+=($month[$i]['number_of_days']);
            }

            return $number_of_days;
        }
        
        else {
            echo " etape 3.6 ";

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

    if ($date_end['year']==$date_start['year']) {

        echo " etape 4.1 ";

        if ($date_start['month']<$date_end['month']){
            
            echo " etape 4.2 ";

            $number_of_days=(($month[($date_start['month']-1)]['number_of_days'])-($date_start['day']))+($date_end['day']);

            for ($i=$date_start['month']; $i<$date_end['month']-1; $i++) {
                $number_of_days+=($month[$i]['number_of_days']);
            }
            
            return $number_of_days;

        }
        elseif ($date_start['month']>$date_end['month']){

            echo " etape 4.3 ";

            $number_of_days=(($month[($date_end['month']-1)]['number_of_days'])-($date_end['day']))+($date_start['day']);

            for ($i=$date_start['month']-2; $i>$date_end['month']-1; $i--) {
                $number_of_days+=($month[$i]['number_of_days']);
            }

            return $number_of_days;

        }
        else {
            // month=month

            echo " etape 4.4 ";

            $number_of_days=$date_end['day']-$date_start['day'];

            if ($number_of_days<0) {
                $number_of_days=$number_of_days*-1;
            }
            return $number_of_days;
        }
    }
    
    else {

        if ($date_start['month']<$date_end['month']) {
            
            echo " etape 4.5 ";

            $number_of_days=(($month[($date_end['month']-1)]['number_of_days'])-($date_end['day']))+($date_start['day']);

            return $number_of_days;
        }

        else { 
            echo " etape 4.6 ";

            if ($date_end['month']==$date_start['month']) {

                $number_of_days=$date_end['day']-$date_start['day'];

                if ($number_of_days<0) {
                    $number_of_days=$number_of_days*-1;
                }

            }else{

            //($date_start['month']>$date_end['month']) 

            $number_of_days=(($month[($date_start['month']-1)]['number_of_days'])-($date_start['day']))+($date_end['day']);
            
            }

            return $number_of_days;

        }
    }
}


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

    $date_start['year']=$trip_start[0];
    $date_start['month']=$trip_start[1];
    $date_start['day']=$trip_start[2];

    settype($date_start['year'],"integer");
    settype($date_start['month'],"integer");
    settype($date_start['day'],"integer");

    $date_end['year']=$trip_end[0];
    $date_end['month']=$trip_end[1];
    $date_end['day']=$trip_end[2];

    settype($date_end['year'],"integer");
    settype($date_end['month'],"integer");
    settype($date_end['day'],"integer");

    echo " etape 2 ";

    $number_of_days_year_calcul=calcul_of_years ($date_start,$date_end,$month);

    $number_of_days_month_calcul=calcul_of_days_between_two_date($date_start,$date_end,$month);

    $number_of_days=$number_of_days_year_calcul+$number_of_days_month_calcul;

    return $number_of_days;

}

$number_of_days=date_calcul($trip_start,$trip_end);

$_SESSION['calendar']['number_of_days']=$number_of_days;

header("Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/Nombre-de-jours/nombre-de-jours.php");
exit;

