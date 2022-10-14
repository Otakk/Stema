function deleteGame(id){
    var el = document.getElementById('delete');
    // GET URL PARAMETERS

    const API_KEY = "keyUy6gh4qzzh4OLo";
    const URL = `https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux/${id}?api_key=${API_KEY}`;

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
                content = "<div class='text-center divCentrale alert alert-success' role='alert' > Jeu supprimé <br> Vous allez être automatiquement redirigé </div>"
                // Insertion du HTML
                el.classList.add("mt-5");
                el.insertAdjacentHTML('afterbegin', content);
                setTimeout(function(){window.location.replace("../vues/jeux.tpl.php");},2000)
            } else {
                content = "<div class='text-center divCentrale alert alert-danger' role='alert'> Erreur lors de la suppression <br> Vous allez être automatiquement redirigé </div>"
                // Insertion du HTML
                el.classList.add("mt-5");
                el.insertAdjacentHTML('afterbegin', content);
                setTimeout(function(){window.location.replace("../vues/jeux.tpl.php");},2000)
            }

        })
        .catch((e) => {
            console.log(e)
        })
}