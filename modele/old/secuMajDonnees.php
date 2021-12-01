<?php
// requête SQL pour modifier les données dans la base
$sql = "UPDATE personne SET Prenom = ?, Age = ? WHERE Nom LIKE 'Dupont'";
// préparation de la requête
$resultat = mysqli_prepare($connexion, $sql);
// lier les paramètres
$execute = mysqli_stmt_bind_param($resultat, 'si', $Prenom, $Age);
$Prenom = "Boby";
$Age = "66";

// exécution de la requête
$execute = mysqli_stmt_execute($resultat);

// Vérification
if($execute) {
    echo "Nb personne's' modifiées : ".mysqli_stmt_affected_rows($resultat).BR;
}else{
    echo "Echec de la requête de Maj".BR;
}