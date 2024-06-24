<?php

require_once "Chien.class.php";


// $animal = new Animal("Animal", 1); // Interdit car Animal est une classe abstraite


// instancier le chien 
$chien = new Chien("Rex", 3);

$chien->faireDuBruit();
$chien->bouger();