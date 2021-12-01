<?php
// requête SQL
$sql = "INSERT INTO Personne(Nom, Prenom, Age) VALUES (:nom,:prenom,:age)";
// préparer la requête avec les paramètres
$resultat = $base->prepare($sql);
// ajouter les paramètres à la requête
$resultat->bindParam(':nom', $nom);
$resultat->bindParam(':prenom', $prenom);
$resultat->bindParam(':age', $age);

// déclaration des paramètres
$nom = "Talon";
$prenom = "Simon";
$age = 28;

// exécution de la requête
$resultat->execute();
echo "Personne ajoutée💯 avec l'identifiant ".$base->lastInsertId().BR;