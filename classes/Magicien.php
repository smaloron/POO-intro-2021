<?php

class Magicien extends Personnage {

    public function attaquer(Personnage $adversaire){
        echo "{$this->nom} lance un sort \n";
        $adversaire->seDefendreContre($this);
    }

    protected function getJetAttaque(){
        return mt_rand(-50, 250) + $this->force;
    }

    public function crier(){
        echo "Abracadabra \n";
    }

}// Fin de la classe Magicien