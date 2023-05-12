<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="asset/css/exercices-affichage.css">


    <title>Affichage exercices php</title>
</head>
<body>
    
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>


    <h1>Afficher les voitures dans un tableau</h1>

    <p>Description de l'exercice :
        Afficher les éléments contenus dans ce tableau :
        $vehicules=[
            'voitures' => ['C3 aircross', 'Passat', 'Dacia Sandero'],
            'Camions' => ['Renault truck', 'Mercedes-Benz Unimog']
        ];
    </p>

<p>
    <?php
        $vehicules=[
            'voitures' => ['C3 aircross', 'Passat', 'Dacia Sandero'],
            'Camions' => ['Renault truck', 'Mercedes-Benz Unimog']
        ];

        foreach ($vehicules as $type_vehicule => $liste_vehicule) {
            echo "Le type de véhicule est : $type_vehicule";
            echo "<br>";
            echo 'Cette liste contient : ' . PHP_EOL ;
            echo "<br>";
            echo '<table border="1">';
            foreach($liste_vehicule as $vehicule) {
                    echo '<tr>';
                    echo '<td>' . $vehicule . '</td>';
                    echo '</tr>';
                }
            echo '</table>';
        }
        
        
    ?> 
</p>


<h1>Tableau associatif en utilisant array_key_exists, in_array et _array_search</h1>
<p>
    Description de l'exercice : 
    Un tableau classe content 3 élèves, bob, kevin et lorie. Chacuns possèdent un nom, un email et un âge.
    Il faudra vérifier que la clef 'age' existe bien dans le tableau de bob.
    Il faudra vérifier que le tableau de kevin possède bien la donnée '22'.
    Il faudra vérifier que le tableau de lorie possède bien la donnée 'lolomail@kikou.fr'.
    Toutes ces vérifications doivent donner lieu à la confirmation du résultat ou de son échec. 
</p>

<p>
    <?php 
        $bob=[
            'name' => 'Bob Dylan', 
            'email'=> 'ggmail@kikou.fr', 
            'age' => 34];
        $kevin=[
            'name' => 'Kevin Spacy', 
            'email'=> 'kkmail@kikou.fr', 
            'age' => 22];
        $lorie=[
            'name' => 'Lorie Tameilleureamie', 
            'email'=> 'lolomail@kikou.fr', 
            'age' =>15];

        #Vérifie qu'une clef existe dans le tableau bob
        if (array_key_exists('age', $bob)) {
            echo 'Bob a bien un âge définit dans son tableau' . PHP_EOL;
            echo "<br>";
        }

        else {
            echo 'la commande array key exists n\'a pas marchée' . PHP_EOL;
            echo "<br>";
        }

        #Vérifie que la donnée '22' est bien dans le tableau kevin
        if (in_array('22',$kevin)) {
            echo 'Le tableau de Kévin a bien inscrit 22 ans pour son âge' . PHP_EOL;
            echo "<br>";
        }

        else {
            echo 'la commande in array n\'a pas marchée' . PHP_EOL;
            echo "<br>";
        }

        #Vérifie que la donné email est bien contenue dans le tableau lorie
        if (array_search('lolomail@kikou.fr', $lorie)) {
            echo 'L\'email de Lorie a été trouvé' . PHP_EOL;
            echo "<br>";
        }

        else {
            echo 'la commande array search n\'a pas marchée' . PHP_EOL;
            echo "<br>";}
    ?>
</p>

<?php
echo '<table>';
for($i = 1; $i < 5; $i++) {
    echo '<tr>';
    for($j = 1; $j < 5; $j++) {
        echo '<td>' . $j . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>


<p>
    <?php
        $vehicules=[
            'voitures' => ['C3 aircross', 'Passat', 'Dacia Sandero'],
            'Camions' => ['Renault truck', 'Mercedes-Benz Unimog']
        ];

        foreach ($vehicules as $type_vehicule => $liste_vehicule) {
            echo '<table border="1">';
            echo '<td>' . '<strong>' . $type_vehicule . '</strong>' . '</td>';    
            foreach($liste_vehicule as $vehicule) {
                    echo '<tr>';
                    echo '<td>' . $vehicule . '</td>';
                    echo '</tr>';
                }
            echo '</table>';
        }
        
        
    ?> 
</p>







</body>
</html>