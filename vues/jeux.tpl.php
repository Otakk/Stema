<?php 
    require_once "navbar.php";
    $instance = new Jeux();
?>

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

            <div class="add_game_container">
                <a class='add_game' href="">
                    <p>Ajouter un jeu externe</p>
                </a>
            </div>
        </div>
    </div>
</main>


</body>
</html>