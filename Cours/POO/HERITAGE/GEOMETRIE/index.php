<?php
require_once "Rect.class.php";
require_once "TriangleRect.class.php";
require_once "Cercle.class.php";

$Rectangle = new Rectangle(7,7);
$Rectangle->afficherRect();


$triangle = new TriangleRect(12,5);
$triangle->afficherTriangleRect();

$cercle = new Cercle(10);
$cercle->afficherCercle();