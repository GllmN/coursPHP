<?php
require_once 'Personne.php';

class Electeur extends Personne
{
    private $bureauDeVote;
    private $vote;

    public function aVote(){
        return $this->vote = true;
    }

    public function __construct($nom, $prenom, $numBureau){
        parent::__construct($nom, $prenom);
        $this->bureauDeVote = $numBureau;
        $this->vote = false;
    }

    public function __toString(): string{
        return $this->nom.' '.$this->prenom.' 
        (Bureau n°'.$this->bureauDeVote.') '.
            //condition ternaire
            ($this->vote ? 'a deja' : 'n\'a pas').' voté<br>';
    }
}