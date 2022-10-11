<?php
require_once "navbar.php";
require_once "contacts.php";
$idContact = $_GET["id"];
$objetContact = new Contacts();
$listeJeuxContacts = $objetContact->listeJeuxContact($idContact);
$listePlateContact = $objetContact->listePlateContact($idContact);
?>

<div class="card">
    <h2 class="h2Perso">Jeux :</h2>
</div>
</div>