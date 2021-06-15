<?php

require "classes/Personnage.php";
require "classes/Magicien.php";
require "classes/Chevalier.php";

$roland = new Chevalier("Roland", 60, 90, 80);
$lancelot = new Chevalier("Lancelot du lac", 75, 95, 70);

$merlin = new Magicien("Merlin l'enchanteur", 30, 60, 50);
$merlin->setRapidite(75);


while($merlin->EstVivant() && $lancelot->EstVivant()){
    $merlin->crier();
    $merlin->attaquer($lancelot);
    if($lancelot->EstVivant()){
        $lancelot->crier();
        $lancelot->attaquer($merlin);
    }   
}


