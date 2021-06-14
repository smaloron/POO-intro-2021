<?php
// Import de la classe Voiture
require "classes/Voiture.php";

// création d'une voiture
$maVoiture = new Voiture("Peugeot", "206", 90);
$maVoiture->setVitesse(150);
echo $maVoiture;
echo $maVoiture->voyager(40);


$autreVoiture = new Voiture("Jaguar", "A", 180);
echo $autreVoiture;
echo $autreVoiture->voyager(40);