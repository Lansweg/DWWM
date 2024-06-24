<?php

abstract class Animal
{
    // ATTRIBUTS
    protected $nom;
    protected $age;

    // CONSTRUCTEUR
    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }


// GETTER
    public function getNom()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }

    // SETTER
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }


    // Méthode abstraite
    abstract public function faireDuBruit();

    // Méthode Concrète 
    public function bouger()
    {
        echo $this->nom . " est en train de bouger <br>";
    }
}
