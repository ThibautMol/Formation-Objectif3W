<?php
session_start();


if (isset($_POST['element_to_convert'])) {
    $element_to_convert=$_POST['element_to_convert'];
    $_SESSION['result']=strtoupper(roman_numbers_and_letters($element_to_convert));
    $_SESSION['historic'][]=$_SESSION['result'];
    $_SESSION['historic'][]=$element_to_convert;

    // echo $element_to_convert . " ";
    
    // var_dump($_SESSION['result']) . " ";

    echo " resultat attendu : XCII pour 92 ";
    echo " resultat attendu : CDLXXX pour 480 ";
    echo " resultat attendu : CMXX pour 920 ";
    echo " corriger erreurs sur les 9 et les 4";


}


function roman_numbers_and_letters ($element_to_convert) {


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
            $preview_valor=null;

            // var_dump($elements);
            $result_letters_to_number=NULL;
            
           
            
            foreach($elements as $element) {
                // echo " ". " foreach1" . $preview_valor;
                
                foreach ($letters_to_numbers as $letter) {
                    // echo " ". " foreach2" . ($preview_valor);
                    var_dump($preview_valor);
                    
                    if ($element===$letter['letter']) {                        
                       
                        if ((isset($preview_valor)) && ($preview_valor < $letter['number'])) {
                            
                            $result_letters_to_number+=$letter['number'];
                            $result_letters_to_number=($result_letters_to_number-($preview_valor*2));
                            echo " resultat " . $result_letters_to_number. " " . " zz ";
                            // echo " etape 1.1 "; 
                        }
                        else {
                            
                            $result_letters_to_number+=$letter['number'];
                        }

                        $preview_valor=$letter['number'];
                        
                        echo " " . $result_letters_to_number. " ". " yy ";
                        // echo " etape 1.2 ";
                    }
                
                }
            }
            // echo "etape 2 number ";
            var_dump($result_letters_to_number);
            return $result_letters_to_number;
        }

        else {
          

            if (!empty($element_to_convert)) {
                echo "etape 1 letter ";

                $element_to_convert=92;

                $letters_to_numbers = array(
                    array('letter'=>'m', 'number'=>1000),
                    array('letter'=>'d', 'number'=>500),
                    array('letter'=>'c', 'number'=>100),
                    array('letter'=>'l', 'number'=>50),
                    array('letter'=>'x', 'number'=>10),
                    array('letter'=>'v', 'number'=>5),
                    array('letter'=>'i', 'number'=>1)
                );

                settype($element_to_convert, "integer");
                
                $number_to_letters=NULL;
               
                $result_div=(int)($element_to_convert/1000);
                if ($result_div>0) {
                    echo "etape 2 letter ";
                    $number_to_letters.=str_repeat("m",$result_div);
                    $element_to_convert=$element_to_convert-($result_div*1000);
                }
            
                $result_div=(int)($element_to_convert/500);
                if ($result_div>0) {
                    echo "etape 3 letter ";
                    if ($result_div==9) {
                        echo "etape 3.1 letter ";
                        $number_to_letters.="cm";
                        $element_to_convert=$element_to_convert-($result_div*1000);
                    } else {
                        echo "etape 3.2 letter ";
                        $number_to_letters.=str_repeat("d",$result_div);
                        $element_to_convert=($element_to_convert-($result_div*500));
                    }
                }
                
                echo " etape intermédiaire ";


                $result_div=(int)($element_to_convert/100);
                if ($result_div>0) {
                    echo "etape 4 letter ";
                    if ($result_div==4) {
                        echo "etape 4.1 letter ";
                        $number_to_letters.="cd";
                        $element_to_convert=$element_to_convert-($result_div*1000);
                    }else{
                        echo "etape 4.2 letter ";
                        $number_to_letters.=str_repeat("c",$result_div);
                        $element_to_convert=$element_to_convert-($result_div*100);
                    }
                }
                
                $result_div=(int)($element_to_convert/50);
                if ($result_div>0) {
                    echo "etape 5 letter ";
                    if ($result_div==9) {
                        echo "etape 5.1 letter ";
                        $number_to_letters.="xc";
                        $element_to_convert=$element_to_convert-($result_div*1000);
                    }else{
                        echo "etape 5.2 letter ";
                        $number_to_letters.=str_repeat("l",$result_div);
                        $element_to_convert=$element_to_convert-($result_div*50);
                    }
                }

                $result_div=(int)($element_to_convert/10);
                if ($result_div>0) {
                    echo "etape 6 letter ";
                    if ($result_div==4) {
                        echo "etape 6.1 letter ";
                        $number_to_letters.="xl";
                        $element_to_convert=$element_to_convert-($result_div*1000);
                    }else{
                        echo "etape 6.2 letter ";
                        $number_to_letters.=str_repeat("x",$result_div);
                        $element_to_convert=$element_to_convert-($result_div*10);
                    }
                }
                $result_div=(int)($element_to_convert/5);
                if ($result_div>0) {
                    echo "etape 7 letter ";
                    if ($result_div==9) {
                        echo "etape 7.1 letter ";
                        $number_to_letters.="iv";
                        $element_to_convert=$element_to_convert-($result_div*1000);
                    }else{
                        echo "etape 7.2 letter ";
                        $number_to_letters.=str_repeat("v",$result_div);
                        $element_to_convert=$element_to_convert-($result_div*5);
                    }
                }
            
                $result_div=(int)($element_to_convert/1);
                if ($result_div>0) {
                    echo "etape 8 letter ";
                    if ($result_div==4) {
                        echo "etape 8.1 letter ";
                        $number_to_letters.="iv";
                        $element_to_convert=$element_to_convert-($result_div*1000);
                    }else{
                        echo "etape 8.2 letter ";
                        $number_to_letters.=str_repeat("i",$result_div);
                        $element_to_convert=$element_to_convert-($result_div*1);
                    }
                }
                var_dump($number_to_letters);
                return $number_to_letters;
                
            }
            
        
            else {
                echo "etape 9 letters ";
                $number_to_letters="y'a un souci capt'ain";
            }

            
            return $number_to_letters;
        }

    }
}




// header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/convertisseur-numerique/convertisseur-numerique.php');
// exit;


?>