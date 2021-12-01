<?php
function lire(){
    global $base;
    // requête SQL
    $sql = "SELECT * FROM personne";
    // récuperer les données de la base
    $resultat = $base->query($sql);
    echo "Nombre de personnes : " . $resultat->rowCount().BR;
    return $resultat->fetchAll();
}
function ecrire($nomRecup, $prenomRecup, $ageRecup){
    global $base;
    // requête SQL
    $sql = "INSERT INTO Personne(Nom, Prenom, Age) VALUES (:nom,:prenom,:age)";
    // préparer la requête avec les paramètres
    $resultat = $base->prepare($sql);
    // ajouter les paramètres à la requête
    $resultat->bindParam(':nom', $nomRecup);
    $resultat->bindParam(':prenom', $prenomRecup);
    $resultat->bindParam(':age', $ageRecup);

    // exécution de la requête
    $resultat->execute();
    return $base->lastInsertId();
}