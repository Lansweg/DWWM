<?php

interface iAnimals {
    public function seNourrir();
    public function crier();
    public function fuir();
    public function seDeplacer();
}
?>

<?php

interface iChasseur {
    public function seDeplacer();
    public function chasser($lapin);
}
?>