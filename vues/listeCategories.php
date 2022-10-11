<?php
require_once "navbar.php";
$ListeCategorie = new ListeCategorie();
$array = $ListeCategorie->ListeCategorie();
?>
        <div class = 'container-fluid'>

<h1>Categories</h1>

<section class="">
<div class="text-center">
  <div class="row">
    <?php
    foreach($array->{'records'} as $value) {
    ?>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-4 h-25 categorie-card">
        <div class="card">
            <a href="jeux.tpl.php?nom=<?= $value->{"fields"}->{"Name"};?>"><img src="<?=$value->{"fields"}->{"Logo"};?>" class="card-img-top img-fluid img-thumbnail categorie-card-img"alt="..."></a>
            <a href="jeux.tpl.php?nom=<?= $value->{"fields"}->{"Name"};?>"><div class="card-body">
                <h3><?= $value->{"fields"}->{"Name"};?></h3>
            </div></a>
        </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
</section>

</div>
</div>
</main>


</body>
</html>