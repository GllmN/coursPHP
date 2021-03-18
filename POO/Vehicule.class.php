<?php


class Vehicule implements Roulant
{
    protected $couleur;
    protected $nbroue;

    /**
     * Vehicule constructor.
     * @param $couleur
     * @param $nbroue
     */
    public function __construct($couleur, $nbroue)
    {
        $this->couleur = $couleur;
        $this->nbroue = $nbroue;
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
    public function getNbroue()
    {
        return $this->nbroue;
    }

    /**
     * @param mixed $nbroue
     */
    public function setNbroue($nbroue)
    {
        $this->nbroue = $nbroue;
    }



    function jeRoule()
    {
        echo"Je roule et je suis content.";
        echo"Quand je suis content, je vomis.";
    }
}