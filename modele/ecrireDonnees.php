<?php
// Ecriture de la requête SQL
$sqlInsert = "INSERT INTO Personne(Nom , Prenom, Age) VALUES ('CANARD', 'WC', 21)";
// Execution de la requête
//! $write = mysqli_query($connexion, $sqlInsert);
// Vérification de l'exécution de la requête
$write = false;
if($write){
    // récupération du dernier ID
    $id = mysqli_insert_id($connexion);
    echo "Personne enregistré avec identifiant : $id".BR;
}else{
    echo "Echec de l'exécution de la requête".BR;
    echo mysqli_error($connexion) . BR;
}