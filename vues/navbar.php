<?php
require_once "../Controller/modele.php";
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/fonts/fontawesome-free-5.3.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/listeCategorie.css">
<script src="https://kit.fontawesome.com/6200c1620f.js" crossorigin="anonymous"></script>

</head>

<main class="container-fluid">
    <div class="row flex-nowrap altmain">
        <div id="navbar" class="col-auto col-md-3 col-xl-2 px-0 pt-2 bg-dark">
            <!-- align-items-sm-start -->
            <div class="sidebar text-white min-vh-100">

                <a href="index.php" class="divLogo text-white text-decoration-none">
                    <img src="../images/logo50x50.png" class="logo40x40" alt="">
                    <span class="titrePerso">STEMA</span>
                </a>

                <hr class="hrLogo">

                <!-- align-items-sm-start -->
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-sm-start align-items-center pt-2" id="menu">
                    <li class="nav-item">
                        <a href="jeux.tpl.php" class="nav-link align-middle px-0"><span class="h2Perso ms-1">Mes jeux</span></a>
                    </li>

                    <li class="accordion accordion-flush py-1" id="accordionFlushExample">
                        <div class="accordion-item" id="accordionCategorie">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button h2Perso text-white px-0 py-2 collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <span class="h2Perso ms-1">Catégories</span>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <ul class="accordion-body pt-0" id="accordionBody">
                                    <li class="w-100 greyHover">
                                        <a href="listeCategories.tpl.php" class="nav-link subitem px-0">Voir tous</a>
                                    </li>
                                    <?php
                                    $listeCategorie = $objetCategorie->listeCategories();
                                    foreach ($listeCategories->{'records'} as $categorie) {
                                    ?>
                                        <li class="w-100 greyHover">
                                            <a href="jeux.tpl.php?nom=<?= $categorie->{'fields'}->{'Name'}; ?>" class="nav-link subitem px-0"> <span><?= $categorie->{'fields'}->{'Name'}; ?></span></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="contacts.php" class="nav-link px-0 align-middle redHover">
                            <span class="h2Perso ms-1">Contacts</span></a>
                    </li>
                </ul>
            </div>
        </div>