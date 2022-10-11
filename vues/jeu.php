<?php 
    require_once "navbar.php";
    !empty($_GET['j']) ? $instance = new Jeux($_GET['j']) : $instance = new Jeux();
?>
        <div class = 'containerr'>



<section>
    <div class="container bg-dark text-white">
        <div class="row">
            <h1><?= $instance->getNom();?></h1>
        </div>
        <div class="row">
            <div class="col-8"><p><?= $instance->getDescription();?></p></div>
            <div class="col-2 offset-1">
                <div class="row"><?= $instance->getDate();?></div>
                <div class="row">
                    <?php 
                    foreach($instance->getPlateform() as $Plateform){ echo $Plateform. ";";} ?>
                </div>
                <div class="row">
                    <?php 
                    foreach($instance->getCategorie() as $categorie){ echo $categorie. ";";} ?>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
</div>
</main>


</body>
</html>