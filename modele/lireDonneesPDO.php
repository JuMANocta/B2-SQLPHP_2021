<?php
// requÃªte SQL
$sql = "SELECT * FROM personne";
// rÃ©cuperer les donnÃ©es de la base
$resultat = $base->query($sql);
echo "Nombre de personnes : " . $resultat->rowCount().BR;

// afficher les personnes
// ajout de visages
$visages = array("ð¨âð¦°","ð¨âð¦²","ð¨âð¦±","ð¦ð»","ð¦ð¼","ð¦ð½","ð¦ð¾","ð¦ð¿","ð¦","ð§ð»","ð§ð¼","ð§ð½","ð§ð¾","ð§ð¿","ð§");
while ($row = $resultat->fetch()){
    $rand_key = array_rand($visages);
    echo $visages[$rand_key];
    echo "Nom : ".$row['Nom'];
    echo " Prenom : ".$row['Prenom'];
    echo " Age : ".$row['Age'].BR;
}
