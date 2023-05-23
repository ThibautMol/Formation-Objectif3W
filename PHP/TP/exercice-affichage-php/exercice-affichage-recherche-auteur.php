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
    


<h5>Choisissez parmi les auteurs suivants</h5>
<p>Alex, Sophie et Bob</p>

<form method="POST">
<input type="text" id="book_author" name="book_author">
<input type="submit" name="submit" value="Chercher" />
</form>

<p>
    <?php 
    function finding_book_by_author_v2($author_pick) {
        $books = [
            ['name'=>'nom du livre1',
            'author'=>'Bob',
            'release_year'=> 1995,
            'purchase_url'=>'http://google.com'],
            ['name'=>'nom du livre2',
            'author'=>'Bob',
            'release_year'=> 1802,
            'purchase_url'=>'http://google.com'],
            ['name'=>'nom du livre3',
            'author'=>'Sophie',
            'release_year'=> 2023,
            'purchase_url'=>'http://google.com'],
            ['name'=>'nom du livre4',
            'author'=>'Sophie',
            'release_year'=> 2002,
            'purchase_url'=>'http://google.com'],
            ['name'=>'nom du livre5',
            'author'=>'Bob',
            'release_year'=> 1923,
            'purchase_url'=>'http://google.com'],
            ['name'=>'nom du livre6',
            'author'=>'Alex',
            'release_year'=> 2018,
            'purchase_url'=>'http://google.com']
        ];

        // $author_pick=readline('Choisissez les oeuvres parmi les auteurs suivants Bob, Sophie et Alex : ');

        foreach ($books as $book) {
            if (array_search($author_pick, $book)){
                echo '<div>' . 'Titre : ' . $book['name'] . '</div>';
                echo '<div>' . 'Auteur : ' . $book['author'] . '</div>';
                echo '<div>' . 'Année d\'édition : ' . $book['release_year'] . '</div>';
                echo '<a href="'.$book['purchase_url'].'" target="_BLANK">' . 'Achetez-moi'  . "</a>";
                }
            }
        }

    $author_pick=$_POST['book_author'];
    // echo $author_pick;

    finding_book_by_author_v2($author_pick);

    
    ?>
</p>







</body>
</html>