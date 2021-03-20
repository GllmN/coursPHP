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
$msg = "";
if (isset($_POST['nom'])) {
    if (empty($_POST['nom'])) {
        $msg .= 'Nom ';
    }
}
if (isset($_POST['prenom'])) {
    if (empty($_POST['prenom'])) {
        $msg .= 'Prénom ';
    }
}
if (isset($_POST['adresse'])) {
    if (empty($_POST['adresse'])) {
        $msg .= 'Adresse ';
    }
}
if (isset($_POST['cp'])) {
    if (empty($_POST['cp'])) {
        $msg .= 'Code postal ';
    }
}
if (isset($_POST['ville'])) {
    if (empty($_POST['ville'])) {
        $msg .= 'Ville ';
    }
}
?>

<hr/>
<?php
if (!empty($msg)) {
    ?>
    <div class="notification is-danger is-light">
        Certains champs requis ne sont pas renseignés.
    </div>
    <hr/>
<?php } ?>

<form action="traitement.php" method="post" name="formulaire">
    <fieldset>
        <legend>Adresse client</legend>
        <label for="nom">Nom :
            <input type="text" id="nom" name="nom" value="<?= isset($_POST['nom']) ? $_POST['nom'] : '' ?>" placeholder="votre nom...">
        </label>
        <br>
        <label for="prenom">Prénom :
            <input type="text" id="prenom" name="prenom" value="<?= isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>" placeholder="votre prénom..." >
        </label>
        <br>
        <label for="adresse">Adresse :
            <input type="text" id="adresse" name="adresse" value="<?= isset($_POST['adresse']) ? $_POST['adresse'] : '' ?>" placeholder="votre adresse..." required>
        </label>
        <br>
        <label for="cp">CP :
            <input type="text" id="cp" name="cp" value="<?= isset($_POST['cp']) ? $_POST['cp'] : '' ?>" placeholder="votre code postal..." required>
        </label>
        <br>
        <label for="ville">Ville :
            <input type="text" id="ville" name="ville" value="<?= isset($_POST['ville']) ? $_POST['ville'] : '' ?>" placeholder="votre ville..." required>
        </label>
        <br>
        <input type="submit" value="Envoyer le formulaire" onclick="return isEmpty()">
    </fieldset>
</form>
<?php
if (!empty($msg)) {
    $msg .= "ne peuvent pas etre vide.";
    echo '<script type=\'text/javascript\'>alert(\'' . $msg . '\')</script>';
}
?>
<br>
<h2></h2>
<?php
$email = "";
$navigateur = "";
if (isset($_POST['email'])){
    $email = $_POST['email'];
    $navigateur = $_SERVER['HTTP_USER_AGENT'];
}
?>
<form method="post" action="#" name="formulaireSAbonner">
    <fieldset>
        <legend>S'abonner</legend>
        <label>E-Mail :
            <input type="email" id="email" name="email" value="<?= $email ?>" placeholder="votre email..." >
        </label>
        <br>
        <input type="submit" value="Valider">
    </fieldset>
</form>
<p><?= $email ?></p>
<p><?= $navigateur ?></p>
<br>
<h2></h2>
</body>
</html>
