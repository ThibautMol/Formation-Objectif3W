<?php $title="Liste des cartes";
$current_page="cartes";
include_once ('header.php');?>

   

<?php
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
?>
   

<main class="d-flex flex-column justify-content-center align-items-center mb-5" style="margin-top:100px;">

  <h1 class="display-1 text-center my-5">Liste des Utilisateurs</h1>
  <div class="container-fluid mt-3">
    <div class="row">
        <div class="span12 d-flex justify-content-end">
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form>
        </div>
    </div>
  <a class="btn btn-primary justify-content-start" href="creation-user.php">Ajouter un utilisateur</a>
  </div>

  <h2 class="d-flex justify-content-center">Filtres</h2>

  <form action="" method="GET" class="d-flex justify-content-center">

    <div>
      <select class="form-select" aria-label="Default select example">
        <option selected>Clan</option>
        <option value="humain">Humain</option>
        <option value="REI">REI</option>
      </select>
    </div>

    <div>
      <select class="form-select" aria-label="Default select example">
        <option selected>Type</option>
        <option value="bete">Bête</option>
        <option value="esprit">Esprit</option>
        <option value="humain">Humain</option>
        <option value="monstre">Monstre</option>
      </select>
    </div>

    <div>
      <select class="form-select" aria-label="Default select example">
        <option selected>Catégorie</option>
        <option value="serviteur">Serviteur</option>
        <option value="sort">Sort</option>
        <option value="hero">Héro</option>
      </select>
    </div>

    <div>
      <select class="form-select" aria-label="Default select example">
        <option selected>Fonction</option>
        <option value="attaque">Attaque</option>
        <option value="defense">Défense</option>
        <option value="vie">Vie</option>
        <option value="boost">Boost</option>
      </select>
    </div>
    
    <div>
      <select class="form-select" aria-label="Default select example">
        <option selected>Rareté</option>
        <option value="legendaire">Légendaire</option>
        <option value="epique">Épique</option>
        <option value="rare">Rare</option>
        <option value="commune">Commune</option>
        <option value="basique">Basique</option>
      </select>
    </div>

  </form>


      


  <?php
    $USER_PER_PAGE=5;
    $total_users=count($users);
    $pageCourante=isset($_GET['page']) ? $_GET['page'] : 1;
    $number_of_pages=ceil($total_users/$USER_PER_PAGE);
  ?>
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
  </table>
  <p>Utilisateurs <?= $USER_PER_PAGE*$pageCourante ?> - <?= $total_users ?> </p>

</main>


<nav class="d-flex justify-content-center" aria-label="...">
  <ul class="pagination">
    <li class="mx-1">
      <a class="page-link <?= $pageCourante == 1 ? 'disabled' : '' ?>" href="?page=<?=($pageCourante-1);?>">Previous</a>
      
    </li>
    <?php for ($i=1; $i<=$number_of_pages;$i++): ?>
        <li class="page-item mx-1 <?= $pageCourante == $i ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i?>"><?=$i?></a></li>
    <?php endfor?>
    <li class="mx-1">
        <a class="page-link <?= $pageCourante==$number_of_pages  ? 'disabled' : '' ?>" href="?page=<?=($pageCourante+1);?>">Next</a>
        
    </li>
  </ul>
</nav>

<?php include_once ('footer.php');?>