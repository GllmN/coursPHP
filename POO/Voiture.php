<?php


class Voiture extends Vehicule
{
    private $marque;
    private $modele;

    /**
     * Voiture constructor.
     * @param $marque
     * @param $modele
     */
    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function __toString()
    {
        return "Marque : $this->marque, Modele : $this->modele";
    }

}