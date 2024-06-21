<?php
    require_once 'stagiaire.class.php';

$stagiaire = new Stagiaire('martin', 'thomas', [10, 20, 30, 40, 50]);

$stagiaire->afficher();

