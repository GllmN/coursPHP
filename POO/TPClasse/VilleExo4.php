<?php


class VilleExo4
{
    private $nom;
    private $departement;

    /**
     * VilleExo4 constructor.
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement){
            $this->setNom($nom);
            $this->departement = $departement;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        if (strlen($nom) > strlen(static::$nomLePlusLong)) {
            static::$nomLePlusLong = $nom;
        }
    }
}