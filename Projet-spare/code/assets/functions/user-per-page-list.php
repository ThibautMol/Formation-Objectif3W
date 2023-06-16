<?php 
    function user_per_page_list() {
    if (isset($_POST['user_per_page'])) {
            $_SESSION['SPARE']['user_per_page']=$_POST['user_per_page'];
        }
    
    if (isset($_SESSION['SPARE']['user_per_page'])) {
        if ($_SESSION['SPARE']['user_per_page']=='') {
            $user_per_page=99999;
            return $user_per_page;
        }
        else {
            $user_per_page=$_SESSION['SPARE']['user_per_page'];
            settype($user_per_page, 'integer');
            return $user_per_page;
        }
    } 
    else {
            return $user_per_page=5;
        }
    }

    $user_per_page=user_per_page_list();

?>