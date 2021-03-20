<?php


class Voiture
{
    private $immat;
    private $id_modele;
    private $couleur;
    private $datevoiture;

    /**
     * Voiture constructor.
     * @param $immat
     * @param $id_modele
     * @param $couleur
     * @param $datevoiture
     */
    public function __construct($immat, $id_modele, $couleur, $datevoiture)
    {
        $this->immat = $immat;
        $this->id_modele = $id_modele;
        $this->couleur = $couleur;
        $this->datevoiture = $datevoiture;
    }

    /**
     * @return mixed
     */
    public function getImmat()
    {
        return $this->immat;
    }

    /**
     * @param mixed $immat
     */
    public function setImmat($immat)
    {
        $this->immat = $immat;
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
    public function setIdModele($id_modele)
    {
        $this->id_modele = $id_modele;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getDatevoiture()
    {
        return $this->datevoiture;
    }

    /**
     * @param mixed $datevoiture
     */
    public function setDatevoiture($datevoiture)
    {
        $this->datevoiture = $datevoiture;
    }
}