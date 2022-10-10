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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/listeCategorie.css">
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

                <!-- align-items-sm-start -->
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-sm-start align-items-center pt-2" id="menu">
                    <li class="nav-item redHover">
                        <a href="mesJeux.php" class="nav-link align-middle px-0"><span class="h2Perso ms-1">Mes jeux</span></a>
                    </li>

                    <div class="accordion accordion-flush py-4" id="accordionFlushExample">
                        <div class="accordion-item bg-dark">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button bg-dark h2Perso text-white px-0 py-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <a href="listeCategories.php" class="text-decoration-none h2Perso redHover"><span class="h2Perso ms-1">Catégories</span></a>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body pt-0">
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
                                </div>
                            </div>
                        </div>
                    </div>
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