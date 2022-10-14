function addGame() {

    let nom = document.getElementById('i_title').value
    let desc = document.getElementById('i_desc').value
    const catSelected = document.querySelectorAll('#i_cat option:checked');
    const cat = Array.from(catSelected).map(el => el.value);
    console.log(catSelected);
    console.log(cat);
    const platSelected = document.querySelectorAll('#i_plat option:checked');
    const plat = Array.from(platSelected).map(el => el.value);
    let pegi = document.getElementById('i_pegi').value
    // let img = document.getElementById('i_img').value

    if (nom != "" && desc != "" && cat != "" && plat != "" && pegi != "") {

        const API_KEY = "key3ewKb4T7dLvHjR"
        const URL = `https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux?api_key=${API_KEY}`

        const data = {
            'records': [
                {
                    'fields': {
                        'Name': nom,
                        'Description': desc,
                        'Categorie': cat,
                        'Plateforme': plat,
                        'PEGI': parseInt(pegi, 10),
                        'img' : '../images/defaut.png',
                    }
                }
            ]
        }

        const header = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        }

        fetch(URL, header)
        .then((response) => {
            
            if(response.ok){
                // On a une réponse
                // ON récupère les données
                response.json().then((data) => {
                    console.log(data);
                })
                SweetSuccess()

                let body = document.body
                let openModal = document.querySelector('#add_modal')
                let background_blur = document.querySelector('#background_blur')
                openModal.classList.remove('active');
                background_blur.classList.remove('active');
                body.style = 'overflow : initial'

                setTimeout(function(){window.location.replace("../vues/jeux.tpl.php");},2000)
            }
            else{
                console.log(response);
                SweetError()
            }
        })
        .catch((e) => {
            console.log(e);
        })

    } else {
        SweetError()
    }
}