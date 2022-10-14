<?php 
    require_once "navbar.php";
    if(isset($_GET['j']) && !empty($_GET['j']))
    {
        $instance = new Jeux($_GET['j']);
?>
        <div class = 'containerr'>
            <div id='delete'>
            </div>
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
                            <p>Obtenu le : <?= $instance->getDate();?></p>
                        </div>
                            <div class="game_desc"><p><?= $instance->getDescription();?></p></div>
                                <div class="smal">

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
                                    <div class="roww">
                                        <br>
                                        <p>PEGI <?= $instance->getPegi();?></p>
                                    </div>
                                    <div class="roww">
                                        <br>
                                        <div class="">
                                            <h4>Contacts possédant ce jeu :</h4>
                                            <p>
                                            <?php foreach($instance->getContacts() as $contact){
                                                echo $contact." ";
                                            };?></p>
                                        </div>
                                    </div>
                                    <div class="roww">
                                        <br>
                                        <button class='btn btn-danger'onclick="if(confirm('Voulez vous suppprimer <?=$instance->getNom();?> ?')){ deleteGame('<?=$_GET['j'];?>'); }else{ window.alert('Suppression annulée')}">Supprimer</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </main>
    <script src="../script/delete_game.js"></script>
    </body>
</html>
<?php
    }else{
        ?>
        <div class='alert alert-danger text-center'><a href="../vues/index.php"><h4>Erreur de chemin d'accées vous allez etre redirigez d'ici quelques instants ou cliquez ici pour être redigeré</h4></a></div>
        <script>window.location.replace("../vues/index.php");</script>
        <?php
    }
