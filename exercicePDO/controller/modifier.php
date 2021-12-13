<?php
include '../model/connexion.php';
include '../model/crud.php';

if(isset($_POST['nom']) && $_POST['prenom'] && $_POST['age']){
    modification(htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prenom']),htmlspecialchars($_POST['age']), htmlspecialchars($_POST['id']));
    header('Location: ../index.php');
}else{
    header('Location: ../index.php?erreur="modification"');
}