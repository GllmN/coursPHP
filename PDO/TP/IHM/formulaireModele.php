<?php
/**
 * @var ModeleDAO $modeleDAO
 */
?>
<?php
require_once '../BO/Modele.php';
$identifiant = "";
$marque = "";
$modele = "";
$carburant = "";

if (isset($_POST['identifiant'])) {
    $identifiant = $_POST['identifiant'];
}
if (isset($_POST['marque'])) {
    $marque = $_POST['marque'];
}
if (isset($_POST['modele'])) {
    $modele = $_POST['modele'];
}
if (isset($_POST['carburant'])) {
    $carburant = $_POST['carburant'];
}
if (isset($_POST['submit']) && (!isset($_POST['identifiant']) || !isset($_POST['marque']) || !isset($_POST['modele']) || !isset($_POST['carburant']))) {
    $msg = "Informations manquantes";
}
if (isset($_POST['identifiant']) && isset($_POST['marque']) && isset($_POST['modele']) && isset($_POST['carburant']) &&
    !empty($_POST['identifiant']) && !empty($_POST['marque']) && !empty($_POST['modele']) && !empty($_POST['carburant'])) {
    $m = new Modele($identifiant, $marque, $modele, $carburant);
    $modeleDAO->insert($m);
}
?>
<?php if (!empty($msg)) { ?>
    <div class="columns">
        <div class="column">
            <div class="notification is-danger is-light">
                <button class="delete"></button>
                <?= $msg ?>
            </div>
        </div>
    </div>
<?php } ?>
<div class="columns">
    <div class="column is-one-third is-offset-one-third">
        <form method="post" class="box">
            <fieldset>
                <legend><span><i class="fas fa-car"></i></span> Ajouter une voiture</legend>
            </fieldset>
            <br>
            <div class="field">
                <label for="identifiant" class="label is-small">Identifiant</label>
                <div class="control">
                    <input id="identifiant"
                           class="input is-small is-rounded <?= $identifiant !== '' ? 'is-success' : 'is-danger' ?>"
                           name="identifiant" type="text"
                           placeholder="Identifiant" value="<?= $identifiant ?>">
                </div>
            </div>
            <div class="field">
                <label for="marque" class="label is-small">Marque</label>
                <div class="control">
                    <input id="marque"
                           class="input is-small is-rounded <?= $marque !== '' ? 'is-success' : 'is-danger' ?>"
                           name="marque" type="text"
                           placeholder="Marque" value="<?= $marque ?>">
                </div>
            </div>
            <div class="field">
                <label for="modele" class="label is-small">Modele</label>
                <div class="control">
                    <input id="modele"
                           class="input is-small is-rounded <?= $modele !== '' ? 'is-success' : 'is-danger' ?>"
                           name="modele" type="text"
                           placeholder="Modele" value="<?= $modele ?>">
                </div>
            </div>
            <div class="field">
                <label class="label is-small">Carburant</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="carburant" value="essence">
                        Essence
                    </label>
                    <label class="radio">
                        <input type="radio" name="carburant" value="gpl">
                        GPL
                    </label>
                    <label class="radio">
                        <input type="radio" name="carburant" value="diesel">
                        Diesel
                    </label>
                    <label class="radio">
                        <input type="radio" name="carburant" value="electrique">
                        Electrique
                    </label>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input id="submit" class="button is-small is-outlined is-rounded" name="submit" type="submit"
                           value="Ajouter">
                </div>
            </div>
        </form>
    </div>
</div>