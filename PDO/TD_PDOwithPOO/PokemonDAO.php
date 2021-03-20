<?php
require_once './ConnectionProvider.php';
require_once './Pokemon.php';

class PokemonDAO
{
    function insert($pokemon) {
        try{
            $pdo = ConnectionProvider::getConnection();
            $requete = "INSERT INTO pokemon VALUES (:id, :nom)";
            $reqPrep = $pdo->prepare($requete);
            $reqPrep->bindValue(':id', $pokemon->getId());
            $reqPrep->bindValue(':nom', $pokemon->getNom());
            $reqPrep->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $reqPrep->fetchAll();
    }
}