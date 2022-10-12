<?php
require_once "navbar.php";
$objetContact = new Contacts();
$listeContacts = $objetContact->listeContacts();
$objetJeux = new Jeux();
$listeInfosJeux = $objetJeux->listeJeux();
$objetPlateforme = new Plateforme();
$listeInfosPlate = $objetPlateforme->listePlateformes();
?>
<div class="container w-80 px-5">
    <h1 class="titrePerso35 my-4">Ajouter un contact :</h1>

    <div class="accordion accordion-flush" id="accordionFlushContact">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed latoSpacing blanc justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseContact" aria-expanded="false" aria-controls="flush-collapseContact">
                    Formulaire d'ajout de contact
                </button>
            </h2>
            <div id="flush-collapseContact" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushContact">
                <div class="accordion-body">
                    <form method="post" id="formAjoutContact">
                        <div class="form-group my-2">
                            <label for="nomContact">Nom du contact : </label>
                            <input type="text" class="form-control" name="nomContact" id="nomContact" placeholder="Entrez le pseudo" value="" required="">
                        </div>

                        <div class="form-group my-2">
                            <label for="jeuxContact">Jeu(x) du contact : </label>
                            <select class="selectpicker form-control" id="jeuxContact" title="Aucun jeu sélectionné" multiple data-mdb-clear-button="true" data-live-search="true" multiple>
                                <?php
                                foreach ($listeInfosJeux->{'records'} as $jeu) {
                                    $idJeu = $jeu->{'id'};
                                ?>
                                    <option value="<?= $idJeu; ?>"><?= $jeu->{'fields'}->{'Name'} ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group my-2">
                            <label for="plateContact">Plateforme(s) du contact : </label>
                            <select class="selectpicker form-control" id="plateContact" title="Aucune plateforme sélectionné" multiple data-mdb-clear-button="true" multiple>
                                <?php
                                foreach ($listeInfosPlate->{'records'} as $plate) {
                                    $idPlate = $plate->{'id'};
                                ?>
                                    <option value="<?= $idPlate; ?>"><?= $plate->{'fields'}->{'Name'} ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group text-center mb-1">
                            <button class="btn btn-outline-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h1 class="titrePerso35 mt-5 mb-4">Liste des contacts :</h1>

    <div class="divCardsContact">
        <div class="card bg-dark w-50 p-2 br-20">
            <?php
            $listeContacts = $objetContact->listeContacts();
            foreach ($listeContacts->{'records'} as $contact) {
            ?>
                <div class="divContact">
                    <a href="infoContact?id=<?= $contact->{'id'}; ?>" class="nav-link nomContact text-black px-0 
                    <?php
                    if (isset($_GET['id']) && $_GET['id'] == $contact->{'id'}) {
                        echo "rouge";
                    } ?> ">
                        <span><?= $contact->{'fields'}->{'Name'}; ?></span>
                    </a>
                    <i class="fa fa-circle-thin circleIcon" aria-hidden="true"><span class="blanc ps-1">En ligne</span></i>
                </div>
            <?php
            }
            ?>
        </div>

        <script src="../script/ajoutContact.js">

        </script>