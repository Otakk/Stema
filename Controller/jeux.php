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
            $this-> nom = $array->{'fields'}->{'Name'};
            $this-> description = $array->{'fields'}->{'Description'};
            $this-> plateform = $array->{'fields'}->{'Name (from Plateforme)'};
            $this-> categorie = $array->{'fields'}->{'Name (from Categorie)'};
            $this-> pegi = $array->{'fields'}->{'PEGI'};
            $this-> langue = $array->{'fields'}->{'Langues'};
            $this-> codeLangue = $array->{'fields'}->{'Code (from Langues)'};
            $this-> date = $array->{'fields'}->{'Date d\'obtention'};
            $this-> img = $array->{'fields'}->{'img'};
            $this-> contacts = $array->{'fields'}->{'Contacts'};
        }
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
                    <a class="jeu_img" href="../vues/jeu.php?j=<?= $value->{'id'};?>"
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
                    <a class="jeu_img" href="../vues/jeu.php?j=<?= $value->{'id'};?>"
                    style="background: url('<?= $res; ?>');
                            height: 100%; background-size: cover;
                            background-position: center center;"></a>
                    <div class ='cat_title' ><p> <?= ($value->{'fields'}->{'Name'}) ?> </p></div>
                    <div class = 'polygon'><p><?= ($value->{'fields'}->{'PEGI'}) ?> </p></div>
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

