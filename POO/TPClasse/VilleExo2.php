<?php


class VilleExo2
{
    private $nom;
    private $departement;

    /**
     * VilleExo2 constructor.
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement) {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function __toString() {
        return 'La ville de '.$this->nom.' est dans le département '.$this->departement.'.';
    }
}