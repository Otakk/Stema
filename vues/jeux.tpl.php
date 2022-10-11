<?php 
    require_once "navbar.php";
    $instance = new Jeux();
?>

        <div class = 'containerr'>

            <h1>Mes jeux</h1>

            <section>

            <?php

                if (isset($_GET['nom']) && !empty($_GET['nom']))

                {
                    $instance->gamebyCat($_GET['nom']);

                }else{
                    $instance->allGames();
                } ?>
                
                
            </section>  

        </div>
    </div>
</main>


</body>
</html>