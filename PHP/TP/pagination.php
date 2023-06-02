<?php 
  $title = 'Utilisateurs';
  $currentPage = 'users';
 
  

  require 'inc/head.php'; 
  require 'inc/navbar.php';

  $users = [
    [
      'id' => 1,
      'name' => 'Sony',
      'job' => 'Chômeur',
      'hobby' => 'DROP DATABASE'
    ],
    [
      'id'=> 2,
      'name' => 'Olivier',
      'job' => 'Homme de joie',
      'hobby' => 'Croziflette'
    ],
    [
      'id'=> 3,
      'name' => 'Adrien',
      'job' => 'En prison',
      'hobby' => 'savonette peau sensible'
    ],
    [
      'id' => 4,
      'name' => 'Arturo',
      'job' => 'Designer(bientot Dev)',
      'hobby' => 'Bootstrap'
    ],
    [
      'id'=> 5,
      'name' => 'Guillaume',
      'job' => 'Ninja',
      'hobby' => 'PHP'
    ],
    [
      'id'=> 6,
      'name' => 'Thibaut',
      'job' => 'Pythoniste',
      'hobby' => 'Mets Adrien en prison'
    ],
    [
      'id'=> 7,
      'name' => 'Fabrice',
      'job' => 'éparpilleur',
      'hobby' => 'Se perdre'
    ],
    [
      'id' => 8,
      'name' => 'Boubacar',
      'job' => 'Documentaliste',
      'hobby' => 'La DOC'
    ],
    [
      'id'=> 9,
      'name' => 'Virginie',
      'job' => 'Epicier',
      'hobby' => 'Cherche son ordi'
    ],
    [
      'id'=> 10,
      'name' => 'Anne',
      'job' => 'Dealer de bonbon',
      'hobby' => 'Les arlequins et les bétises'
    ],
    [
      'id'=> 11,
      'name' => 'Benjamin',
      'job' => 'Casper',
      'hobby' => 'Absent, j\'ai mécanique'
    ],
    [
      'id'=> 12,
      'name' => 'Mickael',
      'job' => 'Le chineur',
      'hobby' => 'Les bons tuyaux'
    ],
    [
      'id'=> 13,
      'name' => 'Ryan',
      'job' => 'Le jeunot',
      'hobby' => 'Découvre la vie'
    ],
    [
      'id' => 14,
      'name' => 'Désirée',
      'job' => 'Reine des ternaires',
      'hobby' => 'Les ternaires c\'est la vie'
    ],
    [
      'id'=> 15,
      'name' => 'Dhéya',
      'job' => 'Nimois',
      'hobby' => 'J\'adore les pauses'
    ],
   
  ];


  # 1 - Afficher tous les utilisateurs
  # 2 - La pagination
      /*
        - Nombre d'utilisateurs par page 

        - Nombre d'utilisateurs totales 

        - Nombres totales de page (Nombre d'utilisateurs totales et Nombre d'utilisateurs par page)
         (fonction PHP pour arrondir)

        - Page actuelle / courante (via le get)

        - Index de départ dans le tableau 
        
        - Utilisateurs à afficher sur la page courante (fonction PHP pour découper le tableau)
      
      */

    
$count=NULL;
$USER_PER_PAGE=5;

$total_users=count($users);
$pageCourante=isset($_GET['page']) ? $_GET['page'] : 1;
$number_of_pages=ceil($total_users/$USER_PER_PAGE);

// $pageCourante=(isset($_GET['page']));

// if(isset($_GET['page'])){
//     $pageCourante=$_GET['Page'];
// }
// else {
//     $pageCourante=1;
// }

?>

<h1 class="display-1 text-center my-5">Liste des Utilisateurs</h1>

<div class="d-flex container flex-column align-items-center">
    <?php foreach ($users as $user) :?>
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?=$user['id'] . " " . $user['name']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$user['job']?></h6>
                <p class="card-text"><?=$user['hobby']?></p>
            </div>
        </div>
    <?php endforeach ;?>
    
    <?='Nombre total d\'utilisateurs : ' . $total_users;?>
    <br>
    <?='Nombre total de pages : ' . $number_of_pages;?>
</div>

<?php var_dump($USER_PER_PAGE);?>
<?php var_dump($pageCourante);?>

<?php $start_index=($pageCourante-1)*$USER_PER_PAGE;?>
<?php $users_on_page=array_slice($users,$start_index,$USER_PER_PAGE);?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Job</th>
      <th scope="col">Hobby</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($users_on_page as $user) :?>
            <tr>
                <th scope="row"><?=$user['id']?></th>
                <td><?=$user['name']?></td>
                <td><?=$user['job']?></td>
                <td><?=$user['hobby']?></td>  
            </tr>
        <?php endforeach ;?>
    </tbody>
    <p>Utilisateurs <?= $USER_PER_PAGE*$currentPage ?> - <?= $total_users ?> </p> #corriger le conflit de int sur currentpage
</table>



<nav class="d-flex justify-content-center" aria-label="...">
  <ul class="pagination">
    <li>
      <a class="page-link <?= $pageCourante == 1 ? 'disabled' : '' ?>" href="?page=<?=($pageCourante-1);?>">Previous</a>
      
    </li>
    <?php for ($i=1; $i<=$number_of_pages;$i++): ?>
        <li class="page-item <?= $pageCourante == $i ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i?>"><?=$i?></a></li>
    <?php endfor?>
    <li>
        <a class="page-link <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" href="?page=<?=($pageCourante+1);?>">Next</a>
        
    </li>
  </ul>
</nav>



<?php require 'inc/foot.php';?>



