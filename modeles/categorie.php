<?php

class Categories {
    
    public function initRequete($link){
        $session = curl_init();
        curl_setopt($session, CURLOPT_URL, $link);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $auth = "Authorization: Bearer keyUy6gh4qzzh4OLo";
        curl_setopt($session, CURLOPT_HTTPHEADER, ['Content-Type: application/json', $auth]);
        return $session;
    }

    public function listeCategories(){
        $session = $this->initRequete("https://api.airtable.com/v0/appaIyKt419Or5Axf/Categorie");

        $resultat = curl_exec($session);
        curl_close($session);
        $array = json_decode($resultat);
        return $array;
    }
}

?>