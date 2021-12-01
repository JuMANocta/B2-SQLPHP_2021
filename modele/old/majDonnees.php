<?php
// Ecriture de la requête SQL
$sqlUpdate = "UPDATE Personne SET Nom = 'DURANT', Age = 25 WHERE Nom LIKE 'Durand'";
// Exécution de la requête
$update = mysqli_query($connexion, $sqlUpdate);
if($update){
    // Retour du nombre d'entrée(s) modifiée(s)
    echo "Nombre de personne modifiées : ".mysqli_affected_rows($connexion).BR;
}else{
    echo "Echec de l'exécution de la requête";
}