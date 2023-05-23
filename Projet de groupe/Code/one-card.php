<?php include_once ('header.php');?>

    
        <div class="d-flex flex-column align-items-center">
            <h1>Carte</h1>
            <div class="d-flex flex-row"> 
                <div class="d-flex flex-column m-2">
                    <label for="id-card">ID</label>
                    <input type="text" name="id-card" id="id-card" value="#C1447">
                </div>

                
                <div class="d-flex flex-column m-2">
                    <label for="name-card">Nom</label>
                    <input type="text" name="name-card" id="name-card" value="Aversio">
                </div>
            </div>
        </div>

      

    <main  class="container d-flex flex-row">
      

        <section style="border-top: 2px dashed black;">
            <h2 class="d-flex justify-content-center">Caractéristiques</h2>

            <div class="d-flex">
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
                    Catérgorie
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

            <div class="d-flex flex-row justify-content-center" style="border-top: 2px dashed black;"> 
                <div class="d-flex flex-column justify-content-center m-2">
                    <label for="health-value">Points de vie</label>
                    <textarea name="health-value" id="health-value" cols="5" rows="1">47</textarea>
                </div>
            
                
                <div class="d-flex flex-column justify-content-center m-2">
                    <label for="mana-value">Mana</label>
                    <textarea name="mana-value" id="mana-value" cols="7" rows="1">3</textarea>
                </div>

                <div class="d-flex flex-column justify-content-center m-2">
                    <label for="defense-value">Défense</label>
                    <textarea name="defense-value" id="defense-value" cols="5" rows="1">10</textarea>
                </div>
            </div>


            <div class="d-flex flex-row" style="border-top: 2px dashed black;">
                <div >
                    <h5 class="d-flex justify-content-center">Capacités</h5>
                    <div class="d-flex flex-row m-2">
                        
                        <div>
                            <label for="capacity-description">Description</label>
                            <textarea class="form-control" placeholder="Description de la capacité" id="capacity-description"></textarea>
                            
                        </div>
                        <div class="d-flex flex-column m-2">
                            <label for="name-card">Nom</label>
                            <textarea name="name-card" id="name-card" cols="7" rows="1">Salve</textarea>
                        </div>
                        <div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <h5>Clan</h3>
                    <div class="d-flex flex-column m-2">

                        <div>
                            <label for="clan-human">Humain</label>
                            <input type="checkbox" id="clan-human" name="clan-human" checked>
                        </div>

                        <div>
                            <label for="clan-REI">REI</label>
                            <input type="checkbox" id="clan-REI" name="clan-REI">
                        </div>

                    </div>
                </div>

                <div>
                    <h5>Fonction(s)</h3>
                    <div class="d-flex flex-column m-2">

                        <div>
                            <label for="type-attack">Attaque</label>
                            <input type="checkbox" id="type-attack" name="type-attack" checked>
                        </div>

                        <div>
                            <label for="type-defense">Défense</label>
                            <input type="checkbox" id="type-defense" name="type-defense">
                        </div>

                        <div>
                            <label for="type-health">Vie</label>
                            <input type="checkbox" id="type-health" name="type-health" checked>
                        </div>

                        <div>
                            <label for="type-boost">Boost</label>
                            <input type="checkbox" id="type-boost" name="type-boost">
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="d-flex flex-column align-items-center" style="border-top: 2px dashed black; border-left: 2px dashed black;">
            <h2>Image</h2>
            <img src="assets/img/pngwing.com.png" alt="empty-card">

            <div class="d-flex flex-column m-2 w-25">
                <label class="d-flex justify-content-center" for="img-link">Lien illustration</label>
                <textarea name="img-link" id="img-link" cols="1" rows="1">url://</textarea>
            </div>

            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="mt-4">
                    <button type="button" class="btn btn-secondary">Parcourir</button>
                </div>
                
                <div class="d-flex flex-column m-2 w-35">
                    <label for="name-card">Changer Illustration</label>
                    <textarea name="name-card" id="name-card" cols="7" rows="1">..............</textarea>
                </div>
                <div class="mt-4">
                    <button type="button" class="btn btn-secondary">Ajouter</button>
                </div>
            </div>
        </section>

    </main>

    <div class="d-flex justify-content-center gap-5 mt-4">
        <button type="button" class="btn btn-primary justify-content-start">Modifier</button>

        <button type="button" class="btn btn-primary justify-content-start">Enregistrer</button>
    </div>
    
<?php include_once ('footer.php');?>