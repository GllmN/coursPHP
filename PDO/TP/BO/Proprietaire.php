<?php


class Proprietaire
{
    private $id_pers;
    private $nom;
    private $prenom;
    private $adresse;
    private $ville;
    private $codepostal;

    /**
     * Proprietaire constructor.
     * @param $id_pers
     * @param $nom
     * @param $prenom
     * @param $adresse
     * @param $ville
     * @param $codepostal
     */
    public function __construct($id_pers, $nom, $prenom, $adresse, $ville, $codepostal)
    {
        $this->id_pers = $id_pers;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->codepostal = $codepostal;
    }

    /**
     * @return mixed
     */
    public function getIdPers()
    {
        return $this->id_pers;
    }

    /**
     * @param mixed $id_pers
     */
    public function setIdPers($id_pers)
    {
        $this->id_pers = $id_pers;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * @param mixed $codepostal
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }
}