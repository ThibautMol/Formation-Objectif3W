<?php
session_start();


// if (isset($_POST['element_to_convert'])) {
    $element_to_convert=$_POST['element_to_convert'];
    $number_to_letters=NULL;
    // $_SESSION['result']=roman_numbers_and_letters ($element_to_convert);
//     if ((isset($_SESSION['result'])) && (!empty($_SESSION['result']))) {
//         $_SESSION['historic']['result'][]=$_SESSION['result'];
//         $_SESSION['historic']['input_user'][]=$element_to_convert;
//     }

// }


// function roman_numbers_and_letters ($element_to_convert) {

    if (!empty($element_to_convert)) {

        $element_to_convert=strtolower($element_to_convert);
        
        $letters_to_numbers = array(
            array('letter'=>'m', 'number'=>1000),
            array('letter'=>'d', 'number'=>500),
            array('letter'=>'c', 'number'=>100),
            array('letter'=>'l', 'number'=>50),
            array('letter'=>'x', 'number'=>10),
            array('letter'=>'v', 'number'=>5),
            array('letter'=>'i', 'number'=>1)
        );

        if (!is_numeric($element_to_convert)) {
            echo "etape 1 number ";

            $elements=str_split($element_to_convert);
            
            foreach($elements as $element) {
                foreach ($letters_to_numbers as $letter) {
                    if ($element===$letter['letter']) {
                        $letters_to_number+=$letter['number'];
                    }
                }
            }
            echo "etape 2 number ";
            // return $letters_to_number;
        }

        else {
            echo "etape 1 letters ";
            settype($element_to_convert, "integer");
            
            if (($element_to_convert/1000)>0) {
                echo "etape 2 letters ";
                $result_div=(int)$element_to_convert/1000;
                $number_to_letters.=str_repeat("m",$result_div);
                $element_to_convert=$element_to_convert-($result_div*1000);
                echo "etape 2.2 letters ";
            }
            elseif ((($element_to_convert/500)>0)&&(($element_to_convert/500)<10)) {
                echo "etape 3 letters ";
                $result_div=(int)$element_to_convert/500;
                $number_to_letters.=str_repeat("d",$result_div);
                $element_to_convert.=$element_to_convert-($result_div*500);
                echo "etape 3.1 letters ";
            }
            elseif ((($element_to_convert/100)>0)&&(($element_to_convert/100)<10)) {
                echo "etape 4 letters ";
                $result_div=(int)$element_to_convert/100;
                $number_to_letters.=str_repeat("c",$result_div);
                $element_to_convert.=$element_to_convert-($result_div*100);
                echo "etape 4.1 letters ";
            }
            elseif ((($element_to_convert/50)>0)&&(($element_to_convert/50)<10)) {
                echo "etape 5 letters ";
                $result_div=(int)$element_to_convert/50;
                $number_to_letters.=str_repeat("l",$result_div);
                $element_to_convert.=$element_to_convert-($result_div*50);
                echo "etape 5.1 letters ";
            }
            elseif ((($element_to_convert/10)>0)&&(($element_to_convert/100)<10)) {
                echo "etape 6 letters ";
                $result_div=(int)$element_to_convert/10;
                $number_to_letters.=str_repeat("x",$result_div);
                $element_to_convert=$element_to_convert-($result_div*10);
                echo "etape 6.1 letters ";
            }
            elseif ((($element_to_convert/5)>0)&&(($element_to_convert/5)<10)) {
                echo "etape 7 letters ";
                $result_div=(int)$element_to_convert/5;
                $number_to_letters.=str_repeat("v",$result_div);
                $element_to_convert=$element_to_convert-($result_div*5);
                echo "etape 7.1 letters ";
            }
            elseif ((($element_to_convert/1)>0)&&(($element_to_convert/1)<10)) {
                echo "etape 8 letters ";
                $result_div=(int)$element_to_convert/1;
                $number_to_letters.=str_repeat("i",$result_div);
                $element_to_convert=$element_to_convert-($result_div*1);
                echo "etape 8.1 letters ";
            }
        
            else {
                echo "etape 9 letters ";
                $number_to_letters=$element_to_convert*10;
            }

            // 1952
            // mdccclii
            // return $number_to_letters;
        }

    }
