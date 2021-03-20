<?php
require_once 'Connection.php';
require_once '../BO/Proprietaire.php';
class ProprietaireDAO
{
    public function selectbyidetnom(int $id, string $nom)
    {
        try {
            $pdo = Connexion::getConnection();
            $requete = "SELECT id_pers, nom, prenom, adresse, ville, codepostal FROM proprietaires WHERE id_pers=:id AND nom=:nom;";
            $reqPrep = $pdo->prepare($requete);
            $reqPrep->bindValue(':id', $id);
            $reqPrep->bindValue(':nom', $nom);
            $reqPrep->execute();
            $tableauDeResultat = $reqPrep->fetchAll();
            var_dump($tableauDeResultat);
            $tableauDeResultat = $reqPrep->fetch();

            if (count($tableauDeResultat)) {
                $proprietaire = new Proprietaire(
                    $tableauDeResultat["id_pers"],
                    $tableauDeResultat['nom'],
                    $tableauDeResultat['prenom'],
                    $tableauDeResultat['adresse'],
                    $tableauDeResultat['ville'],
                    $tableauDeResultat['codepostal']);
            }
        } catch (PDOException $e) {
                echo "PDOException : " . $e->getMessage();
            }
        return null;
    }
}