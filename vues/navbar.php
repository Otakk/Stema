<?php
require_once "../modeles/modele.php";
$objetCategorie = new Categories();
$listeCategories = $objetCategorie->listeCategories();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stema</title>
    <link rel="shortcut icon" href="../images/logo50x50.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-3 px-0 pt-2 bg-dark">
            <!-- align-items-sm-start -->
            <div class="sidebar text-white min-vh-100">

                <a href="index.php" class="divLogo text-white text-decoration-none">
                    <img src="../images/logo50x50.png" class="logo40x40" alt="">
                    <span class="titrePerso">STEMA</span>
                </a>

                <hr class="hrLogo">

                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item redHover">
                        <a href="mesJeux.php" class="nav-link align-middle px-0"><span class="h2Perso ms-1">Mes jeux</span></a>
                    </li>

                    <li>
                        <a href="listeCategories.php" class="text-decoration-none h2Perso redHover"><span class="h2Perso ms-1">Catégories</span></a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <?php
                            $listeCategorie = $objetCategorie->listeCategories();
                            foreach ($listeCategories->{'records'} as $categorie) {
                            ?>
                                <li class="w-100">
                                    <a href="#" class="nav-link subitem px-0"> <span><?= $categorie->{'fields'}->{'Name'}; ?></span></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle redHover">
                            <span class="h2Perso ms-1">Contacts</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">

        </div>
    </div>
</div>