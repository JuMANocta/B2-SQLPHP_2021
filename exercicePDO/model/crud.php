<?php
function lire(){
    global $base;
    // requête SQL
    $sql = "SELECT * FROM personne ORDER BY Nom";
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

function supprimer($id){
    global $base;
    // requête SQL
    $sql = "DELETE FROM Personne WHERE id = :id";
    // préparer la requête avec les paramètres
    $resultat = $base->prepare($sql);
    // ajouter les paramètres à la requête
    $resultat->bindParam(':id', $id);
    // exécution de la requête
    $resultat->execute();
}

function modification($nomRecup, $prenomRecup, $ageRecup, $idRecup){
    global $base;
    // requête SQL
    $sql = "UPDATE personne SET nom = :nom, prenom = :prenom, age = :age WHERE id = $idRecup";
    // préparer la requête avec les paramètres
    $resultat = $base->prepare($sql);
    // ajouter les paramètres à la requête
    $resultat->bindParam(':nom', $nomRecup);
    $resultat->bindParam(':prenom', $prenomRecup);
    $resultat->bindParam(':age', $ageRecup);
    // exécution de la requête
    $resultat->execute();
}