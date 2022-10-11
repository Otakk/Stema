<?php

class ListeCategorie extends Main{
    
    public function __construct()
    {
        
        
    }

    public function ListeCategorie(){
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Categorie");

        $resultat = curl_exec($session);
        curl_close($session);
        $array = json_decode($resultat);
        return $array;
    }
}

?>