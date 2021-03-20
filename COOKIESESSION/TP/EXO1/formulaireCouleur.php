
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php

if (isset($_POST['fond']) & isset($_POST['texte'])) {
    $fond = $_POST['fond'];
    $texte = $_POST['texte'];
    setcookie('fond', $fond, time() +60);
    setcookie('texte', $texte , time() +60);
} else {
    $fond = $_COOKIE['fond'];
    $texte = $_COOKIE['texte'];
}
?>
<body style="background-color: <?= $fond ?>; color: <?= $texte ?>">
<hr>

<?php
$tableauDeCouleur = ['red', 'green', 'blue', 'purple'];
?>
<form method="post" name="formulaire">
    <fieldset>
        <legend>Changer couleur</legend>
        <label for="nom">Fond :</label>
        <select name="fond" id="fond">
            <?php
            foreach ($tableauDeCouleur as $couleur) {
                echo "<option value='$couleur'>$couleur</option>";
            }
            ?>
        </select>
        <br>
        <label for="texte">Texte :</label>
        <select name="texte" id="texte">
            <<?php
            foreach ($tableauDeCouleur as $couleur) {
                if ($couleur === $fond) {
                    echo "<option value='$couleur' selected>$couleur</option>";
                } else {
                    echo "<option value='$couleur'>$couleur</option>";
                }
            }
            ?>
        </select>
        <br>
        <input id="submit" name="submit" type="submit" value="Changer">
    </fieldset>
</form>
</body>
</html>