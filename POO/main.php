<?php
require_once "./Voiture.php";

$tesla = new Voiture("Tesla", "3");
echo $tesla;
echo "\n";
$tesla->setModele("S");
echo $tesla;
echo "\n";
echo $tesla->getMarque();
$tesla->jeRoule();
