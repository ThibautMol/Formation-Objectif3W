<?php
session_start();


// add-element-form-profil-user-from-list.php
function profil_completion_user_picked () {
    require '.\assets\inc\mysql-profil-user-request.php';
    
        foreach ($all_profil_user as $user) {
            if ($_GET['id']==$user['id']){
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


// --------------------------------------------------------------------

//add-element-form-profil-user.php
function profil_completion () {
    require '.\assets\inc\mysql-profil-user-request.php';


    if (isset($_SESSION['USER_ID'])) {
        foreach ($all_profil_user as $user) {
            if ($_SESSION['USER_ID']===$user['id']){
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
}

if (isset($_SESSION['USER_ID'])){
    $user_profil=profil_completion();
}

// --------------------------------------------------------------------

//all-user-list-generation
require_once (".\assets\inc\mysql-profil-user-request.php");

$all_profil_user;

// --------------------------------------------------------------------

//disabled-input.php

function disabled($is_disabled) {
    if ($is_disabled==1) {
        return 'disabled';
    }
    else {
        return '';
    }
}
$disabled_abled=disabled($is_disabled);


// --------------------------------------------------------------------

//login-function.php
$login_form=$_POST;   
function login_validation ($login_form) {
    require '.\assets\inc\mysql-login-request.php';


    if (isset($login_form['email']) && isset($login_form['password'])) {
        foreach ($login_selection as $user) {
            if ($user['email']===$login_form['email'] &&
                $user['UserPwd']===$login_form['password']) {
                $_SESSION['USER_FIRSTNAME']=$user['firstname'];
                $_SESSION['USER_ID']=$user['id'];
                $_SESSION['USER_LASTNAME']=$user['lastname'];
            }
        }
    }

    if ((isset($_SESSION['USER_FIRSTNAME']))){
        return header('Location: http://localhost/Formation-Objectif3W/Projet-spare/code/dashboard.php');
    }
}

if (isset($_POST)){
    login_validation($login_form);
}

?>