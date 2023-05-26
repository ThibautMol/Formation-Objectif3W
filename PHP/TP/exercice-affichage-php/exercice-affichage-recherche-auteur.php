
<?php include_once ('header.php');?>

    <div class="container d-flex flex-column ">
        
        <h5 class="d-flex justify-content-center">Choisissez parmi les auteurs suivants</h5>
        <p class="d-flex justify-content-center">Alex, Sophie et Bob. Tapez 'tout' pour voir la totalité des livres</p>

        <form class="d-flex justify-content-center " method="POST">
            <input class="me-2" type="text" id="book_author" name="book_author">
            <button class="btn btn-primary" type="submit" name="submit">Chercher</button>
        </form>

        <p>
            <?php 

                $books = [
                    ['cover' => 'https://m.media-amazon.com/images/I/41gr3r3FSWL.jpg',
                    'name'=>'nom du livre1',
                    'author'=>'Bob Dilan',
                    'release_year'=> 1995,
                    'purchase_url'=>'http://google.com'],
                    ['cover' => 'https://cdn.vox-cdn.com/thumbor/p-gGrwlaU4rLikEAgYhupMUhIJc=/0x0:1650x2475/1200x0/filters:focal(0x0:1650x2475):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/13757614/817BsplxI9L.jpg',
                    'name'=>'nom du livre2',
                    'author'=>'Bob',
                    'release_year'=> 1802,
                    'purchase_url'=>'http://google.com'],
                    ['cover' => 'https://edit.org/images/cat/book-covers-big-2019101610.jpg',
                    'name'=>'nom du livre3',
                    'author'=>'Sophie Jean',
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
            

                function finding_book_v4($element_to_search, $books) {
                    $verif=NULL;
                    foreach ($books as $book) {

                        $simple_list_books=$book;
                        unset($simple_list_books['purchase_url']);
                        unset($simple_list_books['cover']);
                        
                            foreach ($simple_list_books as $values){
                                
                                if (str_contains(str_replace(" ", "",strtolower($values)),str_replace(" ", "",strtolower($element_to_search)))) {

                                    echo '<img class="rounded mx-auto d-block w-25 h-25 mt-5" src="'.$book['cover'].'" />';
                                    echo '<div class="d-flex justify-content-center">' . 'Titre : ' . $book['name'] . '</div>';
                                    echo '<div class="d-flex justify-content-center">' . 'Auteur : ' . $book['author'] . '</div>';
                                    echo '<div class="d-flex justify-content-center">' . 'Année d\'édition : ' . $book['release_year'] . '</div>';
                                    echo '<a class="d-flex justify-content-center" href="'.$book['purchase_url'].'" target="_BLANK">' . 'Achetez-moi'  . "</a>";
                                    $verif=1;
                                }
                            }
                    }
                    if ($verif!=1) {
                        echo '<div class="d-flex justify-content-center">' . 'Elément inconnu' . '</div>';
                    }
                }

                function show_all_books($element_to_search,$books) {
                    foreach ($books as $book) {
    
                        echo '<img class="rounded mx-auto d-block w-25 h-25 mt-5" src="'.$book['cover'].'" />';
                        echo '<div class="d-flex justify-content-center">' . 'Titre : ' . $book['name'] . '</div>';
                        echo '<div class="d-flex justify-content-center">' . 'Auteur : ' . $book['author'] . '</div>';
                        echo '<div class="d-flex justify-content-center">' . 'Année d\'édition : ' . $book['release_year'] . '</div>';
                        echo '<a class="d-flex justify-content-center" href="'.$book['purchase_url'].'" target="_BLANK">' . 'Achetez-moi'  . "</a>";
                    }
                }

                if(isset($_POST['book_author']) && ($_POST['book_author']!=NULL)){
                    if ((strtolower($_POST['book_author'])=='tout')) {
                        $element_to_search= $_POST['book_author'];
                        show_all_books($element_to_search,$books);
                    }
                    else {
                        $element_to_search= $_POST['book_author'];
                        finding_book_v4($element_to_search, $books);
                    }
                }
                else {
                    echo '<div class="d-flex justify-content-center">' . 'Aucun élément à afficher' . '</div>';
                }
            ?>


           