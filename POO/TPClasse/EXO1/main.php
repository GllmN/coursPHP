<?php
require_once "./Ville.php";


// EXO 1 (Afficher une instance sans constructeur)
$paris = new Ville();

$paris->setNom('Paris');
$paris->setDepartement('75');
echo $paris;
