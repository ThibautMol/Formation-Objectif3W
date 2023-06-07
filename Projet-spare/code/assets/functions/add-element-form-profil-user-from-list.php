<?php

function profil_completion_user_picked () {
    require '.\assets\inc\mysql-profil-user-request.php';
    
        foreach ($all_profil_user as $user) {
            if ($_GET['id']==$user['id']){
                $user_profil['id']=$user['id'];
                $user_profil['email']=$user['email'];
                $user_profil['UserPwd']=$user['UserPwd'];
                $user_profil['firstname']=$user['firstname'];
                $user_profil['lastname']=$user['lastname'];
                $user_profil['statut']=$user['statut'];
                $user_profil['classroom']=$user['classroom'];
                return $user_profil;
            }
        }
    
    
}

if (isset($_GET['id'])){
    $user_profil=profil_completion_user_picked();
    
}

?>