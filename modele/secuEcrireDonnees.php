<?php
// Ecriture de la requête SQL préparée
$sqlInsert = "INSERT INTO Personne(Nom, Prenom, Age) VALUES (?,?,?)";
// Préparation de la requête
$sqlSecuInsert = mysqli_prepare($connexion, $sqlInsert);
// Liaison des données
$liaison = mysqli_stmt_bind_param($sqlSecuInsert, 'ssi', $Nom, $Prenom, $Age);
$Nom = "ROVIER";
$Prenom = "Monique";
$Age = 63;
// Exécution de la requête
$execute = mysqli_stmt_execute($sqlSecuInsert);

// Vérification
if($execute){
    echo "Personne ajoutée.".BR;
}else{
    echo "Erreur";
}