<?php
require_once "../vues/navbar.php";
?>
<div id="content" class="d-flex justify-content-center mt-6"></div>

<script>
    var el = document.getElementById('content');
    var content;
    // GET URL PARAMETERS
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var id = urlParams.get('idContact')

    const API_KEY = "keyUy6gh4qzzh4OLo";
    const URL = `https://api.airtable.com/v0/appaIyKt419Or5Axf/Contacts/${id}?api_key=${API_KEY}`;

    const header = {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json'
        },
    }

    fetch(URL, header)
        .then((reponse) => {
            // Tout s'est bien passé
            if (reponse.ok) {
                content = "<div class='text-center divCentrale'> Contact supprimé <br> Vous allez être automatiquement redirigé </div>"
                // Insertion du HTML
                el.insertAdjacentHTML('afterbegin', content);
                setTimeout(function(){window.location.replace("../vues/contacts.php");},3000)
            } else {
                content = "<div class='text-center divCentrale'> Erreur lors de la suppression <br> Vous allez être automatiquement redirigé </div>"
                // Insertion du HTML
                el.insertAdjacentHTML('afterbegin', content);
                setTimeout(function(){window.location.replace("../vues/contacts.php");},3000)
            }

        })
        .catch((e) => {
            console.log(e)
        })
</script>