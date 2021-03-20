<?php
try{
    // Creer la connexion
    $dsn ="sqlite:./maBDD.sqlite";
    $pdo = new PDO ($dsn);
    // Requete SELECT
    $requete = "SELECT nom, prenom from maTable;";
    $tableau = $pdo->query($requete)->fetch();
    // Requete INSERT
    $insertion = "INSERT INTO maTable VALUES ('Lasticot','Coco');";
    $pdo->exec($insertion);

    // Requete préparé avec des points d'interrogations
    $requetePreparee = "SELECT nom, prenom FROM maTable WHERE nom =?;";
    $reqPrep = $pdo->prepare($requetePreparee);
    // $nom = $_POST['nom'];
    $reqPrep->bindValue(1,'Neau');
    $reqPrep->execute();
    $tab = $reqPrep->fetchAll();

    // Requete préparée avec des paramètres nommées (:)
    // Permet d'affecter un paramètre à une colonne et n'est pas affecté
    // en cas de changement d'une colonne contrairement à l'index d'une colonne
    $requetePreparee02 = "SELECT nom, prenom FROM maTable WHERE nom = :nom;";
    $reqPrep02 = $pdo->prepare($requetePreparee02);
    $reqPrep02->bindValue(":nom",'Neau');
    // bindParam() permet d'affecter un paramètre
    $reqPrep02->execute();
    $tab = $reqPrep02->fetchAll();
    var_dump($tab);
} catch (PDOException $e) {
    echo $e->getMessage();
}
