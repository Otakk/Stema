<?php

class Categories extends Main {

    public function listeCategories(){
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Categorie?sort%5B0%5D%5Bfield%5D=Number&sort%5B0%5D%5Bdirection%5D=desc");

        $resultat = curl_exec($session);
        curl_close($session);
        $array = json_decode($resultat);
        return $array;
    }
}

?>