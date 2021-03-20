<?php


class VilleExo4
{
    private $nom;
    private $departement;

    private static $nomLePlusLong;

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
    public function setNom($nom){
        $this->nom = $nom;
        if (strlen($nom) > strlen(static::$nomLePlusLong)) {
            static::$nomLePlusLong = $nom;
        }
    }

    public static function getNomLePlusLong(){
        return self::$nomLePlusLong;
    }


}