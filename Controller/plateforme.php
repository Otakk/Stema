<?php
class Plateforme extends Main
{
    // Retourne la liste de tous les contacts
    public function listePlateformes()
    {
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Plateforme");

        $resultat = curl_exec($session);
        curl_close($session);
        $array = json_decode($resultat);
        return $array;
    }
}