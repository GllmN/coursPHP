<?php

require_once "./Ville.php";

class VilleAvecRegion extends Ville
{
    private $region;

    /**
     * VilleAvecRegion constructor.
     * @param $region
     */
    public function __construct($nom, $departement, $region){
        parent::setNom($nom);
        parent::setDepartement($departement);
      //  parent::__construct($nom, $departement);
        $this->region = $region;
    }

    public function __toString()
    {
        $recup = parent::__toString();
        // ICI la fonction strlen permet d'enlever une partie des caractères de la chaine de caractère
        $recup = substr($recup, 0 ,strlen($recup) - 4);
        return $recup.' de la region'. $this->region. '<br>';

        //return parent::__toString().' de la region'. $this->region. '<br>';
    }
}