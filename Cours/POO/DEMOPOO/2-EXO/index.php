<?php

require_once 'Voiture.class.php';

$mercedes = new Voiture('Mercedes', 'GLE', '2018', 'Noir', '0');
$bmw = new Voiture('BMW', 'M4', '2019', 'gris', '0');
$audi = new Voiture('AUDI', 'RS4', '2020', 'Rouge', '0');

$mercedes->affichage();
echo "<br>";
$bmw->affichage();
echo "<br>";
$audi->affichage();

echo "<br>";
$mercedes->setVitesse(50);
$bmw->setVitesse(80);
$audi->setVitesse(130);

$mercedes->affichage();
echo "<br>";
$bmw->affichage();
echo "<br>";
$audi->affichage();
?>

<form method="post" action="/1-EXO/index.php">
    <input type="number" name="vitesse" placeholder="Entrez une nouvelle vitesse">
    <input type="submit" value="Augmenter la vitesse">
</form>