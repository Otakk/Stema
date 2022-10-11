<script>
    var id = "recB4aUmQViJQghpR"
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
                console.log("Contact supprimé")
            }

        })
        .catch((e) => {
                console.log(e)
            })



            // const API_KEY = "keyUy6gh4qzzh4OLo";
            // const URL = `https://api.airtable.com/v0/appaIyKt419Or5Axf/Contacts/${id}?api_key=${API_KEY}`;

            // const options = {
            //     method: 'DELETE',
            //     headers: {
            //         'Content-type': 'application/json'
            //     }
            // };

            // try {
            //     var response = UrlFetchApp.fetch(url, options).getContentText();
            // } catch (e) {
            //     Logger.log("DELETE: " + e.message);
            // }
            // return (response);


            // const deleteRecord = id =>
            //     fetch(`https://api.airtable.com/v0/appeu986STff75kfh/People/${id}?api_key=YOUR-API-KEY`, {
            //         method: "DELETE"
            //     })
            //     .then(response => response.json())
            //     .then(deleteConfirmation => console.log("DELETE: ", deleteConfirmation));
</script>