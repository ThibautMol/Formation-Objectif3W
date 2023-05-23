<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
        
    <link rel="stylesheet" href="asset/css/exercice-affichage-recherche-auteur.css">
    <script>
        // setInterval(function(){location.reload(true);}, 5000);
    </script>

    <title>Affichage exercices php</title>
</head>
<body class="container d-flex flex-column ">
    


<h5 class="d-flex justify-content-center">Choisissez parmi les auteurs suivants</h5>
<p class="d-flex justify-content-center">Alex, Sophie et Bob</p>

<form class="d-flex justify-content-center " method="POST">
    <input class="me-2" type="text" id="book_author" name="book_author">
    <button class="btn btn-primary" type="submit" name="submit">Chercher</button>
</form>

<p>
    <?php 
    function finding_book_by_author_v2($author_pick) {
        $books = [
            ['cover' => 'https://m.media-amazon.com/images/I/41gr3r3FSWL.jpg',
            'name'=>'nom du livre1',
            'author'=>'Bob',
            'release_year'=> 1995,
            'purchase_url'=>'http://google.com'],
            ['cover' => 'https://cdn.vox-cdn.com/thumbor/p-gGrwlaU4rLikEAgYhupMUhIJc=/0x0:1650x2475/1200x0/filters:focal(0x0:1650x2475):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/13757614/817BsplxI9L.jpg',
            'name'=>'nom du livre2',
            'author'=>'Bob',
            'release_year'=> 1802,
            'purchase_url'=>'http://google.com'],
            ['cover' => 'https://edit.org/images/cat/book-covers-big-2019101610.jpg',
            'name'=>'nom du livre3',
            'author'=>'Sophie',
            'release_year'=> 2023,
            'purchase_url'=>'http://google.com'],
            ['cover' => 'https://miblart.com/wp-content/uploads/2020/01/crime-and-mystery-cover-scaled-1.jpeg',
            'name'=>'nom du livre4',
            'author'=>'Sophie',
            'release_year'=> 2002,
            'purchase_url'=>'http://google.com'],
            ['cover' => 'https://designforwriters.com/wp-content/uploads/2017/10/design-for-writers-book-cover-tf-2-a-million-to-one.jpg',
            'name'=>'nom du livre5',
            'author'=>'Bob',
            'release_year'=> 1923,
            'purchase_url'=>'http://google.com'],
            ['cover' => 'https://marketplace.canva.com/EAFBN69UM-A/1/0/1003w/canva-black-red-vintage-time-book-cover-N4kq526KmFo.jpg',
            'name'=>'nom du livre6',
            'author'=>'Alex',
            'release_year'=> 2018,
            'purchase_url'=>'http://google.com']
        ];

        // $author_pick=readline('Choisissez les oeuvres parmi les auteurs suivants Bob, Sophie et Alex : ');

        foreach ($books as $book) {
            if (array_search($author_pick, $book)){
                echo '<img class="rounded mx-auto d-block w-25 h-25 mt-5" src="'.$book['cover'].'" />';
                echo '<div class="d-flex justify-content-center">' . 'Titre : ' . $book['name'] . '</div>';
                echo '<div class="d-flex justify-content-center">' . 'Auteur : ' . $book['author'] . '</div>';
                echo '<div class="d-flex justify-content-center">' . 'Année d\'édition : ' . $book['release_year'] . '</div>';
                echo '<a class="d-flex justify-content-center" href="'.$book['purchase_url'].'" target="_BLANK">' . 'Achetez-moi'  . "</a>";
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