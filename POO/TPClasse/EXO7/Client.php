<?php
require_once 'Personne.php';

class Client extends Personne
{
    private $adresse;

    public function setCoord($adresse){
        $this->adresse = $adresse;
    }

    public function __toString(): string{
        return '<adresse>' .$this->nom.''.$this->prenom.'<br>'.$this->adresse.'</adresse>';
    }

}