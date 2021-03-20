<?php
/**
 * @var ModeleDAO $modeleDAO
 */
?>
<?php
require_once '../BO/Modele.php';
require_once '../DAL/ProprietaireDAO.php';
$identifiant = "";
$nom = "";
$prenom = "";
$adresse = "";
$ville = "";
$codepostal = "";

if (isset($_POST['identifiant']) && isset($_POST['nom'])) {
    $proprioDAO = new ProprietaireDAO();
    $identifiant = settype($_POST['identifiant'], 'int');
    $nom = $_POST['nom'];
    $proprietaire = $proprioDAO->selectbyidetnom($identifiant, $nom);
}
?>
<?php if (!empty($msg)) { ?>
    <div>
        <button></button>
        <?= $msg ?>
    </div>
<?php } ?>
        <form method="post" class="box">
            <fieldset>
                <legend>Se connecter</legend>
            </fieldset>
            <br>
            <label for="identifiant">Identifiant</label>
                <input id="identifiant" name="identifiant" type="text" placeholder="Identifiant" value="<?= $identifiant ?>">
            <label for="nom">Nom</label>
                <input id="nom" name="nom" type="text" placeholder="Nom" value="<?= $nom ?>">
                <input id="submit" name="submit" type="submit" value="Se connecter">
        </form>
<?php
if (isset($proprietaire) && $proprietaire !== null) {
    ?>
        <table>
                <input type="text" value="<?= $proprietaire->getIdPers() ?>">
                <input type="text" value="<?= $proprietaire->getNom() ?>">
                <input type="text" value="<?= $proprietaire->getPrenom() ?>">
                <input type="text" value="<?= $proprietaire->getAdresse() ?>">
                <input type="text" value="<?= $proprietaire->getCodepostal() ?>">
                <input type="text" value="<?= $proprietaire->getVille() ?>">
        </table>
<?php } ?>
