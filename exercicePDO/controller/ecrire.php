<?php
include '../model/connexion.php';
include '../model/crud.php';

echo "<pre>";
var_dump($_POST);
echo "</pre>";

if(isset($_POST['nom']) && $_POST['prenom'] && $_POST['age']){
    ecrire(htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['age']));
    header('Location: ../index.php');
}else{
    header('Location: ../index.php?erreur="ecrire"');
}