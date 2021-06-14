<?php

require "classes/Personnage.php";
require "classes/Magicien.php";

$roland = new Personnage("Roland", 60, 90, 80);
$lancelot = new Personnage("Lancelot du lac", 75, 95, 70);

$merlin = new Magicien("Merlin l'enchanteur", 30, 60, 50);
$merlin->setRapidite(75);


while($merlin->EstVivant() && $lancelot->EstVivant()){
    $merlin->attaquer($lancelot);
    if($lancelot->EstVivant()){
        $lancelot->attaquer($merlin);
    }   
}


