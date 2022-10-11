<?php
require_once "navbar.php";
$objetContact = new Contacts();
$listeContacts = $objetContact->listeContacts();
?>
<div class="container w-80 px-5">
    <h1 class="titrePerso2">Liste des contacts</h1>
    <div class="divCardsContact">
        <div class="card bg-dark w-50 p-2 br-20">

            <?php
            $listeContacts = $objetContact->listeContacts();
            foreach ($listeContacts->{'records'} as $contact) {
            ?>
                <div class="divContact">
                    <a href="infoContact?id=<?= $contact->{'id'}; ?>" class="nav-link nomContact text-black px-0 <?php if (isset($_GET['id']) && $_GET['id'] == $contact->{'id'}) { echo "rouge"; } ?>">
                        <span><?= $contact->{'fields'}->{'Name'}; ?></span>
                    </a>
                    <i class="fa fa-circle-thin circleIcon" aria-hidden="true"><span class="blanc ps-1">En ligne</span></i>
                </div>
            <?php
            }
            ?>
        </div>