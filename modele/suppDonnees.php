<?php
// Déclation de la requète SQL
$sqlDelete = "DELETE FROM Personne WHERE Nom LIKE 'CANARD'";
// Exécution de la requête SQL
$delete = mysqli_query($connexion, $sqlDelete);
// Vérification du bon fonctionement de la requête
if($delete){
    echo "Personne supprimée.".BR;
}else{
    echo "Echec suppression Personne.".BR;
}