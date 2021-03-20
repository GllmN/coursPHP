<?php
require_once 'Connection.php';
require_once '../BO/Modele.php';

class ModeleDAO
{
    public function selectAll()
    {
        $tableauDeResultat = [];
        try {
            $pdo = Connection::getConnection();
            $req = "SELECT id_modele, marque, modele, carburant FROM modeles;";
            $tableauDeResultat = $pdo->query($req)->fetchAll();
        } catch (PDOException $e) {
            echo "PDOException : " . $e->getMessage();
        }
        return $tableauDeResultat;
    }

    public function insert(Modele $voiture)
    {
        try {
            $pdo = Connection::getConnection();
            $requete = "INSERT INTO modeles VALUES(:id, :marque, :modele, :carburant)";
            $req = $pdo->prepare($requete);
            $req->bindValue(':id', $voiture->getIdModele());
            $req->bindValue(':marque', $voiture->getMarque());
            $req->bindValue(':modele', $voiture->getModele());
            $req->bindValue(':carburant', $voiture->getCarburant());
            $req->execute();
        } catch (PDOException $e) {
            echo "PDOException : " . $e->getMessage();
        }

    }
}