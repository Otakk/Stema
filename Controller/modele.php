
<?php 

class Main{
    public function initCurl($link){
        $session = curl_init();
        curl_setopt($session, CURLOPT_URL, $link);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $auth = "Authorization: Bearer keyUy6gh4qzzh4OLo";
        curl_setopt($session, CURLOPT_HTTPHEADER, ['Content-Type: application/json', $auth]);
        return $session;
    }
}


require_once "../Controller/ListeCategories.php";
require_once "../Controller/categorie.php";
require_once "../Controller/contact.php";
require_once "../Controller/jeux.php";
require_once "../Controller/plateforme.php"
?>