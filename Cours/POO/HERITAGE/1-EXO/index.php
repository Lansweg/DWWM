<?php
require_once "Employe.class.php";
require_once "Manager.class.php";

$employe1 = new Employe("Alice", 50000);
$manager1 = new Manager("Bob", 70000);

$manager1->ajouterEmploye($employe1);

$employe1->afficherDetails();
$manager1->afficherDetails();
?>