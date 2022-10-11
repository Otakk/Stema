<?php 
    require_once "navbar.php";
    require_once "../jeux.php";
    $instance = new Jeux();
?>

        <div class = 'containerr'>

            <h1>Mes jeux</h1>

            <section>

                <?php $instance->uniqueJeu(); ?>
                <?php $instance->jeuImg(); ?>
            </section>

        </div>
    </div>
</main>


</body>
</html>