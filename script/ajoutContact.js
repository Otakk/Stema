var el = document.getElementById('content');
var content;
let form = document.getElementById("formAjoutContact")
form.addEventListener('submit', (e) => {
    e.preventDefault();

    const nom = document.querySelector('#nomContact').value

    const jeuxSelected = document.querySelectorAll('#jeuxContact option:checked');
    const jeux = Array.from(jeuxSelected).map(el => el.value);

    const plateSelected = document.querySelectorAll('#plateContact option:checked');
    const plate = Array.from(plateSelected).map(el => el.value);

    const data = {
        'records': [{
            'fields': {
                "Name": nom,
                "Jeux": jeux,
                "Plateforme": plate
            }
        }]
    }

    const API_KEY = "keyUy6gh4qzzh4OLo";
    const URL = `https://api.airtable.com/v0/appaIyKt419Or5Axf/Contacts?api_key=${API_KEY}`;

    const header = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }

    fetch(URL, header)
        .then((reponse) => {
            // Tout s'est bien passé
            if (reponse.ok) {
                // On recup les données
                reponse.json().then((data) => {
                    content = "<div class='text-center divCentrale'>Contact ajouté <br> La page va se rafraîchir automatiquement </div>"
                    // Insertion du HTML
                    el.classList.add("alert");
                    el.classList.add("alert-success");
                    el.classList.add("mt-5");
                    el.insertAdjacentHTML('afterbegin', content);
                    setTimeout(function () {
                        window.location.replace("../vues/contacts.php");
                    }, 2000)
                    console.log(data);

                })
            } else {
                reponse.json().then((data) => {
                    content = "<div class='text-center divCentrale'>Erreur lors de l'ajout <br> La page va se rafraîchir automatiquement </div>"
                    // Insertion du HTML
                    el.classList.add("alert");
                    el.classList.add("alert-danger");
                    el.classList.add("mt-5");
                    el.insertAdjacentHTML('afterbegin', content);
                    setTimeout(function () {
                        window.location.replace("../vues/contacts.php");
                    }, 2000)
                    console.log(data);
                })
            }
        })
        .catch((e) => {
            console.log(e)
        })
})
