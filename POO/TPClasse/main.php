<?php
require_once "./Ville.php";
require_once "./VilleExo2.php";
require_once "./VilleExo4.php";
require_once "./VilleAvecRegion.php";

// EXO 1
$paris = new Ville();

$paris->setNom('Paris');
$paris->setDepartement('75');
echo $paris;

// EXO 2
$nantes = new VilleExo2('Nantes','44');
echo $nantes->__toString();

// EXO 3
$bordeaux = new VilleAvecRegion('Bordeaux','33','Aquitaine');
echo $bordeaux;

// EXO 4
$nantes = new VilleExo4('Nantes','44');
$paris = new VilleExo4('Paris','75');
$bordeaux = new VilleExo4('Bordeaux','33');
$brest = new VilleExo4('Brest', '22');

echo VilleExo4::nomLePlusLong();