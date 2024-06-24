<?php
require_once "Employe.class.php";

class Manager extends Employe {
    protected $employesGeres = [];

    public function __construct($nom, $salaire, $employesGeres = []){
        parent::__construct($nom, $salaire);
        $this->employesGeres = $employesGeres;
    }

    public function ajouterEmploye(Employe $employe){
        $this->employesGeres[] = $employe;
    }

    public function afficherDetails(){
        parent::afficherDetails();
        echo "Employés gérés : <br>";
        foreach ($this->employesGeres as $employe) {
            $employe->afficherDetails();
        }
    }
}
