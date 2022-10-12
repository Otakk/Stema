<?php
class Contacts extends Main
{
    // Retourne la liste de tous les contacts
    public function listeContacts()
    {
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Contacts");

        $resultat = curl_exec($session);
        curl_close($session);
        $array = json_decode($resultat);
        return $array;
    }
    // Retourne les infos d'un contact selectionne via son ID
    public function listeInfosContacts($idContact)
    {
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Contacts/$idContact");

        $resultat = curl_exec($session);
        curl_close($session);
        $array = json_decode($resultat);
        return $array;
    }
}