// }



function thousand_to_letters($element_to_convert) {
    echo " etape thousand 1 "; 
    $number_to_letters=NULL;
    echo $element_to_convert;

    $result_div=(int)($element_to_convert/1000);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("m",$result_div);
    $element_to_convert=$element_to_convert-($result_div*1000);
    }
    echo " etape thousand 2 ";
    echo $result_div . " ";
    var_dump($element_to_convert) . " " ;
    

    $result_div=(int)($element_to_convert/500);
    if ($result_div>0) {
    echo $result_div . " ";
    $number_to_letters.=str_repeat("d",$result_div);
    echo $element_to_convert . " " ;
    $element_to_convert=($element_to_convert-($result_div*500));
    echo $element_to_convert . " " ;
    }
    echo " etape thousand 3 ";
    echo $element_to_convert . " ";;

    $result_div=(int)($element_to_convert/100);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("c",$result_div);
    $element_to_convert=$element_to_convert-($result_div*100);
    }
    echo "etape thousand 4 ";
    echo $element_to_convert . " ";;

    $result_div=(int)($element_to_convert/50);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("l",$result_div);
    $element_to_convert=$element_to_convert-($result_div*50);
    }
    echo "etape thousand 5 ";
    echo $element_to_convert . " ";;

    $result_div=(int)($element_to_convert/10);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("x",$result_div);
    $element_to_convert=$element_to_convert-($result_div*10);
    }
    echo "etape thousand 6 ";
    echo $element_to_convert . " ";;

    $result_div=(int)($element_to_convert/5);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("v",$result_div);
    $element_to_convert=$element_to_convert-($result_div*5);
    }
    echo "etape thousand 7 ";
    echo $element_to_convert . " ";;

    $result_div=(int)($element_to_convert/1);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("i",$result_div);
    $element_to_convert=$element_to_convert-($result_div*1);
    }
    echo "etape thousand 8 ";
    return $number_to_letters;
}

function undred_to_letters($element_to_convert) {
    $number_to_letters=NULL;
    
    $result_div=(int)($element_to_convert/500);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("d",$result_div);
    $element_to_conver.=$element_to_convert-($result_div*500);
    }

    $result_div=(int)($element_to_convert/100);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("c",$result_div);
    $element_to_convert=$element_to_convert-($result_div*100);
    }

    $result_div=(int)($element_to_convert/50);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("l",$result_div);
    $element_to_convert=$element_to_convert-($result_div*50);
    }

    $result_div=(int)($element_to_convert/10);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("x",$result_div);
    $element_to_convert=$element_to_convert-($result_div*10);
    }

    $result_div=(int)($element_to_convert/5);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("v",$result_div);
    $element_to_convert=$element_to_convert-($result_div*5);
    }

    $result_div=(int)($element_to_convert/1);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("i",$result_div);
    $element_to_convert=$element_to_convert-($result_div*1);
    }
    
    return $number_to_letters;
}

function ten_to_letters($element_to_convert) {

    $number_to_letters=NULL;

    $result_div=(int)($element_to_convert/50);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("l",$result_div);
    $element_to_convert=$element_to_convert-($result_div*50);
    }

    $result_div=(int)($element_to_convert/10);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("x",$result_div);
    $element_to_convert=$element_to_convert-($result_div*10);
    }

    $result_div=(int)($element_to_convert/5);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("v",$result_div);
    $element_to_convert=$element_to_convert-($result_div*5);
    }

    $result_div=(int)($element_to_convert/1);
    if ($result_div>0) {
    $number_to_letters.=str_repeat("i",$result_div);
    $element_to_convert=$element_to_convert-($result_div*1); 
    }

    return $number_to_letters;
}

function unit_to_letters($element_to_convert) {
    $number_to_letters=NULL;

    $result_div=(int)$element_to_convert/5;
    if ($result_div>0) {
    $number_to_letters.=str_repeat("v",$result_div);
    $element_to_convert=$element_to_convert-($result_div*5);
    }

    $result_div=(int)$element_to_convert/1;
    if ($result_div>0) {
    $number_to_letters.=str_repeat("i",$result_div);
    $element_to_convert=$element_to_convert-($result_div*1);
    }
    
    return $number_to_letters;
}




?>