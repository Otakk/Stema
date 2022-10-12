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

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Multiselect CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/6200c1620f.js" crossorigin="anonymous"></script>

    <!-- Local style -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/listeCategorie.css">


    <!-- A PLACER DANS FOOTER ? -->
    <!-- Bootstrap 4 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap-select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap-Select Custom JS LINK-->
    <script type="text/javascript">
        $('.selectpicker').on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
            if (e.target.options[clickedIndex].selected) {
                console.log(e.target.options[clickedIndex].value);
            }
        });
    </script>
</head>

<body>
    <main class="container-fluid">
        <div class="row flex-nowrap altmain">
            <div id="navbar" class="col-auto col-md-3 col-xl-2 px-0 pt-2 bg-dark">
                <!-- align-items-sm-start -->
                <div class="sidebar text-white min-vh-100">

                    <a href="index.php" class="divLogo text-white text-decoration-none">
                        <img src="../images/logo50x50.png" class="logo40x40" alt="">
                        <span class="titrePerso25">STEMA</span>
                    </a>

                    <hr class="hrLogo">

                    <!-- align-items-sm-start -->
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-sm-start align-items-center pt-2" id="menu">
                        <li class="nav-item">
                            <a href="jeux.tpl.php" class="nav-link align-middle px-0"><span class="h2Perso ms-1">Mes jeux</span></a>
                        </li>

                        <li class="accordion accordion-flush py-1" id="accordionFlushNavbar">
                            <div class="accordion-item" id="accordionCategorie">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button h2Perso text-white px-0 py-2 collapsed" id="accordionButton" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNav" aria-expanded="false" aria-controls="flush-collapseNav">
                                        <span class="h2Perso ms-1 pe-1">Catégories</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseNav" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushNavbar">
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