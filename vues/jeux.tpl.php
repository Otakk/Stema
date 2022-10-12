<?php 
    require_once "navbar.php";
    $instance = new Jeux();
    $instance_cat = new Categories()
?>
        <div id="background_blur"></div>

        <div class = 'containerr'>

            <div class="section_container">
                
                <h1>Mes jeux</h1>

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
                                        <label for="i_cat">categorie</label>
                                        <select name="i_cat" id="i_cat">
                                            <?php
                                            foreach ($variable as $value) {
                                            ?>
                                                <option value=""></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button id="add_btn_submit" type="submit" onclick=addGame()>Ajouter</button>
                </div>
            </div>

            <!-- <iframe class="airtable-embed" src="https://airtable.com/embed/shrVqqscoLumbCjFB?backgroundColor=red" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe> -->
            </div>
    </div>

    <script src="../script/js.js"></script>
    <script src="../script/add_game.js"></script>
    
</main>


</body>
</html>