<p>"Exercice 1"</p>
<?php
// Premier Tableau
$dupont[] ='Rose';
$dupont[] = '33';
$dupont[] = 'Nice';

// Deuxième Tableau
$martin[] ='Paul';
$martin[] = '22';
$martin[] = 'Strasbourg';

$personnes['UN'] = $martin;
$personnes['DEUX'] = $dupont;
var_dump($personnes);
?>

<p>"Exercice 2"</p>
<?php
// Premier Tableau
$personne_prenom[] ='Rose';
$personne_prenom[] ='Paul';
$personne_prenom[] ='Hervé';

// Deuxième Tableau
$personne_age[] = '22';
$personne_age[] = '33';
$personne_age[] = '57';

// Troisième Tableau
$personne_ville[] = 'Nice';
$personne_ville[] = 'Strasbourg';
$personne_ville[] = 'Paris';


?>

<p>"Exercice 3"</p>
<?php

$dupont = array(
    'PRENOM' => 'Gérard',
    'VILLE' => 'PARIS',
    'AGE' => 67
);

foreach ($dupont as $item) {
    echo $item.'<br/>';
}

$badin = array(
    'PRENOM' => 'aurélie',
    'VILLE' => 'NANTES',
    'AGE' => 31
);

foreach ($badin as $item) {
    echo $item.'<br/>';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
</html>
