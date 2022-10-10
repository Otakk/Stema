<?php 
    require_once "navbar.php";
    require_once "../jeux.php";
    $instance = new Jeux();
?>

    <main>

        <h1>Categorie -> Jeux</h1>

        <section>

            <?php $instance->UniqueCat(); ?>

        </section>

    </main>


</body>
</html>