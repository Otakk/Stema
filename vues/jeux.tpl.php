<?php 
    require_once "navbar.php";
    require_once "../jeux.php";
    $instance = new Jeux();
?>

        <div class = 'container'>

            <h1>Categorie -> Jeux</h1>

            <section>

                <?php $instance->UniqueCat(); ?>

            </section>

        </div>
    </div>
</main>


</body>
</html>