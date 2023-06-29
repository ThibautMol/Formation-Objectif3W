<?php 
session_start() ;

var_dump($_POST);


$trip_start=explode("-",$_POST["trip-start"]);
$trip_end=explode("-",$_POST["trip-end"]);

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

    if ($date_end['month']>$date_start['month'])  {
    
        $number_of_days=(($month[($date_start['month']-1)]['number_of_days'])-($date_start['day']))+($date_end['day']);
        // echo $number_of_days;
        // echo " etape 1 ";

        
        if (($date_end['year']!=$date_start['year']) && ($date_end['year']>$date_start['year'])) {
            echo " etape 1.1 ";
            $number_of_years = ($date_end['year'])-($date_start['year']);

            // echo " nombre d'années " . $number_of_years . " ";

            if ($number_of_years>1) {
                echo " etape 1.2 ";

                for ($i=$date_start['month']-1; $i<$date_end['month']-1; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                    echo " boucle for " . $number_of_days . " " . $i;
                }

                $number_of_days+=365*($number_of_years-1);

                for ($i=$date_start['month']-1; $i<12; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                    echo " boucle for " . $number_of_days . " " . $i;
                }
            }

            else { 
                echo " etape 1.3 ";

                for ($i=$date_start['month']-1; $i<$date_end['month']-1; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                    echo " boucle for " . $number_of_days . " " . $i;
                }
                
                for ($i=$date_start['month']-1; $i<$date_end['month']-1; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                    echo " boucle for " . $number_of_days . " " . $i;
                }
            }

            

            // for ($i=$date_start['month']-1; $i<$date_end['month']; $i++) {
            //     $number_of_days+=($month[$i]['number_of_days']);
            //     echo " boucle for " . $number_of_days . " ";
            // }
            // echo " " . $number_of_days . " ";

        }

        elseif (($date_end['year']==$date_start['year']) && ($date_end['year']<$date_start['year'])) {
            echo " etape 1.2 ";
            $number_of_years = ($date_start['year'])-($date_end['year']);

            $number_of_days+=365*$number_of_years;

            if ($number_of_years>1) {
                echo " etape 1.3 ";

                $number_of_days+=365*($number_of_years-1);

                for ($i=$date_start['month']-1; $i<12; $i++) {
                    $number_of_days+=($month[$i]['number_of_days']);
                    echo " boucle for " . $number_of_days . " " . $i;
                }
            }

            else { 
                
                if ($number_of_years==1) {

                    for ($i=$date_start['month']-1; $i<12; $i++) {
                        $number_of_days+=($month[$i]['number_of_days']);
                        echo " boucle for " . $number_of_days . " " . $i;
                    }

                    for ($i=0; $i<$date_end['month']-1; $i++) {
                        $number_of_days+=($month[$i]['number_of_days']);
                        echo " boucle for " . $number_of_days . " " . $i;
                    }

                }

                else {
                    echo "erreur dans les années";
                }
            }

            echo " " . $number_of_days . " ";
        }

    }


    // if (($date_end['month']<$date_start['month'])) {
        
    //     $number_of_days=(($month[($date_end['month']-1)]['number_of_days'])-($date_end['day']))+($date_start['day']);
    //     // echo $number_of_days;
    //     echo " etape 2 ";

    //     if (($date_end['year']!=$date_start['year']) && ($date_end['year']>$date_start['year'])) {
    //         echo " etape 2.1 ";

    //         $number_of_years = ($date_end['year'])-($date_start['year']);

    //         $number_of_days+=365*$number_of_years;



    //         for ($i=$date_start['month']-1; $i<$date_end['month']; $i++) {
    //             $number_of_days+=($month[$i]['number_of_days']);
    //         }
    //         // echo " " . $number_of_days . " ";

    //     }

    //     elseif (($date_end['year']!=$date_start['year']) && ($date_end['year']<$date_start['year'])) {
    //         echo " etape 2.2 ";

    //         $number_of_years = ($date_start['year'])-($date_end['year']);

    //         $number_of_days+=365*$number_of_years;

    //         for ($i=$date_start['month']-1; $i<$date_end['month']; $i++) {
    //             $number_of_days+=($month[$i]['number_of_days']);
    //         }
    //         // echo " " . $number_of_days . " ";

    //     }

    // }

    // echo " calcul total  " . $number_of_days;

    // return $number_of_days;

}
// $date_start['year']=

$number_of_days=date_calcul($trip_start,$trip_end);