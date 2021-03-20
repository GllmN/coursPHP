<?php

require_once "./VilleExo4.php";


// EXO 4
$nantes = new VilleExo4('Nantes','44');
$paris = new VilleExo4('Paris','75');
$bordeaux = new VilleExo4('Bordeaux','33');
$brest = new VilleExo4('Brest', '22');

echo VilleExo4::getNomLePlusLong();