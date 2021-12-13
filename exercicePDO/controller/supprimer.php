<?php
include '../model/connexion.php';
include '../model/crud.php';

if(isset($_POST['nom']) && $_POST['prenom'] && $_POST['age']){
    supprimer(htmlspecialchars($_POST['id']));
    header('Location: ../index.php');
}else{
    header('Location: ../index.php?erreur="supprimer"');
}