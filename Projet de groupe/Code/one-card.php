<?php $title="Ajouter/éditer une carte";
include_once ('header.php');?>


    <form action="" method="POST" enctype="multipart/form-data" >
        <div class="d-flex flex-column align-items-center" style="margin-top:100px;">
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
                

                <div class="d-flex flex-column justify-content-center align-items-center flex-wrap flex-sm-nowrap">
                    
                    <h2 class="d-flex justify-content-center mt-2">Caractéristiques</h2>
                    <div class="d-flex justify-content-center flex-wrap flex-sm-nowrap mb-4 gap-3">
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Type...</option>
                                    <option value="human">Humain</option>
                                    <option value="beast">Bête</option>
                                    <option value="spirit">Esprit</option>
                                    <option value="monster">Monstre</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Catégorie...</option>
                                    <option value="hero">Héro</option>
                                    <option value="servant">Serviteur</option>
                                    <option value="spell">Sort</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Rareté...</option>
                                <option value="legendary">Légendaire</option>
                                <option value="epic">Epique</option>
                                <option value="rare">Rare</option>
                                <option value="common">Commune</option>
                                <option value="basic">Basique</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div style="border-top: 2px dashed black;">
                    <h2 class="d-flex justify-content-center mt-2">Statistiques</h2>
                    <div class="d-flex flex-wrap flex-sm-nowrap justify-content-center" >
                    
                        <div class="d-flex flex-column m-2 align-items-center mb-3">
                            <label for="health-value">Points de vie</label>
                            <input class="w-50 text-center" type="number" name="health-value" id="health-value" value="47">
                        </div>
                    
                        
                        <div class="d-flex flex-column m-2 align-items-center mb-3">
                            <label for="mana-value">Mana</label>
                            <input class="w-50 text-center" type="number" name="mana-value" id="mana-value" value="3">
                        </div>

                        <div class="d-flex flex-column m-2 align-items-center mb-3">
                            <label for="defense-value">Défense</label>
                            <input class="w-50 text-center" type="number" name="defense-value" id="defense-value" value="15">
                        </div>
                    </div>
                </div>


                <div class="d-flex flex-row flex-wrap flex-sm-nowrap justify-content-center" style="border-top: 2px dashed black;">
                    <div class="m-2">
                        <h5 class="d-flex justify-content-center">Capacités</h5>
                        <div class="d-flex flex-column m-2">
                            
                            <div class="d-flex flex-column m-2">
                                <label for="capacity-description">Description</label>
                                <textarea class="form-control" placeholder="Description de la capacité" id="capacity-description"></textarea>
                                
                            </div>

                            <div class="d-flex flex-column m-2">
                                <label for="name-capacity">Nom de la capacité</label>
                                <input type="text" name="name-capacity" id="name-capacity" value="Salve">
                            </div>

                        </div>
                    </div>

                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <div class="m-2">
                            <h5 class="d-flex justify-content-center">Clan</h3>
                            <div class="d-flex flex-column m-2">

                                <div class="d-flex justify-content-between mt-2">
                                    <label class="me-3" for="clan-human">Humain</label>
                                    <input type="checkbox" id="clan-human" name="clan-human" checked>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <label for="clan-REI">REI</label>
                                    <input type="checkbox" id="clan-REI" name="clan-REI">
                                </div>

                            </div>
                        </div>

                        <div class="m-2">
                            <h5 class="d-flex justify-content-center">Fonction(s)</h3>
                            <div class="d-flex flex-column m-2">

                                <div class="d-flex justify-content-between mt-2">
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
                        <button type="button" class="btn btn-secondary btn-sm"><label for="new-illustration" style="cursor: pointer;">Parcourir</label></button>
                    </div>
        
                    <div class="form-group d-flex flex-column m-2">
                        <label class="d-flex justify-content-center" for="new-illustration">Changer Illustration</label>
                        <input type="file" accept="image/png, image/jpeg" class="form-control-file d-none" name="new-illustration" id="new-illustration">
                    </div>
                    

                    <div class="mt-4">
                        <button type="button" class="btn btn-secondary btn-sm">Ajouter</button>
                    </div>

                </div>
            </section>
        </main>
        

        <div class="d-flex justify-content-center gap-5 m-4">
            <button type="button" class="btn btn-primary justify-content-start" id="edit">Modifier</button>

            <div class="d-flex align-items-center justify-content-center"> 
                <label for="reset-capacity"><i class="fa-solid fa-rotate-right" style="cursor:pointer;"></i></label>
                <input class="d-none" type="reset" id="reset-capacity">
            </div>

            <button type="button" class="btn btn-primary justify-content-start" id="save">Enregistrer</button>
        </div>
    </form>
    
    
<?php include_once ('footer.php');?>