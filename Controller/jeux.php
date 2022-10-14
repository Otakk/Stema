<?php

class Jeux extends Main{
    private $nom;
    private $description;
    private $plateform;
    private $categorie;
    private $pegi;
    private $langue;
    private $codeLangue;
    private $date;
    private $img;
    private $contacts;
    public function __construct($idJeu = Null)
    {
        if(isset($idJeu) && !empty($idJeu)){
            $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux/".$idJeu);
            $resultat = curl_exec($session);
            $array = json_decode($resultat);
            if(!empty($array->{'fields'}->{'Name'}))
            {
                $this-> nom = $array->{'fields'}->{'Name'};
            }else{
                $this-> nom = "unknown";
            }
            if(!empty($array->{'fields'}->{'Description'}))
            {
                $this-> description = $array->{'fields'}->{'Description'};
            }else{
                $this-> description = "unknown";
            }
            if(!empty($array->{'fields'}->{'Name (from Plateforme)'})){
                $this-> plateform = $array->{'fields'}->{'Name (from Plateforme)'};
            }else{
                $this-> plateform = ['unknow'];
            }
            if(!empty($array->{'fields'}->{'Name (from Categorie)'})){
                $this-> categorie = $array->{'fields'}->{'Name (from Categorie)'};
            }else{
                $this-> categorie = ['unknown'];
            }
            if(!empty($array->{'fields'}->{'PEDI'}))
            {
                $this-> pegi = $array->{'fields'}->{'PEGI'};
            }else{
                $this-> pegi = 'unknown';
            }
            if(!empty($array->{'fields'}->{'Langues'}))
            {
                $this-> langue = $array->{'fields'}->{'Langues'};
            }else{
                $this-> langue = ['unknown'];
            }
            if(!empty($array->{'fields'}->{'Code (from Langues)'}))
            {
                $this-> codeLangue = $array->{'fields'}->{'Code (from Langues)'};
            }else{
                $this-> codeLangue = ["unknown"];
            }
            if(!empty($array->{'fields'}->{'Date d\'obtention'})){
                $this-> date = $array->{'fields'}->{'Date d\'obtention'};
            }else{
                $this-> date = "unknown";
            }
            if(!empty($array->{'fields'}->{'img'}))
            {
                $this-> img = $array->{'fields'}->{'img'};
            }else{
                $this-> img = 'unknown';
            }
            if(!empty($array->{'fields'}->{'Contacts'})){
                $this-> contacts = $array->{'fields'}->{'Contacts'};
            }else{
                $this-> contacts = ['unknown'];
            }
            
        }
    }
    public function listeJeux() {
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux");
        
        $resultat = curl_exec($session);
        curl_close($session);
        $array = json_decode($resultat);
        return $array;
    }
    public function gamebyCat($nom)
    {
        $session = $this->initCurl("https://api.airtable.com/v0/appaIyKt419Or5Axf/Jeux?view=".$nom);

        $resultat = curl_exec($session);
        $array = json_decode($resultat);
        foreach ($array->{'records'} as $value) {
            $res = ($value->{'fields'}->{'img'});
            foreach($value->{'fields'}->{'Categorie'} as $cat){
                if($cat == 'recN6D1cUxEJIpNbX'){
                    $checked = true;
                    break;
                }else{
                    $checked = false;
                }
            }
            ?>
                <div class='cat_card'>
                    <a class="jeu_img" href="../vues/jeu.php?j=<?= $value->{'id'};?>"
                    style="background: url('<?= $res; ?>');
                            height: 100%; background-size: cover;
                            background-position: center center;"></a>
                    <div class ='cat_title' ><p> <?= ($value->{'fields'}->{'Name'}) ?> </p></div>                 
                    <div class = 'polygon'><p><?= ($value->{'fields'}->{'PEGI'}) ?> </p></div>
                    <div class = 'fav'>
                        <input type="checkbox" class='fav-button' data-g="<?= $value->{'id'};?>" id="checkbox<?= $value->{'id'};?>" <?= $checked ? 'checked':'';?> onclick='addFav(this,
                        [<?php foreach($value->{"fields"}->{"Categorie"} as $Cat){echo '"'.$Cat.'"'.",";};?>])' />
                        <label for="checkbox<?= $value->{'id'};?>">
                        <svg id="heart-svg" viewBox="467 392 58 57">
                            <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                            <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                            <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>
                            <g id="grp7" opacity="0" transform="translate(7 6)">
                                <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                                <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                            </g>
                            <g id="grp6" opacity="0" transform="translate(0 28)">
                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                                <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                            </g>
                            <g id="grp3" opacity="0" transform="translate(52 28)">
                                <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                                <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                            </g>
                            <g id="grp2" opacity="0" transform="translate(44 6)">
                                <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                            </g>
                            <g id="grp5" opacity="0" transform="translate(14 50)">
                                <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                                <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                            </g>
                            <g id="grp4" opacity="0" transform="translate(35 50)">
                                <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                                <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                            </g>
                            <g id="grp1" opacity="0" transform="translate(24)">
                                <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                                <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                            </g>
                            </g>
                        </svg>
                        </label>
                    </div>
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
            foreach($value->{'fields'}->{'Categorie'} as $cat){
                if($cat == 'recN6D1cUxEJIpNbX'){
                    $checked = true;
                    break;
                }else{
                    $checked = false;
                }
            }
            ?>
                <div class='cat_card'>
                    <a class="jeu_img" href="../vues/jeu.php?j=<?= $value->{'id'};?>"
                    style="background: url('<?= $res; ?>');
                            height: 100%; background-size: cover;
                            background-position: center center;"></a>
                    <div class ='cat_title' ><p> <?= ($value->{'fields'}->{'Name'}) ?> </p></div>
                    <div class = 'polygon'><p><?= ($value->{'fields'}->{'PEGI'}) ?> </p></div>
                    <div class = 'fav'>
                        <input type="checkbox" class='fav-button' data-g="<?= $value->{'id'};?>" id="checkbox<?= $value->{'id'};?>" <?= $checked ? 'checked':'';?> onclick='addFav(this,
                        [<?php foreach($value->{"fields"}->{"Categorie"} as $Cat){echo '"'.$Cat.'"'.",";};?>])' />
                        <label for="checkbox<?= $value->{'id'};?>">
                        <svg id="heart-svg" viewBox="467 392 58 57">
                            <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                            <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" fill="#AAB8C2"/>
                            <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5"/>
                            <g id="grp7" opacity="0" transform="translate(7 6)">
                                <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2"/>
                                <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2"/>
                            </g>
                            <g id="grp6" opacity="0" transform="translate(0 28)">
                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2"/>
                                <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2"/>
                            </g>
                            <g id="grp3" opacity="0" transform="translate(52 28)">
                                <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2"/>
                                <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2"/>
                            </g>
                            <g id="grp2" opacity="0" transform="translate(44 6)">
                                <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2"/>
                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2"/>
                            </g>
                            <g id="grp5" opacity="0" transform="translate(14 50)">
                                <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2"/>
                                <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2"/>
                            </g>
                            <g id="grp4" opacity="0" transform="translate(35 50)">
                                <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2"/>
                                <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2"/>
                            </g>
                            <g id="grp1" opacity="0" transform="translate(24)">
                                <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2"/>
                                <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2"/>
                            </g>
                            </g>
                        </svg>
                        </label>
                    </div>
                </div>
            <?php
        }
    }

    public function getNom()
    {
        return $this-> nom;
    }
    public function setNom($nom)
    {
        $this-> nom = $nom;
    }

    public function getDescription()
    {
        return $this-> description;
    }
    public function setDescription($description)
    {
        $this-> description = $description;
    }

    public function getPlateform()
    {
        return $this-> plateform;
    }
    public function setPlateform($plateform)
    {
        $this-> plateform = $plateform;
    }

    public function getCategorie()
    {
        return $this-> categorie;
    }
    public function setCategorie($categorie)
    {
        $this-> categorie = $categorie;
    }

    public function getpegi()
    {
        return $this-> pegi;
    }
    public function setPegi($pegi)
    {
        $this-> pegi = $pegi;
    }

    public function getLangue()
    {
        return $this-> langue;
    }
    public function setLangue($langue)
    {
        $this-> langue = $langue;
    }

    public function getcodeLangue()
    {
        return $this-> codeLangue;
    }
    public function setcodeLangue($codeLangue)
    {
        $this-> codeLangue = $codeLangue;
    }

    public function getDate()
    {
        return $this-> date;
    }
    public function setDate($date)
    {
        $this-> date = $date;
    }

    public function getImg()
    {
        return $this-> img;
    }
    public function setImg($img)
    {
        $this-> img = $img;
    }

    public function getContacts()
    {
        return $this-> contacts;
    }
    public function setContacts($contacts)
    {
        $this-> contacts = $contacts;
    }
}

