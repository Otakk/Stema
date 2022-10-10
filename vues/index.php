<?php
require_once "navbar.php";

$session = curl_init();

curl_setopt($session, CURLOPT_URL, "https://api.airtable.com/v0/appaIyKt419Or5Axf/Categorie");
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

$auth = "Authorization: Bearer keyUy6gh4qzzh4OLo";
curl_setopt($session, CURLOPT_HTTPHEADER, ['Content-Type: application/json', $auth]);

$resultat = curl_exec($session);
curl_close($session);

$array = json_decode($resultat);

var_dump($array);

foreach($array->{'records'} as $value) {
    echo '<p>' . ($value->{'fields'}->{'Name'} . '</p>');
}