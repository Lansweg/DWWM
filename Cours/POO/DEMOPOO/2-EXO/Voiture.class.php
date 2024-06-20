<?php
class Voiture{
    private $marque;
    private $modele;
    private $année;
    private $couleur;
    public $vitesse;
    //Contructeur
public function __construct($marque,$modele,$année,$couleur,$vitesse){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->année = $année;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }
    //getter
    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getAnnée(){return $this->année;}
    public function getCouleur(){return $this->couleur;}
    public function getVitesse(){return $this->vitesse;}
    //setter
    public function setMarque($name){$this->marque = $name;}
    public function setModele($modele){$this->modele = $modele;}
    public function setAnnée($année){$this->année = $année;}
    public function setCouleur($couleur){$this->couleur = $couleur;}
    public function setVitesse($vitesse){$this->vitesse = $vitesse;}
    //Méthode afficher les plantes
    public function affichage(){
        echo "Marque : $this->marque " . "<br>";
        echo "Modele : $this->modele " . "<br>";
        echo "Année : $this->année " . "<br>";
        echo "Couleur : $this->couleur " . "<br>";
        echo "Vitesse : $this->vitesse " . "<br>";
    }
    public function accelerer(){
        if (isset($_POST['vitesse'])) {
            $this->vitesse += $_POST['vitesse'];
        }
    }
}