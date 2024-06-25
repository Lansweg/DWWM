<?php

require_once 'iMethode.php';

class Chasseur implements iChasseur {
    public $nom;
    public $arme;

    public function __construct($nom, $arme) {
        $this->nom = $nom;
        $this->arme = $arme;
        echo "Le chasseur $nom a été créé avec un $arme <br>";
    }

    public function seDeplacer() {
        echo "$this->nom avance avec son $this->arme <br>";
    }

    public function chasser($lapin) {
        echo "$this->nom tire sur le lapin avec son $this->arme et… ";
        $resultat = rand(1, 6);
        if ($resultat == 1 || $resultat == 6) {
            $lapin->enVie = false;
            echo $this->estmort($lapin);
        } else {
            echo $this->estrate($lapin);
        }
    }

    public function estmort($lapin){
        echo "le touche <br>";
        echo "<div class='chasseurfurie'>Le pauvre petit lapin $lapin->nom est malheureusement mort </div>";
    }

    public function estrate($lapin){
        echo "le rate <br>";
    }

}
?>