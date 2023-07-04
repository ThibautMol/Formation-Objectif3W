<?php

function userFilter($all_profil_user, $role, $classRoom, $classSpe){

    $okFilter = [];
    $okRole = empty($role) ?: $okFilter[] = $role ;
    $okclassRoom = empty($classRoom) ?: $okFilter[] = $classRoom ;
    $okClassSpe = empty($classSpe) ?: $okFilter[] = $classSpe ;

    $user_list_filtered = [];
    
        if(!empty($okFilter)){

            foreach($all_profil_user as $user){
                
                if(count(array_intersect($okFilter, $user)) == count($okFilter)){
                    
                    if(!in_array( $user['id'], $user_list_filtered)) {

                        $user_list_filtered[] = $user;
                    }
                }
            }     

        }
        else {
            $user_list_filtered=$all_profil_user;
        }

    return $user_list_filtered;

}


if (isset($_GET['role'], $_GET['classroom'], $_GET['ClassSpe'])){
$all_profil_user = userFilter($all_profil_user, $_GET['role'], $_GET['classroom'], $_GET['ClassSpe']);
}


?>

