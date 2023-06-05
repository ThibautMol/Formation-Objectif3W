<?php

require_once ("sql-data-base-connexion.php");


$request_login=$db->prepare('SELECT id, email, UserPwd, firstname, lastname FROM users');

$request_login->execute();

$login_selection=$request_login->fetchAll();

?>