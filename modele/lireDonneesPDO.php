<?php
// requête SQL
$sql = "SELECT * FROM personne";
// récuperer les données de la base
$resultat = $base->query($sql);
echo "Nombre de personnes : " . $resultat->rowCount().BR;

// afficher les personnes
// ajout de visages
$visages = array("👨‍🦰","👨‍🦲","👨‍🦱","👦🏻","👦🏼","👦🏽","👦🏾","👦🏿","👦","👧🏻","👧🏼","👧🏽","👧🏾","👧🏿","👧");
while ($row = $resultat->fetch()){
    $rand_key = array_rand($visages);
    echo $visages[$rand_key];
    echo "Nom : ".$row['Nom'];
    echo " Prenom : ".$row['Prenom'];
    echo " Age : ".$row['Age'].BR;
}
