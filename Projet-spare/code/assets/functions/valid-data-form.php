<?php

function valid_donnees($donnees){
  $donnees = trim($donnees);
  $donnees = stripslashes($donnees);
  $donnees = htmlentities($donnees);
  $donnees = htmlspecialchars($donnees);
  return $donnees;
}


$firstnameErr = $lastnameErr = $emailErr = $roleErr = $ClassSpeErr = $classroomErr = "";
$firstname = $lastname = $email = $role = $ClassSpe = $classroom = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $firstname = valid_donnees($_POST["firstname"]);
  $lastname = valid_donnees($_POST["lastname"]);
  $email = valid_donnees($_POST["email"]);

  if (empty($_POST["role"])) {
    $roleErr = "Rôle is required"; 
  }
  else {
    $role = valid_donnees($_POST["role"]);
    if (($role!=="administrateur") || ($role!=="agent de traitement") || ($role!=="professeur") || ($role!=="eleve")) {
      $roleErr = "Merci de choisir un des rôles prédéfinis";
    }
  }

  if (empty($_POST["classroom"])) {
    $classroomErr = "Classroom is required"; 
  }
  else {
    $classroom = valid_donnees($_POST["classroom"]);
    if (($classroom!=="class1") || ($classroom!=="class2") || ($classroom!=="class3") || ($classroom!=="class4") || ($classroom!=="class5")) {
      $classroomErr = "Merci de choisir une des classes prédéfinis";
    }
  }

  if (empty($_POST["ClassSpe"])) {
    $ClassSpeErr = "ClassSpe is required"; 
  }
  else {
    $ClassSpe = valid_donnees($_POST["ClassSpe"]);
    if (($ClassSpe!=="class1-1") || ($ClassSpe!=="class1-2") || ($ClassSpe!=="class1-3")) {
      $ClassSpeErr = "Merci de choisir une des classes prédéfinis";
    }
  }


  if (empty($_POST["firstname"])) {
    $firstnameErr = "Firstname is required";
  } else {
    $firstname = valid_donnees($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["lastname"])) {
    $lastnameErr = "lastname is required";
  } else {
    $firstname = valid_donnees($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = valid_donnees($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
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