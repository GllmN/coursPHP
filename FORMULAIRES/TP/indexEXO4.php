<?php
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
<?php
$prixHT = filter_input (INPUT_POST,'HT', FILTER_VALIDATE_FLOAT);
$tauxTVA = filter_input(INPUT_POST,'Taux', FILTER_VALIDATE_FLOAT);
?>
<form action="" method="post" name="formulaireTaxe">
    <fieldset>
        <legend>Calcul des taxes</legend>
        <label for="HT">Prix HT
            <input type="number" id="prixHT" name="HT" value="<?php if(isset($_POST['calculer'])) {
                echo $prixHT;
            } ?>" required>
            €
        </label>
        <br>
        <label for="Taux">Taux de TVA
            <input type="number" id="tauxTVA" name="Taux" value="<?php if(isset($_POST['calculer'])) {
                echo $tauxTVA;
            } ?>" required>
            %
        </label>
        <br>
        <input type="submit" value="Calculer" name="calculer" >
        <?php
        if(isset($_POST['calculer'])) {
            $montantTVA = number_format($prixHT * ($tauxTVA / 100), 2, '€', '');
            $montantTTC = number_format($prixHT + ($prixHT * ($tauxTVA / 100)), 2, '€', '');
        }
            ?>
        <br>
        <label>Montant de la TVA
            <input type="text" id="montantTVA" name="montantTVA" value="<?php if(isset($_POST['calculer'])) {
                echo $montantTVA;
            } ?>" readonly>
        </label>
        <br>
        <label>Montant TTC
            <input type="text" id="montantTTC" name="montantTTC" value="<?php if(isset($_POST['calculer'])) {
                echo $montantTTC;
            } ?>" readonly>
        </label>
    </fieldset>
</form>
</body>
</html>
