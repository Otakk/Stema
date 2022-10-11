<?php
require_once "navbar.php";
$objetContact = new Contacts();
$listeContacts = $objetContact->listeContacts();
?>
<div class="container">
    <h1 class="titrePerso">Liste des contacts</h1>

    <div class="card bg-dark w-80">

        <?php
        $listeContacts = $objetContact->listeContacts();
        foreach ($listeContacts->{'records'} as $contact) {
        ?>
            <div class="divContact">

                <a href="infoContact?id= <?= $contact->{'id'}; ?>" class="nav-link nomContact text-black px-0"> <span><?= $contact->{'fields'}->{'Name'}; ?></span></a>
                <i class="fa fa-circle-thin circleIcon" aria-hidden="true"><span class="blanc ps-1">En ligne</span></i>

            </div>
        <?php
        }
        ?>

    </div>
