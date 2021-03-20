<?php


class FormulaireExo5
{
    private $formulaire;

    /**
     * FormulaireExo5 constructor.
     * @param $formulaire
     */
    public function __construct(){
        $this->formulaire = "<form><fieldset>";
    }

    public function rajouterUnInput($id, $class = " "){
        $this->formulaire .= "<input type='text' id='$id' class='$class'>";
    }

    public function __toString(){
        $this->formulaire .= "<input type='submit' value='Envoyer'></fieldset></form>";
        return $this->formulaire;
    }
}