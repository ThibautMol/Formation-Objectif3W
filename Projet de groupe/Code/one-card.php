<?php $title="Ajouter/éditer une carte";
include_once ('header.php');?>


    <form action="" method="POST" >
        <div class="d-flex flex-column align-items-center mt-5">
            <h1 >Carte</h1>
            <div class="d-flex flex-row justify-content-center flex-wrap flex-sm-nowrap"> 

                <div class="d-flex flex-column align-items-center mb-3">
                    <label for="id-card">ID</label>
                    <input class="w-50 text-center" type="text" name="id-card" id="id-card" value="#C1447">
                </div>

                
                <div class="d-flex flex-column align-items-center mb-3">
                    <label for="name-card">Nom</label>
                    <input class="w-50 text-center" type="text" name="name-card" id="name-card" value="Aversio"> <!-- vérifier la longueur de la value, if > xx nombre caractères $lenght=w-70 else $lenght=w-50 -->
                </div>
            </div>
        </div>

        <main  class="container d-flex flex-row  justify-content-center flex-wrap flex-xxl-nowrap">
        
            <section style="border-top: 2px dashed black;">
                <h2 class="d-flex justify-content-center mt-2">Caractéristiques</h2>

                <div class="d-flex justify-content-center flex-wrap flex-sm-nowrap">
                    <div class="dropdown m-5">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Type
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Humain</a></li>
                            <li><a class="dropdown-item" href="#">Bête</a></li>
                            <li><a class="dropdown-item" href="#">Esprit</a></li>
                            <li><a class="dropdown-item" href="#">Monstre</a></li>
                        </ul>
                    </div>

                    <div class="dropdown m-5">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Catégorie
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Héro</a></li>
                            <li><a class="dropdown-item" href="#">Serviteur</a></li>
                            <li><a class="dropdown-item" href="#">Sorts</a></li>
                        </ul>
                    </div>

                    <div class="dropdown m-5">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Rareté
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Légendaire</a></li>
                            <li><a class="dropdown-item" href="#">Epique</a></li>
                            <li><a class="dropdown-item" href="#">Rare</a></li>
                            <li><a class="dropdown-item" href="#">Commune</a></li>
                            <li><a class="dropdown-item" href="#">Basique</a></li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-wrap flex-sm-nowrap justify-content-center" style="border-top: 2px dashed black;"> 
                    <div class="d-flex flex-column m-2 align-items-center mb-3">
                        <label for="health-value">Points de vie</label>
                        <input class="w-25 text-center" type="number" name="health-value" id="health-value" value="47">
                    </div>
                
                    
                    <div class="d-flex flex-column m-2 align-items-center mb-3">
                        <label for="mana-value">Mana</label>
                        <input class="w-25 text-center" type="number" name="mana-value" id="mana-value" value="3">
                    </div>

                    <div class="d-flex flex-column m-2 align-items-center mb-3">
                        <label for="defense-value">Défense</label>
                        <input class="w-25 text-center" type="number" name="defense-value" id="defense-value" value="15">
                    </div>
                </div>


                <div class="d-flex flex-row flex-wrap flex-sm-nowrap justify-content-center" style="border-top: 2px dashed black;">
                    <div >
                        <h5 class="d-flex justify-content-center">Capacités</h5>
                        <div class="d-flex flex-row m-2">
                            
                            <div class="d-flex flex-column m-2">
                                <label for="capacity-description">Description</label>
                                <textarea class="form-control" placeholder="Description de la capacité" id="capacity-description"></textarea>
                                
                            </div>
                            <div class="d-flex flex-column m-2">
                                <label for="name-capacity">Nom</label>
                                <input type="text" name="name-capacity" id="name-capacity" value="Salve">
                            </div>

                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h5>Clan</h3>
                        <div class="d-flex flex-column m-2">

                            <div class="d-flex justify-content-between">
                                <label for="clan-human">Humain</label>
                                <input type="checkbox" id="clan-human" name="clan-human" checked>
                            </div>

                            <div class="d-flex justify-content-between">
                                <label for="clan-REI">REI</label>
                                <input type="checkbox" id="clan-REI" name="clan-REI">
                            </div>

                        </div>
                    </div>

                    <div>
                        <h5>Fonction(s)</h3>
                        <div class="d-flex flex-column m-2">

                            <div class="d-flex justify-content-between">
                                <label for="type-attack">Attaque</label>
                                <input type="checkbox" id="type-attack" name="type-attack" checked>
                            </div>

                            <div class="d-flex justify-content-between">
                                <label for="type-defense">Défense</label>
                                <input type="checkbox" id="type-defense" name="type-defense">
                            </div>

                            <div class="d-flex justify-content-between">
                                <label for="type-health">Vie</label>
                                <input type="checkbox" id="type-health" name="type-health" checked>
                            </div>

                            <div class="d-flex justify-content-between">
                                <label for="type-boost">Boost</label>
                                <input type="checkbox" id="type-boost" name="type-boost">
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <section class="d-flex flex-column align-items-center" style="border-top: 2px dashed black; border-left: 2px dashed black;">
                <h2>Image</h2>

                <div class="d-md-none d-lg-block d-sm-none d-md-block d-none d-sm-block">
                    <img  src="assets/img/pngwing.com.png" alt="empty-card">
                </div>

                <div class="d-flex flex-column">
                    <label class="d-flex justify-content-center" for="img-link">Lien illustration</label>
                    <input class="w-70" type="text" name="illustration-link" id="illustration-link" value="url://xxxxxxxxxxx">
                </div>

                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="mt-4">
                        <button type="button" class="btn btn-secondary btn-sm">Parcourir</button>
                    </div>
                    
                    <div class="d-flex flex-column m-2">
                        <label class="d-flex justify-content-center" for="name-card">Changer Illustration</label>
                        <input class="w-70" type="text" name="illustration" id="illustration" value="url://xxxxxxxxxxx">
                    </div>

                    <div class="mt-4">
                        <button type="button" class="btn btn-secondary btn-sm">Ajouter</button>
                    </div>
                </div>
            </section>

        </main>

        <div class="d-flex justify-content-center gap-5 m-4">
            <button type="button" class="btn btn-primary justify-content-start">Modifier</button>

            <button type="button" class="btn btn-primary justify-content-start">Enregistrer</button>
        </div>
    </form>
    
<?php include_once ('footer.php');?>