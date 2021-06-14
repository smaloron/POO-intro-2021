<?php

class Voiture {

    /**
     * @var string
     */
    private $marque;

    /**
     * @var string
     */
    private $modele;

    /**
     * @var int
     */
    private $vitesse;

    /**
     * Construteur
     *
     * @param string $marque
     * @param string $modele
     * @param integer $vitesse
     */
    public function __construct(string $marque, string $modele, int $vitesse){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse = $vitesse;
    }

    /**
     * Fonction invoquée lorsque l'on utilise l'objet
     * comme une chaîne de caractère
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getInfos();
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getVitesse(){
        return $this->vitesse;
    }

    public function getInfos(){
        return "ma {$this->marque} {$this->modele} roule à {$this->vitesse} \n";
    }

    public function setVitesse(int $vitesse){
        if($vitesse > 30 && $vitesse < 240){
            $this->vitesse = $vitesse;
        }    
    }

    /**
     * Retourne le nombre de km parcourus
     * @return  string
     */
    public function voyager(int $dureeEnMinutes){
        $distance = $dureeEnMinutes * ($this->vitesse / 60);
        return "Vous avez parcouru $distance km en $dureeEnMinutes minutes \n";
    }


} // fin de la classe Voiture