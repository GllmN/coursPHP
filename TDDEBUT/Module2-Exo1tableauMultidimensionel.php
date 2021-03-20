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
// Soit ca :
$caliendo = ["prenom" => "Julien", "ville" => "Brest", "age" => 36];
$tab["Caliendo"] = $caliendo;
var_dump($caliendo);

// ou ça :
$personne = ["Caliendo" => ["prenom" => "Julien", "ville"=>"Brest"]];
$personne = ["Rose" => ["prenom" => "Martin", "ville"=>"Paris"]];
var_dump($personne);
?>

<p>"Exercice 3"</p>
<?php

foreach ($tab as $valeurs) {
    foreach ($valeurs as $cle => $v) {
        echo "$cle - $v \n";
    }
    echo "------------------------ \n";
}

$badin = array(
    'PRENOM' => 'aurélie',
    'VILLE' => 'NANTES',
    'AGE' => 31
);
foreach ($badin as $clef) {
    echo $clef.'<br/>';
}
?>

<p>"Exercice 4"</p>
<?php
$mails = ['jean@eni.fr', 'fred@linux.net', 'lea@renault.fr', 'caroline@eni.fr','contact@eni-ecole.fr', 'valentina@ferrari.it', 'melanie@eni-ecole.fr','philippe@eni.fr', 'typhaine@belfort.fr', 'louis@leparisien.fr'];
$fqdns = ["eni.fr" => 0, "linux.net" =>0];
// parcourir le tableau
foreach ($mails as $mail) {
    // exploser chaque adresse mail pour récuperer le "apres @", et recuperer le deuxième élément
    $fqdn = explode('@', $mail) [1];
    $leServeur = $fqdn[1];
    // Incrémenter le compteur en fonction du FQDN
    if (isset($fqdns[$fqdn])) {
        $fqdns[$fqdn]++;
    }
}

var_dump($fqdns);
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
