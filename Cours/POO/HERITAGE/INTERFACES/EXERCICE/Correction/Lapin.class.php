<?php




public function seNourrir(){
    echo "Le lapin mange";
}

public function fuir(){
    $this->seDeplacer();
}

public function crier(){
    echo "Le lapin crie";
}

public function estVivant(){
    return true;
}

