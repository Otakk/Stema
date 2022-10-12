
const API_KEY = "keySqIcm7Sp1udIz1";

function addFav(value, array){
    console.log(value);
    const id = value.getAttribute("data-g");
    console.log(array)
    const test = array.findIndex(element => element == 'recN6D1cUxEJIpNbX');
    console.log("test ",test);
    if(test == -1){
        array.push('recN6D1cUxEJIpNbX');
    }else{
        array.splice(test,1);
    }
    console.log(array);
    const URL = `https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux?api_key=${API_KEY}`
    const data = {
        'records' : [{
            'id':id,
            'fields' : {
                'Categorie' : array
            }
        }]
    };
    const header = {
        method: 'PATCH',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    }
    fetch(URL, header)
    .then((response) => {
        console.log(response);
        if(response.ok){
            response.json().then((data) =>{
                console.log(data);
            })
        }else{
            console.log(response)
        }
    })
    .catch((e) => {
        console.log(e)
    })
    value.onclick = function(){addFav(value,array)};
    console.log(value);
}