<?php

require_once "Animal.class.php";

class Chien extends Animal{

    public function faireDuBruit()
    {
        echo $this->nom . " wouaf wouaf <br>";
    }
}