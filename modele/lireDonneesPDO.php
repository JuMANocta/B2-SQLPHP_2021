<?php
// requête SQL
$sql = "SELECT * FROM personne";
// récuperer les données de la base
$resultat = $base->query($sql);
echo "Nombre de personnes : " . $resultat->rowCount().BR;

// afficher les personnes
while ($row = $resultat->fetch()){
    echo "Nom : ".$row['Nom'];
    echo " Prenom : ".$row['Prenom'];
    echo " Age : ".$row['Age'].BR;
}

$resultat->closeCursor(); // fermeture de la requête