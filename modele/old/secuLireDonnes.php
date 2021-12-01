<?php
// Ecriture de la requête SQL préparée
$sqlSecuLire = "SELECT Nom, Prenom FROM personne WHERE Age > ?";
// Préparation de la requête
$sqlSelectSecu = mysqli_prepare($connexion, $sqlSecuLire);
// Liaison des paramètres
$liaison = mysqli_stmt_bind_param($sqlSelectSecu, 'i',$age);
$age = 25;
// Exécution de la requête
$execution = mysqli_stmt_execute($sqlSelectSecu);

// Vérification de la bonne exécution
if($execution){
    // Association des variables de résultat
    $execution = mysqli_stmt_bind_result($sqlSelectSecu, $Nom, $Prenom);
    // Lecture des valeurs
    while(mysqli_stmt_fetch($sqlSelectSecu)){
        echo "Nom : $Nom Prenom : $Prenom".BR;
    }
}else{
    echo "C'est mort Pelo";
}