<?php
   session_start();
    $login_form=$_POST;   

    function login_validation ($login_form) {
        require '.\assets\inc\mysql-login-request.php';


        if (isset($login_form['email']) && isset($login_form['password'])) {
            foreach ($login_selection as $user) {
                if ($user['email']===$login_form['email'] &&
                    $user['UserPwd']===$login_form['password']) {
                    $_SESSION['SPARE']['USER_FIRSTNAME']=$user['firstname'];
                    $_SESSION['SPARE']['USER_ID']=$user['id'];
                    $_SESSION['SPARE']['USER_LASTNAME']=$user['lastname'];
                    $_SESSION['SPARE']['FIRST_VISIT']=$user['first_visit'];
                }
            }
        }

        if (isset($_SESSION['SPARE']['FIRST_VISIT'])) {
            if (($_SESSION['SPARE']['FIRST_VISIT']==1)){
                return header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/dashboard.php');
            }
            else {
                return header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/profil-user-edit.php');
            }
        }
    }

    if (isset($_POST)){
        login_validation($login_form);
    }

?>