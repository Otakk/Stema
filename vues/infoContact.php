<?php
require_once "navbar.php";
require_once "contacts.php";
$idContact = $_GET["id"];
$objetContact = new Contacts();
$listeInfosContacts = $objetContact->listeInfosContacts($idContact);
$listeJeuxContacts = $listeInfosContacts->{'fields'}->{'NomJeu'};
$listePlateContacts = $listeInfosContacts->{'fields'}->{'NomPlateforme'};
?>

<div class="card w-50 bg-dark ms-4 p-2 br-20">
    <div class="card-header cardHeaderContact ms-2 mt-2 mb-4">
        <h1 class="pseudo m-0"><?= $listeInfosContacts->{'fields'}->{'Name'}; ?></h1>

        <a href="../script/supprimerContact.php?idContact=<?= $idContact; ?>" class="crossIcon" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?')">
            <i class="fa fa-times" aria-hidden="true"></i>
        </a>
    </div>
    <div class="divCardsJeuxPlate">
        <div class="divInfosJeux">
            <card class="cardInfosJeux">
                <h2 class="titreSection">Possède :</h2>
                <ul class="p-0 m-0">
                    <?php
                    foreach ($listeJeuxContacts as $jeu) {
                    ?>
                        <li class="blanc">
                            <?= $jeu; ?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </card>
        </div>
        <div class="divInfosPlate">
            <h2 class="titreSection">Plateformes :</h2>
            <ul class="p-0 m-0">
                <?php
                foreach ($listePlateContacts as $plate) {
                ?>
                    <li class="liPlate blanc">
                        <?php if ($plate == "Xbox" || $plate == "Playstation") {
                        ?>
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                        <?php
                        } else if ($plate == "Windows" || $plate == "Linux") {
                        ?>
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        <?php
                        } else {
                        ?>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        <?php
                        }
                        ?>
                        <?= $plate; ?>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

</div>
</div>
</div>