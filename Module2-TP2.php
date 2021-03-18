<p>"Exercice 1"</p>

<?php
function nbEssai($param01){
    $cpt = 0;

    if($param01 < 0){
        do {
            $cpt++;
        } while(rand (0,999) != $param01);
        return $cpt;
    } else {
        return 0;
    }
}
echo 'nombre de coup : '.nbEssai(2000).', pour trouver le nombre : 666';
?>

<p>"Exercice 2"</p>

<?php
function decroissant($x, $y){
    $paramMax = max($x, $y);
    $paramMin = min($x, $y);
    return "Dans l'ordre : $paramMax $paramMin \n ";
}
echo decroissant(6, 65);
echo decroissant(645, 65);
?>


<p>"Exercice 3"</p>

<?php
//plus grand dénominateur commun
function pgcd($param01, $param02){
    // Tant que le resultat de la division euclidienne est différent de 0
    do{
        $reste = $param01 % $param02;
        $param01 = $param02;
        $param02 = $reste;
    }  while ($reste != 0);
    return $param01;
}
$x=295;
$y=500;
// 177 % 295 = 177
// 295 % 177 = 59
// 118 % 59 = 0
echo 'le PGCD de '.$x.' % '.$y.' est : '.pgcd($x, $y);

?>