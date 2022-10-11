<?php
require_once "navbar.php";
$ListeCategorie = new ListeCategorie();
$array = $ListeCategorie->ListeCategorie();
?>

<div class = 'containerr'>

<h1>Mes jeux</h1>

<section>
        <?php
        foreach($array->{'records'} as $value) {
        
                    $res = ($value->{'fields'}->{'Logo'});
            ?>
                <div class='cat_card'>
                    <a class="jeu_img" href="jeux.tpl.php?nom=<?= $value->{"fields"}->{"Name"};?>"
                    style="background: url('<?= $res; ?>');
                            height: 100%; background-size: cover;
                            background-position: center center;"></a>
                    <div class ='cat_title' ><p> <?= ($value->{'fields'}->{'Name'}) ?> </p></div>
                </div>
        <?php
        }
        ?>
   
</section>

</div>
</div>
</main>


</body>
</html>