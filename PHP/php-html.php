<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <h1>PHP</h1>

    <!-- quand on injecte un élément php dans du HTML, on doit enregistrer la page au format PHP -->

    <?php echo '<p>Hello World</p>' ;?> 
    <?= '<p>Hello World</p>' ;?> 

    <!-- on peut remplacer php echo par juste un = -->

    <?php
        $users= [
            ['name' => 'bob',
            'lastname' => 'jean',
            'bio' => 'link'
            ]]
    ?>

    <?php foreach ($users as $user) {
        echo '<li class="text"> <a href="' . $users ['portefolio'] . '">' . $users['name'] . PHP_EOL;
    } 
    ?>

    <?php foreach ($suers as$user) : ?>
        <li class="text">
            <a href="<?=$user['portefolio'] ?>">
                <?=$user['name'] . ' ' . $user ['firstname'];?>
            </a>
        </li>
    <?php endforeach; ?>

</body>
</html>