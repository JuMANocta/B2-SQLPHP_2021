<?php
// requête SQL
$sql = "UPDATE personne SET Prenom = :prenom, Age = :age WHERE Nom LIKE 'DURAND'";

// préparer la requête avec les paramètres
$resultat = $base->prepare($sql);
// ajouter les paramètres à la requête
$resultat->bindParam(':prenom', $prenom);
$resultat->bindParam(':age', $age);

// déclaration des paramètres
$prenom = "Bob";
$age = 42;

// exécution de la requête
$resultat->execute();