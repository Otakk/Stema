function addGame() {
    
    let nom = document.getElementById('i_title').value
    let desc = document.getElementById('i_desc').value
    let cat = document.getElementById('i_cat').value

    if (nom != "" && desc != "" && cat != "") {
        
        const API_KEY = "key3ewKb4T7dLvHjR"
        const URL = `https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux?api_key=${API_KEY}`

        const data = {
            'records': [
                {
                    'fields' : {
                        'Name' : nom,
                        'Description' : desc,
                    }
                }
            ]
        }

        const header = {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
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
            }
            else{
                console.log(response);
            }
        })
        .catch((e) => {
            console.log(e);
        })
    }
}
