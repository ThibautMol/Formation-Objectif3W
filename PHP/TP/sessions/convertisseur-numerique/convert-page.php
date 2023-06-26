<?php
session_start();


if (isset($_POST['element_to_convert'])) {
    $element_to_convert=$_POST['element_to_convert'];
    $_SESSION['result']=strtoupper(roman_numbers_and_letters($element_to_convert));
    $_SESSION['historic'][]=$_SESSION['result'];
    $_SESSION['historic'][]=$element_to_convert;

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

                settype($element_to_convert, "integer");
                
                $number_to_letters=NULL;

                $number_to_letters = [
                    'M' => 1000,
                    'CM' => 900,
                    'D' => 500,
                    'CD' => 400,
                    'C' => 100,
                    'XC' => 90,
                    'L' => 50,
                    'XL' => 40,
                    'X' => 10,
                    'IX' => 9,
                    'V' => 5,
                    'IV' => 4,
                    'I' => 1
                ];
            
                $result_number_to_letters= null;

                foreach ($number_to_letters as $symbol => $value) {
                    while ($element_to_convert >= $value) {
                        $result_number_to_letters .= $symbol;
                        $element_to_convert -= $value;
                    }
                }
            
                return $result_number_to_letters;
            }
              
        }
    }
}




    


header('Location: http://localhost/Formation-Objectif3W/PHP/TP/sessions/convertisseur-numerique/convertisseur-numerique.php');
exit;


?>