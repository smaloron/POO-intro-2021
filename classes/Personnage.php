<?php

abstract class Personnage {

    const MAX_FORCE = 200;
    const MIN_FORCE = 1;

    /**
     * @var int
     */
    protected $force;

    /**
     * @var int
     */
    protected $defense;

    /**
     * @var int
     */
    protected $vie;

    /**
     * @var string
     */
    protected $nom;

   /**
    * @var int
    */
    protected $rapidite = 50;

    public function __construct(string $nom, int $force, int $defense, int $vie){
        $this->nom = $nom;
        $this->force = $force;
        $this->defense = $defense;
        $this->vie = $vie;

    }

    public function setForce(int $force){
        if($force >= self::MIN_FORCE && $force <= self::MAX_FORCE) {
            $this->force = $force;
        }     
    }

    public function setRapidite(int $valeur){
        $this->rapidite = $valeur;
    }

    protected function getJetAttaque(){
        return mt_rand(1, 100) + $this->force;
    }

    private function getJetDefense(){
        return mt_rand(1, 100) + $this->defense;
    }

    public function attaquer(Personnage $adversaire){
        echo "{$this->nom} attaque \n";
        $adversaire->seDefendreContre($this);
    }

    public function seDefendreContre(Personnage $adversaire){
        $coup = $adversaire->getJetAttaque() - $this->getJetDefense();
        if($coup >0){
            $this->prendreDesCoups($coup);
        } else {
            echo "{$this->nom} esquive l'attaque \n";
        }
    }

    private function prendreDesCoups($coup){
        $this->vie = $this->vie -  $coup;
        if($this->vie <= 0){
            echo "{$this->nom} est mort ! \n"; 
        } else {
            echo "{$this->nom} a pris $coup coups il lui reste {$this->vie} points de vie \n";
        }
    }

    public function EstVivant(): bool{
        return $this->vie >0;
    }

    public abstract function crier();

} // Fin de la classe Personnage