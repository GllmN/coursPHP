<?php


abstract class personne
{
    protected $nom;
    protected $prenom;

    /**
     * personne constructor.
     * @param $nom
     * @param $prenom
     */
    public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
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
    public function setNom($nom): void
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
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }


}