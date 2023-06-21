<?php 
 $firstname = $lastname = $email = $role = $ClassSpe = $classroom = "";

 $email=strtolower($_POST['email']); 
 $firstname=strtolower($_POST['firstname']); 
 $lastname=strtolower($_POST['lastname']); 
 $statut=strtolower($_POST['statut']); 
 $classroom=strtolower($_POST['classroom']);
 $ClassSpe=strtolower($_POST['ClassSpe']); 


 if (isset($_POST['statut'])){

   //echo "étape 2 ";
   $statut = valid_donnees($_POST['statut']);
     
   if (empty($_POST['statut'])) {
     $_SESSION['SPARE']['errors']['statutErr'] = "Veuillez spécifier un statut"; 
     //echo "étape 2.1 ";
   }
   else {
       
     if (!in_array($statut,$all_roles_formated)) {
       $_SESSION['SPARE']['errors']['statutErr'] = "Merci de choisir un des statuts prédéfinis";
       //echo "étape 2.2 "; 
         
     }
     else {
       unset($_SESSION['SPARE']['errors']['statutErr']);
       //echo "étape unset ";
     }
   }
 }

 
 if (isset($_POST['ClassSpe'])){
   echo "étape 3 ";

   $classroom = valid_donnees($_POST["classroom"]); 

   if (empty($_POST["classroom"])) {
     //echo "étape 3.1 ";
     unset($_SESSION['SPARE']['errors']['classroomErr']);
    
   }
   else {
     if (!in_array($classroom,$all_main_classes_formated)) {
       //echo "étape 3.2 ";
       $_SESSION['SPARE']['errors']['classroomErr'] = "Merci de choisir une des classes prédéfinies";
     }

     else {
       unset($_SESSION['SPARE']['errors']['classroomErr']);
       //echo "étape unset ";
     }
   }
   
 }

 if (isset($_POST['ClassSpe'])){
   //echo "étape 4 ";
   
   $ClassSpe = valid_donnees($_POST["ClassSpe"]);

   if (empty($_POST['ClassSpe'])){
     //echo "étape 4.1 ";
     unset($_SESSION['SPARE']['errors']['ClassSpeErr']);
   }
   else {
     if (!in_array($ClassSpe,$all_spe_classes_formated)) {
       //echo "étape 4.2 ";
       $_SESSION['SPARE']['errors']['ClassSpeErr'] = "Merci de choisir une des classes prédéfinies";        
     }
     else {
       unset($_SESSION['SPARE']['errors']['ClassSpeErr']);
      //echo "étape unset ";
     }
   }
 }


 if (isset($_POST['firstname'])){
   //echo "étape 5 ";
   echo ($_POST['firstname']);

   if (empty($_POST["firstname"])) {
     $_SESSION['SPARE']['errors']['firstnameErr'] = "Veuillez spécifier un prénom";
     //echo "étape 5.1 ";
   } 
   
   else {

   $firstname = valid_donnees($_POST["firstname"]);
     // check if name only contains letters and whitespace
     // echo "étape 5.2 ";
    

     if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
       $_SESSION['SPARE']['errors']['firstnameErr'] = "Seulement des lettres et des espaces sont acceptés";
       //echo "étape 5.3 ";
     }
     else {
       unset($_SESSION['SPARE']['errors']['firstnameErr']);
       //echo "étape unset ";
     }
   }
 }

 if (isset($_POST['lastname'])){
   //echo "étape 6 ";

   if (empty($_POST["lastname"])) {
     $_SESSION['SPARE']['errors']['lastnameErr'] = "Veuillez spécifier un nom";
     //echo "étape 6.1 ";
   } 
   
   else {
     $lastname = valid_donnees($_POST["lastname"]);
     //echo "étape 6.2 ";
     // check if name only contains letters and whitespace
     
     if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
       $_SESSION['SPARE']['errors']['lastnameErr'] = "Seulement des lettres et des espaces sont acceptés";
       //echo "étape 6.3 ";
     }
     else {
       unset($_SESSION['SPARE']['errors']['lastnameErr']);
       //echo "étape unset ";
     }
   }
 }
 
 if (isset($_POST['email'])){
   //echo "étape 7 ";

   if (empty($_POST["email"])) {
   $_SESSION['SPARE']['errors']['emailErr'] = "Veuillez entrer un email";
   //echo "étape 7.1 ";
   } else {
   $email = valid_donnees($_POST["email"]);
   // check if e-mail address is well-formed
   if (in_array($email,$all_user_email)) {
     $_SESSION['SPARE']['errors']['emailErr'] = "Email déjà utilisé";
     //echo "étape 7.2 ";
   }
   elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $_SESSION['SPARE']['errors']['emailErr'] = "Veuillez entrer une adresse email valide";
     //echo "étape 7.3 ";
 }
   else {
       unset($_SESSION['SPARE']['errors']['emailErr']);
       //echo "étape unset ";
     }
   }
 }