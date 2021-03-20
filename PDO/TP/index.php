<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>TP05</title>
</head>
<body>
<?php
require_once './DAL/ModeleDAO.php';
$modeleDAO = new ModeleDAO();
?>
<div class="container">
    <?php
    if (isset($_GET['form']) && $_GET['form'] == 1) {
        require_once "./IHM/formulaireProprietaire.php";
    } else {
        require_once "./IHM/formulaireModele.php";
        require_once "./IHM/tableau.php";
    }
    ?>
</div>
</body>
</html>