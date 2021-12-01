<?php
// Variables de connexion
$host = "mysql:host=localhost";
$login = "www_user";
$pass = "password";
$bdd = "dbname=_test";

try{
    $base = new PDO($host.";".$bdd, $login, $pass);
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connexion OK 👌";
    include("lireDonneesPDO.php");
    include("ecrireDonneesPDO.php");
    $resultat->closeCursor(); // fermeture de la requête
}catch(Exception $e){
    die("Erreur :".$e->getMessage());
}

