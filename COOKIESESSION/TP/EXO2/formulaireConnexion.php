<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>

<?php
if (isset($_POST['login']) & isset($_POST['mdp']) & isset($_POST['cookie'])){
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $cookie = $_POST['cookie'];
    setcookie('login',$login, time() + abs ($cookie * 24  * 60 * 60));
    setcookie('mdp',$mdp, time() + abs ($cookie * 24  * 60 * 60));
}
?>

<body>
    <form method="post">
        <label for="login">Login :
            <input type="text" id="login" name="login" value="<?php if(isset($_POST['cookie'])) {
                echo $login;
            } ?>" >
        </label>
        <br>
        <label for="mdp">Mot de passe :
            <input type="password" id="mdp" name="mdp" value="<?php if(isset($_POST['cookie'])) {
                echo $mdp;
            } ?>" >
        </label>
        <br>
        <label for="cookie">Conserver ces informations pendant
            <input type="number" id="cookie" name="cookie" >
            jours
        </label>
        <br>
        <input type="submit" name="connection" value="se connecter">
    </form>
</body>
</html>
<?php

?>
