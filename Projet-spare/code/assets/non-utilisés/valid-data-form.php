<?php

require_once ('valid-donnees.php');

$firstname = $lastname = $email = $role = $ClassSpe = $classroom = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $firstname = valid_donnees($_POST["firstname"]);
  $lastname = valid_donnees($_POST["lastname"]);
  $email = valid_donnees($_POST["email"]);

  if (isset($_POST['role'])){

    if (empty($_POST["role"])) {
      $_SESSION['SPARE']['roleErr'] = "Rôle is required"; 
    }
    else {
      $role = valid_donnees($_POST["role"]);
      if (($role!=="administrateur") || ($role!=="agent de traitement") || ($role!=="professeur") || ($role!=="eleve")) {
        $_SESSION['SPARE']['roleErr'] = "Merci de choisir un des rôles prédéfinis";
        
      }
    }
  }

  
  if (isset($_POST['classroom'])){

    if (empty($_POST["classroom"])) {
      $_SESSION['SPARE']['classroomErr'] = "Classroom is required"; 
    }
    else {
      $classroom = valid_donnees($_POST["classroom"]);
      if (($classroom!=="class1") || ($classroom!=="class2") || ($classroom!=="class3") || ($classroom!=="class4") || ($classroom!=="class5")) {
        $_SESSION['SPARE']['classroomErr'] = "Merci de choisir une des classes prédéfinis";
        
      }
    }
  }

  if (isset($_POST['ClassSpe'])){

    if (empty($_POST["ClassSpe"])) {
      $_SESSION['SPARE']['ClassSpeErr'] = "ClassSpe is required";
    }
    else {
      $ClassSpe = valid_donnees($_POST["ClassSpe"]);
      if (($ClassSpe!=="class1-1") || ($ClassSpe!=="class1-2") || ($ClassSpe!=="class1-3")) {
        $_SESSION['SPARE']['ClassSpeErr'] = "Merci de choisir une des classes prédéfinis";
        
      }
    }
  }

  if (isset($_POST['firstname'])){

    if (empty($_POST["firstname"])) {
      $_SESSION['SPARE']['firstnameErr'] = "Firstname is required";
    } else {
      $firstname = valid_donnees($_POST["firstname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $_SESSION['SPARE']['firstnameErr'] = "Only letters and white space allowed";
      }
    }
  }

  if (isset($_POST['lastname'])){

    if (empty($_POST["lastname"])) {
      $_SESSION['SPARE']['lastnameErr'] = "lastname is required";
    } else {
      $firstname = valid_donnees($_POST["lastname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $_SESSION['SPARE']['lastnameErr'] = "Only letters and white space allowed";
      }
    }
  }
  
  if (isset($_POST['email'])){

    if (empty($_POST["email"])) {
      $_SESSION['SPARE']['emailErr'] = "Email is required";
    } else {
      $email = valid_donnees($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['SPARE']['emailErr'] = "Invalid email format";
      }
    }
  }

  // if (empty($_POST["website"])) {
  //   $website = "";
  // } else {
  //   $website = valid_donnees($_POST["website"]);
  //   // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
  //   if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  //     $websiteErr = "Invalid URL";
  //   }
  // }
}

?>