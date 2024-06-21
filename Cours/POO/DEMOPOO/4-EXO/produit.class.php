<?php
class Produit {
    private string $nom; // 
    private float $prix; // Convertit une chaîne en nombre à virgule flottante
    private int $quantiteStock; // Retourne la valeur numérique entière équivalente d'une variable

    public function __construct(string $nom, float $prix, int $quantiteStock) {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantiteStock = $quantiteStock;
    }

    public function affichage(){
        echo "Nom : " . $this->nom . "<br>";
        echo "Prix : " . $this->prix . "€" . "<br>";
        echo "Quantité en stock : " . $this->quantiteStock . "<br>";
    }
}