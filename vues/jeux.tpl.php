<?php 
    require_once "navbar.php";
    $instance = new Jeux();
    $instance_cat = new Categories();
    $listeCategories = $instance_cat->listeCategories();
    $instance_plat = new Plateforme();
    $listePlateformes = $instance_plat->listePlateformes();
    ?>

    <div id="background_blur"></div>

        <div class = 'containerr'>

            <div class="section_container">
                
                <h1 class="titrePerso35">Mes jeux</h1>

                <section>

                    <?php
                    if (isset($_GET['nom']) && !empty($_GET['nom']))

                    {
                        $instance->gamebyCat(urlencode($_GET['nom']));

                    }else{
                        $instance->allGames();
                    } 
                    ?>
                    
                </section>
            </div>
            <!-- href="../script/add_btn.html" -->
            <button id='add_btn'>
                <p>Ajouter un jeu externe</p>
            </button>


            <!-- modal d'ajout d'un jeu -->
            <div id="add_modal">

                <div id="modal_img"></div>

                <div id="input_container">
                    <div id="closeModal"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div id="inner">

                        <h3>Ajouter un jeu hors de Stema</h3>

                        <div id="inner_inner">
                            
                            <form id="add_game_form">
                                <div id="title">
                                    <div class="logo_container">
                                        <div class ='icon_title'></div>
                                    </div>
                                    
                                    <div class="label_input">
                                        <label for="i_title">Nom du jeu</label>
                                        <input id="i_title" type="text">
                                    </div>
                                </div>

                                <div id="descripton">

                                    <div class="logo_container">
                                        <div class ='icon_desc'></div>
                                    </div>

                                    <div class="label_input">
                                        <label for="i_desc">Description</label>
                                        <textarea name="i_desc" id="i_desc" cols="20" rows="1"></textarea>
                                    </div>
                                </div>

                                <div id="Categorie">

                                    <div class="logo_container">
                                        <div class ='icon_cat'></div>
                                    </div>

                                    <div class="label_input">
                                        <label for="i_cat">Categorie</label>
                                        <select class="selectpicker form-control i_cat" id="i_cat" title="Aucun jeu sélectionné" multiple data-mdb-clear-button="true" data-live-search="true" multiple>
                                            <?php
                                            foreach ($listeCategories->{'records'} as $value) {
                                            ?>
                                                <option value="<?= $value->{'id'} ?>"><?= $value->{'fields'}->{'Name'}?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div id="Plateforme">

                                    <div class="logo_container">
                                        <div class ='icon_plat'></div>
                                    </div>
                                    <div class="label_input">
                                        <label for="i_plat">Plateforme</label>
                                        <select class="selectpicker form-control i_plat" id="i_plat" title="Aucun jeu sélectionné" multiple data-mdb-clear-button="true" data-live-search="true">
                                            <?php 
                                            foreach ($listePlateformes->{'records'} as $value) {
                                            ?>
                                                <option value="<?= $value->{'id'} ?>"><?= $value->{'fields'}->{'Name'}?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div id="pegi">
                                    <div class="logo_container">
                                        <div class ='icon_pegi'></div>
                                    </div>
                                    
                                    <div class="label_input">
                                        <label for="i_pegi">PEGI</label>
                                        <select name="i_pegi" id="i_pegi">
                                            <option value=3>3</option>
                                            <option value=7>7</option>
                                            <option value=12>12</option>
                                            <option value=16>16</option>
                                            <option value=18>18</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div id="img">

                                    <div class="label_input">
                                        <label for="i_img">Ajouter une image</label>
                                        <input id="i_img" type="file">
                                    </div>
                                
                                </div> -->
                                
                                <!-- <div id="date">

                                    <div class="label_input">
                                        <label for="i_date">Date d'obtention</label>
                                        <input id="i_date" type="date" disabled>
                                    </div>

                                </div> -->

                            </form>
                        </div>
                    </div>
                    <button id="add_btn_submit" type="submit" onclick=addGame(); >Ajouter</button>
                </div>
            </div>

            <!-- <iframe class="airtable-embed" src="https://airtable.com/embed/shrVqqscoLumbCjFB?backgroundColor=red" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe> -->
        </div>
    </div>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../script/js.js"></script>
    <script src="../script/add_game.js"></script>
    
</main>


</body>
</html>