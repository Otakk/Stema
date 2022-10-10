<?php
require_once "navbar.php";
require_once "../Modeles/Modele.php";
require_once "../Modeles/ListeCategories.php";
$ListeCategorie = new ListeCategorie();
$array = $ListeCategorie->ListeCategorie();
?>

<section class="container-fluid bg-dark">
<div class="container text-center">
  <div class="row">
    <?php
    foreach($array->{'records'} as $value) {
    ?>
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <a href="categorie.php?nom='<?= $value->{"fields"}->{"Name"};?>'"><img src="<?=$value->{"fields"}->{"Logo"};?>" class="card-img-top img-thumbnail" alt="..."></a>
            <div class="card-body">
                <h3><?= $value->{"fields"}->{"Name"};?></h3>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
</section>