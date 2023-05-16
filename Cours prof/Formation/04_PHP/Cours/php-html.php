<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <script>
        // setInterval(function(){location.reload(true);}, 10000);
    </script>
</head>
<body>
    
    <h1>PHP - toto</h1>

    <?php 
        $users= [
            [
                'name' => 'Collado',
                'firstname' => 'Arturo',
                'portfolio' => 'arturocollado.com'
            ],

            [
                'name' => 'Moscet',
                'firstname' => 'Sony',
                'portfolio' => 'sonymoscet.com'
            ]
        ];
    ?>

    <ul>

        <?php foreach($users as $user){
            echo '<li class="text"> <a href= "'. $user['portfolio'].'">'. $user['name']. ' '. $user['firstname'] .'</a></li>';
        } ?>

        <hr> 

        <?php foreach($users as $user) : ?>
            <li class="text">
                <a href="<?= $user['portfolio'] ?>">
                    <?= $user['name']. ' '. $user['firstname']; ?>
                </a>
            </li>
        <?php endforeach; ?>



        

        

    </ul>



</body>
</html>


