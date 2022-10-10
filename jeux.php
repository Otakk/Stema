<?php

class Jeux {

    public function UniqueCat()
    {
        $session = curl_init();

        curl_setopt($session, CURLOPT_URL, "https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux");
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        $auth = "Authorization: Bearer key3ewKb4T7dLvHjR";
        curl_setopt($session, CURLOPT_HTTPHEADER, ['Content-Type: application/json', $auth]);

        $resultat = curl_exec($session);
        $array = json_decode($resultat);

        foreach ($array->{'records'} as $value) {
            ?>
                <div class='cat_card'>

                    <a class="jeu_img"  href=""></a>
                    <div class ='cat_title' ><p> <?= ($value->{'fields'}->{'Name'}) ?> </p></div>

                </div>
            <?php
        }
    }
}

