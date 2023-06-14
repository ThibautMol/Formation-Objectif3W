<?php


function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlentities($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}


$donnees = "agent de traitement";

//echo valid_donnees($donnees);

$data="bob@mail.com";
$datas=['jean','bobinou','bobo@mail.com','emilie'];

if (in_array($data,$datas)) {
        echo 'yolo';
    $creation_user_error="Email déjà utilisé";
}
else {
    echo 'try again';
}


?>

<!-- <div id="rcmPwdPolicyAnchor" class="alert alert-info mobileApplyPwdPolicy" style="display: block;">
    <div style="width:225px;font-size:12px">
        <ul id="6:_list" class="compact">
            <li>Le mot de passe doit contenir au moins 8 caractères.</li>
            <li>Le mot de passe ne doit pas contenir plus de 18 caractères.</li>
            <li>Le mot de passe doit contenir au moins une lettre minuscule et une majuscule.</li>
            <li>Le mot de passe doit contenir au moins un chiffre ou un signe de ponctuation.</li>
            <li>Le mot de passe ne doit pas contenir d’espace ou de caractères Unicode.</li>
        </ul>
    </div>
</div> -->