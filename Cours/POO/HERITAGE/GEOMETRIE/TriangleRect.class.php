<?php
class TriangleRect
{
    protected $base;
    protected $hauteur;
    
    public function __construct($base, $hauteur)
    {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }
    
    
    // GETTER et SETTER
    public function getbase()
    {
        return $this->base;
    }
    public function gethauteur()
    {
        return $this->hauteur;
    }
    public function setbase($base)
    {
        $this->base = $base;
    }
    public function sethauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }



    // function
    public function periRect()
    {
        $Perimetre = ($this->base * 2) + ($this->hauteur * 2);
        return $Perimetre;
    }
    public function aireRect()
    {
        $Air = $this->base * $this->hauteur;
        return $Air;
    }
    public function afficherTriangleRect()
    {
        echo "la base est $this->base <br>";
        echo "la hauteur est $this->hauteur <br>";
        echo "";
        echo "Périmetre du Triangle = {$this->periRect()}<br>";
        echo "Air du Triangle = {$this->aireRect()} <br>";

        echo "<br>"; 
        echo "*********************************************<br>"; 
    }
}
