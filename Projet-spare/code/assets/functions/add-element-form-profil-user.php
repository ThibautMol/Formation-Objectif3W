<?php

function profil_completion () {
    require '.\assets\inc\mysql-profil-user-request.php';


    if (isset($_SESSION['SPARE']['USER_ID'])) {
        foreach ($all_profil_user as $user) {
            if ($_SESSION['SPARE']['USER_ID']==$user['id']){
                $user_profil['email']=$user['email'];
                $user_profil['UserPwd']=$user['UserPwd'];
                $user_profil['firstname']=$user['firstname'];
                $user_profil['lastname']=$user['lastname'];
                $user_profil['statut']=$user['statut'];
                $user_profil['classroom']=$user['classroom'];
                $user_profil['ClassSpe']=$user['ClassSpe'];
                return $user_profil;
            }
        }
    }
}

if (isset($_SESSION['SPARE']['USER_ID'])){
    $user_profil=profil_completion();
}

?>