<?php 
    require_once "navbar.php";
    !empty($_GET['j']) ? $instance = new Jeux($_GET['j']) : $instance = new Jeux();
?>



        <div class = 'containerr'>

            <section>

                    <div class="game_card">

                    <div class = "game_card_left">
                        <div class="title">
                            <h1><?= $instance->getNom();?></h1>
                        </div>

                        <div class="game_img" alt="" style= 
                            "background: url('<?= $instance->getImg(); ?>');
                            background-size: cover;
                            background-position: center center;"></div>
                    </div>

                        <div class="game_card_right">

                        <div class="date_obt">
                            <p>Obetenu le : <?= $instance->getDate();?></p>
                        </div>
                            <div class="game_desc"><p><?= $instance->getDescription();?></p></div>
                                <div class="smalzzzl">

                                    <div class="roww">
                                        <br>
                                        <p>Jouable sur 
                                            <?php foreach($instance->getPlateform() as $Plateform){ echo $Plateform. " , ";} ?>
                                        </p>
                                    </div>

                                    <div class="roww">
                                        <br>
                                        <p>Catégorie :
                                            <?php foreach($instance->getCategorie() as $categorie){ echo $categorie. " , ";} ?>
                                        </p>
                                    </div>

                                    <div class="roww">
                                        <br>
                                        <p>Langue disponible :
                                            <?php foreach($instance->getcodeLangue() as $code){ echo $code. " , ";} ?>
                                        </p>
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