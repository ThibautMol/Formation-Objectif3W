<?php 

function mdp_generator ($firstname, $lastname) {
    $UserPwd=substr($firstname, 0 , 1).$lastname; 

    $UserPwd=password_hash($UserPwd,PASSWORD_BCRYPT);
    return $UserPwd;
}

?>