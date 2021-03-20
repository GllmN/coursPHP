<?php


class Modele
{
    private $id_modele;
    private $marque;
    private $modele;
    private $carburant;

    /**
     * Modele constructor.
     * @param $id_modele
     * @param $marque
     * @param $modele
     * @param $carburant
     */
    public function __construct($id_modele, $marque, $modele, $carburant)
    {
        $this->id_modele = $id_modele;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->carburant = $carburant;
    }

    /**
     * @return mixed
     */
    public function getIdModele()
    {
        return $this->id_modele;
    }

    /**
     * @param mixed $id_modele
     */
    public function setIdModele($id_modele): void
    {
        $this->id_modele = $id_modele;
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
    public function setMarque($marque): void
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
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     */
    public function setCarburant($carburant): void
    {
        $this->carburant = $carburant;
    }

}