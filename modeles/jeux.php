<?php

class Jeux {

    public function initCurl($link){
        $session = curl_init();
        curl_setopt($session, CURLOPT_URL, $link);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $auth = "Authorization: Bearer keyUy6gh4qzzh4OLo";
        curl_setopt($session, CURLOPT_HTTPHEADER, ['Content-Type: application/json', $auth]);
        return $session;
    }

    public function gamebyCat($nom)
    {
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux?view=".$nom);

        $resultat = curl_exec($session);
        $array = json_decode($resultat);
        foreach ($array->{'records'} as $value) {
            $res = ($value->{'fields'}->{'img'});
            ?>
                <div class='cat_card'>
                    <a class="jeu_img" href=""
                    style="background: url('<?= $res; ?>');
                            height: 100%; background-size: cover;
                            background-position: center center;"></a>
                    <div class ='cat_title' ><p> <?= ($value->{'fields'}->{'Name'}) ?> </p></div>
                </div>
            <?php
        }
    }
    public function allGames()
    {
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux");

        $resultat = curl_exec($session);
        $array = json_decode($resultat);

        foreach ($array->{'records'} as $value) {
            $res = ($value->{'fields'}->{'img'});
            ?>
                <div class='cat_card'>
                    <a class="jeu_img" href=""
                    style="background: url('<?= $res; ?>');
                            height: 100%; background-size: cover;
                            background-position: center center;"></a>
                    <div class ='cat_title' ><p> <?= ($value->{'fields'}->{'Name'}) ?> </p></div>
                    <div class = 'polygon'><p><?= ($value->{'fields'}->{'PEGI'}) ?> </p></div>
                </div>
            <?php
        }
    }
}

